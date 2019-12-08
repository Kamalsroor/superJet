<?php

namespace App\Http\Controllers;

use App;
use App\Pay\Merchant;
use App\Pay\Parser;
use App\Pay\Pay;
use App\Reservation;
use Auth;
use Config;
use Session;

class CheckOutController extends Controller
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
    public function getReservation($id)
    {
        $Reservation = Reservation::where('id', $id)->with('ReservationsInformation')->first();
        $data = Session::get('data');
        $Offices = GetRequestApi('GET', 'http://tarekmohamedreda-001-site1.atempurl.com/api/tripdata/GetOffices');
        $Bus = GetRequestApi('POST', 'http://tarekmohamedreda-001-site1.atempurl.com/api/TripData/SearchTrips', $data);
        $collection = collect($Bus);
        $data = collect($data);
        $Offices = collect($Offices);
        $configArray = Config::get('checkout');
        $TripOfficeFrom = $Offices->where('Id', $data['TripOfficeFrom_Code'])->first();
        $TripOfficeTo = $Offices->where('Id', $data['TripOfficeTo_Code'])->first();
        $Bu = $collection->where('id', $Reservation->trip_sub_data_id)->first();
        // auth()
        $order_amount = $Reservation->total_price;
        $order_currency = 'AUD';
        $customer_receipt_email = "'" . Auth::user()->email . "'";

        //Creates the Merchant Object from config. If you are using multiple merchant ID's,
        // you can pass in another configArray each time, instead of using the one from configuration.php
        $merchantObj = new Merchant($configArray);

        // The Parser object is used to process the response from the gateway and handle the connections
        // and uses connection.php
        $parserObj = new Parser($merchantObj);

        //The Gateway URL can be set by using the following function, or the
        //value can be set in configuration.php
        //$merchantObj->SetGatewayUrl("https://secure.uat.tnspayments.com/api/nvp");
        $requestUrl = $parserObj->FormRequestUrl($merchantObj);

        //This is a library if useful functions
        $new_api_lib = new Pay;

        //Use a method to create a unique Order ID. Store this for later use in the receipt page or receipt function.
        $order_id = $new_api_lib->getRandomString(10);

        //Form the array to obtain the checkout session ID.
        $request_assoc_array = array("apiOperation" => "CREATE_CHECKOUT_SESSION",
            "order.id" => $order_id,
            "order.amount" => $order_amount,
            "order.currency" => $order_currency,
        );

        //This builds the request adding in the merchant name, api user and password.
        $request = $parserObj->ParseRequest($merchantObj, $request_assoc_array);

        //Submit the transaction request to the payment server
        $response = $parserObj->SendTransaction($merchantObj, $request);

        //Parse the response
        $parsed_array = $new_api_lib->parse_from_nvp($response);

        //Store the successIndicator for later use in the receipt page or receipt function.
        $successIndicator = $parsed_array['successIndicator'];

        //The session ID is passed to the Checkout.configure() function below.
        $session_id = $parsed_array['session.id'];

        //Store the variables in the session, or a database could be used for example
        // $_SESSION['successIndicator'] = $successIndicator;
        // $_SESSION['orderID'] = $order_id;
        Session::put('successIndicator', $successIndicator);
        Session::put('orderID', $order_id);

        $merchantID = "'" . $merchantObj->GetMerchantId() . "'";
        // dd($merchantID);
        return view('seetingInfo', compact('Reservation', 'merchantID','order_id','customer_receipt_email','session_id','order_amount','order_currency','TripOfficeFrom', 'Bu', 'TripOfficeTo', 'data'));
    }

}
