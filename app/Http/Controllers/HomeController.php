<?php

namespace App\Http\Controllers;

use App\SliderModel;
use App\User;


use Analytics;

use Spatie\Analytics\Period;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function get_index()
    {
        $slider=SliderModel::all();
        return view('frontend.pages.anasayfa')->with('slider',$slider);
    }


    public function mail()
    {
        $user = User::all();

        foreach ($user as $u)
        {
            Mail::queue('emails.echo', ['user' => $u], function ($m) use ($u) {

                $m->from('hello@app.com', 'Your Application');

                $m->to($u->email, $u->name)->subject('Your Reminder!');
            });
        }

    }

    public function empt()
    {
        return view('backend.pages.empty');
    }

    public function deneme()
    {
        $analyticsData = Analytics::fetchVisitorsAndPageViews(Period::days(365));
        dd($analyticsData);
    }
}
