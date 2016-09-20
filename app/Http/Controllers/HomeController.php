<?php

namespace App\Http\Controllers;

use App\User;
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
        $this->middleware('auth');
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

    public function anasayfa()
    {
        return view('frontend.pages.anasayfa');
    }

    public function giris()
    {
        return view('frontend.pages.login');
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
}
