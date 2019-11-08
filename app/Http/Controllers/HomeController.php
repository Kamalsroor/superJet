<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HappyTraveler;
use App\Bus;
use App\Job;
use App\JobContent;
use App;
// use Storage;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
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
    public function index()
    {
        $Bus = Bus::with('services','translations')->get()->translate(app()->getLocale());
        $HappyTraveler = HappyTraveler::get()->take(4)->translate(app()->getLocale());
        return view('welcome',compact('HappyTraveler','Bus'));
    }



    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function Jobs()
    {
        $Jobs = Job::with('translations')->get()->translate(app()->getLocale());
        return view('job',compact('Jobs'));
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
        $this->validate($request,$rules);
        $record = new JobContent;
        $filesPath = [];
        if (request()->file('cv')) {
            $path = $this->generatePath();
            $file = $request->file('cv');
            $filename = $this->generateFileName($file, $path);
            $filenames= $filename;
            $file->storeAs(
                $path,
                $filenames.'.'.$file->getClientOriginalExtension(),
                config('voyager.storage.disk', 'public')
            );
            array_push($filesPath, [
                'download_link' => $path.$filenames.'.'.$file->getClientOriginalExtension(),
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
        return redirect(route('job.contact'));
    }




    /**
     * @return string
     */
    protected function generatePath()
    {
        return 'job-contents'.DIRECTORY_SEPARATOR.date('FY').DIRECTORY_SEPARATOR;
    }

    protected function generateFileName($file, $path)
    {
        if (isset($this->options->preserveFileUploadName) && $this->options->preserveFileUploadName) {
            $filename = basename($file->getClientOriginalName(), '.'.$file->getClientOriginalExtension());
            $filename_counter = 1;

            // Make sure the filename does not exist, if it does make sure to add a number to the end 1, 2, 3, etc...
            while (Storage::disk(config('voyager.storage.disk'))->exists($path.$filename.'.'.$file->getClientOriginalExtension())) {
                $filename = basename($file->getClientOriginalName(), '.'.$file->getClientOriginalExtension()).(string) ($filename_counter++);
            }
        } else {
            $filename = Str::random(20);

            // Make sure the filename does not exist, if it does, just regenerate
            while (Storage::disk(config('voyager.storage.disk'))->exists($path.$filename.'.'.$file->getClientOriginalExtension())) {
                $filename = Str::random(20);
            }
        }

        return $filename;
    }
}
