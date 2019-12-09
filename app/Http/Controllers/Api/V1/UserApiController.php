<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\User;
use Hash;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
// use Symfony\Component\HttpFoundation\Response;
use Response;
use Str;

/**
 * Class UserApiController
 * @package App\Http\Controllers\Api\V1\Admin
 */
class UserApiController extends Controller
{
    /**
     * Undocumented function
     *
     * @param UserRequest $request
     * @return JsonResponse
     */
    public function store(UserRequest $request)
    {
        $User = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'avatar' => "users/default.png",
            'role_id ' => 2,
        ]);
        // if ($request->input('avatar', false)) {
        //     $User->addMedia(storage_path('tmp/uploads/' . $request->input('avatar')))->toMediaCollection('avatar');
        // }

        $User->api_token = Str::random(60);
        $User->save();
        $data = [
            'user' => $User,
        ];
        return Response::json(['success' => $data], 200);

        // return ([
        //     'user' => $User,
        //     'api_token' => $User->api_token,
        // ])
        //     ->response()
        //     ->setStatusCode(Response::HTTP_CREATED);
    }

    /**
     * @param Request $Request
     * @return JsonResponse
     */
    public function login(Request $Request)
    {

        if (isset($Request->email)) {
            $User = User::where('email', $Request->email)->get();
        } else {
            return response()->json(['error' => 'Unauthorised'], 401);
        }
        if (count($User) > 0 && count($User) < 2) {
            if (isset($Request->password)) {
                if (!Hash::check($User[0]->password, $Request->password)) {
                    $User = $User[0];
                    $data = [
                        'user' => $User,
                    ];
                    return Response::json(['success' => $data], 200);

                } else {
                    return response()->json(['error' => 'Unauthorised'], 401);
                }
            }
        } else {
            return response()->json(['error' => 'Unauthorised'], 401);
        }
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

}
