<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HappyTraveler;
use App\Bus;
use App\Job;
use App;
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
}
