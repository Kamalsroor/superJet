<?php

namespace App\Http\Controllers;

use App;
use App\About;
use App\Bus;
use App\Complaint;
use App\Contacte;
use App\HappyTraveler;
use App\Job;
use App\JobContent;
use App\Reservation;
use App\ReservationsInformation;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Response;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {

        // dd($request->all());
        $Offices = GetRequestApi('GET', 'http://tarekmohamedreda-001-site1.atempurl.com/api/tripdata/GetOffices');
        // dd($Offices);
        $Bus = Bus::with('services', 'translations')->get()->translate(app()->getLocale());
        $HappyTraveler = HappyTraveler::get()->take(4)->translate(app()->getLocale());
        return view('welcome', compact('HappyTraveler', 'Bus', 'Offices'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function Search(Request $request)
    {

        $data = [
            "TripOfficeFrom_Code" => $request->TripOfficeFrom_Code,
            "TripOfficeTo_Code" => $request->TripOfficeTo_Code,
            "TripDateTimeFrom" => $request->TripDateTimeFrom,
            "TripDateTimeTo" => $request->TripDateTimeTo,
        ];
        Session::put('data', $data);

        $Offices = GetRequestApi('GET', 'http://tarekmohamedreda-001-site1.atempurl.com/api/tripdata/GetOffices');
        $Bus = GetRequestApi('POST', 'http://tarekmohamedreda-001-site1.atempurl.com/api/TripData/SearchTrips', $data);
        $collection = collect($Offices);

        $TripOfficeFrom = $collection->where('Id', $request->TripOfficeFrom_Code)->first();
        $TripOfficeTo = $collection->where('Id', $request->TripOfficeTo_Code)->first();
        return view('search', compact('Bus', 'TripOfficeFrom', 'TripOfficeTo', 'data'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function SearchBus($id)
    {
        $dataChairs = [
            'id' => $id,
        ];
        $data = Session::get('data');
        $Offices = GetRequestApi('GET', 'http://tarekmohamedreda-001-site1.atempurl.com/api/tripdata/GetOffices');
        $Bus = GetRequestApi('POST', 'http://tarekmohamedreda-001-site1.atempurl.com/api/TripData/SearchTrips', $data);
        $Chairs = GetRequestApi('GET', 'http://tarekmohamedreda-001-site1.atempurl.com/api/TripData/GetChairs?id=' . $id);
        $collection = collect($Bus);
        $Chairs = collect($Chairs);
        $Chairs = $Chairs->pluck('SeatNo')->toArray();
        $data = collect($data);
        $Offices = collect($Offices);
        $TripOfficeFrom = $Offices->where('Id', $data['TripOfficeFrom_Code'])->first();
        $TripOfficeTo = $Offices->where('Id', $data['TripOfficeTo_Code'])->first();
        $Bu = $collection->where('id', $id)->first();
        // dd();
        return view('seet', compact('Bu', 'data', 'TripOfficeFrom', 'TripOfficeTo', 'Chairs', 'id'));
    }





    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function SearchSeed(Request $request)
    {

        if (!\Auth::check()) {
            return Response::json(['error' => 'unauthenticated'], 404);
        }

        for ($i = 0; $i < count($request->seet); $i++) {
            $dataChairs = [
                'id' => $request->id,
                'chair' => $request->seet[$i],
            ];
            $Chairs = GetRequestApi('POST', 'http://tarekmohamedreda-001-site1.atempurl.com/api/TripData/CheckCurrentSeat', $dataChairs);
            if ($Chairs == "Not Available") {
                return Response::json(['error' => 'الكورسي رقم ' . $request->seet[$i] . 'محجوز من قبل'], 404);
            }
        }
        $data = Session::get('data');
        $Bus = GetRequestApi('POST', 'http://tarekmohamedreda-001-site1.atempurl.com/api/TripData/SearchTrips', $data);
        $Bus = collect($Bus);
        $Bu = $Bus->where('id', $request->id)->first();
        $getRandomString = rand(1000000, 9999999);
        $totlePrice = count($request->seet) * $Bu->TripPrice;
        $Reservation = new Reservation;
        $Reservation->user_id = Auth::user()->id;
        $Reservation->ref = $getRandomString;
        $Reservation->total_price = $totlePrice;
        $Reservation->trip_sub_data_id = $request->id;
        $Reservation->trip_data_id = $Bu->tripdata_id;
        $Reservation->save();
        for ($i = 0; $i < count($request->seet); $i++) {
            $dataChairs = [
                'ActionEmp_Code' => 9999,
                'ActionNode_Code' => 9999,
                'ActionOffice_Code' => 9999,
                'tripsubdataid' => $request->id, //id trip
                'tripdataid' => $request->tripdata_id,
                'SeatNo' => $request->seet[$i],
                'Web_Ref_ID' => $getRandomString,
                'Web_User_ID' => Auth::user()->id,
                'Web_User_Name' => Auth::user()->name,
            ];
            $dataChairschesk = [
                'id' => $request->id,
                'chair' => $request->seet[$i],
            ];
            $Chairs = GetRequestApi('POST', 'http://tarekmohamedreda-001-site1.atempurl.com/api/TripData/CheckCurrentSeat', $dataChairschesk);
            if ($Chairs == "available") {
                $Chairs = GetRequestApi('POST', 'http://tarekmohamedreda-001-site1.atempurl.com/api/TripData/SaveSeat', $dataChairs);
                $ReservationsInformation = new ReservationsInformation;
                $ReservationsInformation->char_num = $request->seet[$i];
                $ReservationsInformation->char_id = $Chairs->ID;
                $Reservation->ReservationsInformation()->save($ReservationsInformation);
            }

        }
        return Response::json(['success' => 'تم الحجز بنجاح' , 'id' => $Reservation->id], 200);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function ContactUs($page)
    {
        $Contactes = Contacte::whereTranslation('branch_name', $page)->with('translations')->get()->translate(app()->getLocale())->first();
        // dd($Contactes);
        // $HappyTraveler = HappyTraveler::get()->take(4)->translate(app()->getLocale());
        return view('Contacte', compact('Contactes'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function CancelAllSeat()
    {
        // dd($Contactes);
        $user_id = Auth::user()->id;

        $ReservationsInformation = ReservationsInformation::whereHas('Reservations', function ($q) use ($user_id) {
            $q->where('user_id', $user_id);
        })->pluck('char_id')->toArray();
        // where('user_id', Auth::user()->id);
        $dataChairs = [
            'ActionEmp_Code' => 9999,
            'ActionNode_Code' => 9999,
            'ActionOffice_Code' => 9999,
            'ids' => $ReservationsInformation, //id trip
        ];
        $CancelAllSeat = GetRequestApi('POST', 'http://tarekmohamedreda-001-site1.atempurl.com/api/TripData/CancelAllSeat', $dataChairs);
        $ReservationsInformation = ReservationsInformation::whereHas('Reservations', function ($q) use ($user_id) {
            $q->where('user_id', $user_id);
        })->delete();

        return Response::json(['success' => 'تم الغاء الحجز بنجاح'], 200);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function SaveAllSeat()
    {
        // dd($Contactes);
        $user_id = Auth::user()->id;

        $ReservationsInformation = Reservation::where('user_id', $user_id)->first();

        // where('user_id', Auth::user()->id);
        $dataChairs = [
            'ActionEmp_Code' => 9999,
            'ActionNode_Code' => 9999,
            'ActionOffice_Code' => 9999,
            'TripSubData_Id' => $ReservationsInformation->trip_sub_data_id, //id trip
            'tripdataid' => $ReservationsInformation->trip_data_id, //id trip
            'Web_User_ID' => Auth::user()->id, //id trip
            'Web_Ref_ID' => $ReservationsInformation->ref, //id trip
        ];
        $CancelAllSeat = GetRequestApi('POST', 'http://tarekmohamedreda-001-site1.atempurl.com/api/TripData/SaveAllSeats', $dataChairs);
        dd($CancelAllSeat, $ReservationsInformation, $dataChairs);
        return Response::json(['success' => 'تم تأكيد الحجز بنجاح'], 200);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function Jobs()
    {
        $Jobs = Job::with('translations')->get()->translate(app()->getLocale());
        return view('job', compact('Jobs'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function About()
    {
        $About = About::with('translations')->get()->translate(app()->getLocale());
        return view('about', compact('About'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function JobContent()
    {
        // $Jobs = Job::with('translations')->get()->translate(app()->getLocale());
        return view('JobContent');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function Complaints()
    {
        // $Jobs = Job::with('translations')->get()->translate(app()->getLocale());
        return view('Complaints');
    }

    public function lang($locale)
    {
        App::setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    }

    public function JobContentStore(Request $request)
    {
        $rules = [
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|email',
            'comment' => 'required',
            'cv' => 'max:10000',
        ];
        $this->validate($request, $rules);
        $record = new JobContent;
        $filesPath = [];
        if (request()->file('cv')) {
            $path = $this->generatePath();
            $file = $request->file('cv');
            $filename = $this->generateFileName($file, $path);
            $filenames = $filename;
            $file->storeAs(
                $path,
                $filenames . '.' . $file->getClientOriginalExtension(),
                config('voyager.storage.disk', 'public')
            );
            array_push($filesPath, [
                'download_link' => $path . $filenames . '.' . $file->getClientOriginalExtension(),
                'original_name' => $file->getClientOriginalName(),
            ]);
            $record->cv = json_encode($filesPath);
        }

        // $record->cv = [{"download_link":"job-contents\/November2019\/","original_name":"about-us-4.png"}];
        $record->fname = $request->input('fname');
        $record->lname = $request->input('lname');
        $record->email = $request->input('email');
        $record->comment = $request->input('comment');
        $record->save();
        // flash()->success('تــم اضــافة القسم بنجــاح');
        return redirect(route('job.contact'))->with('success', 'You have done successfully');
    }

    public function ComplaintsStore(Request $request)
    {
        $rules = [
            'fname' => 'required',
            'lname' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'comment' => 'required',
            'type' => 'required',

        ];
        $this->validate($request, $rules);
        $record = new Complaint;
        // $record->cv = [{"download_link":"job-contents\/November2019\/","original_name":"about-us-4.png"}];
        $record->fname = $request->input('fname');
        $record->lname = $request->input('lname');
        $record->email = $request->input('email');
        $record->type = $request->input('type');
        $record->phone = $request->input('phone');
        $record->comment = $request->input('comment');
        $record->save();
        // flash()->success('تــم اضــافة القسم بنجــاح');
        return redirect(route('complaints'))->with('success', 'You have done successfully');
    }

    /**
     * @return string
     */
    protected function generatePath()
    {
        return 'job-contents' . DIRECTORY_SEPARATOR . date('FY') . DIRECTORY_SEPARATOR;
    }

    protected function generateFileName($file, $path)
    {
        if (isset($this->options->preserveFileUploadName) && $this->options->preserveFileUploadName) {
            $filename = basename($file->getClientOriginalName(), '.' . $file->getClientOriginalExtension());
            $filename_counter = 1;

            // Make sure the filename does not exist, if it does make sure to add a number to the end 1, 2, 3, etc...
            while (Storage::disk(config('voyager.storage.disk'))->exists($path . $filename . '.' . $file->getClientOriginalExtension())) {
                $filename = basename($file->getClientOriginalName(), '.' . $file->getClientOriginalExtension()) . (string) ($filename_counter++);
            }
        } else {
            $filename = Str::random(20);

            // Make sure the filename does not exist, if it does, just regenerate
            while (Storage::disk(config('voyager.storage.disk'))->exists($path . $filename . '.' . $file->getClientOriginalExtension())) {
                $filename = Str::random(20);
            }
        }

        return $filename;
    }
}
