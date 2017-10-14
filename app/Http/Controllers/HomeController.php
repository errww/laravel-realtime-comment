<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Events\TimelineEvent;
use App\Timeline;

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

    public function send(request $request)
    {
        $this->saveToDatabase($request);

        $user = User::find(Auth::id());
        event(new TimelineEvent($request->message,$user));
    }


    public function saveToDatabase($request){

        $timeline = new Timeline;

        $timeline->user_id = Auth::user()->id;

        $timeline->message = $request->message ;

        $timeline->save(); 


    }


    
}
