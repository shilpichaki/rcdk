<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Policy;
use DB;
use Illuminate\Support\Facades\Auth;
use App\SubBroker;

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
        $subBroker = SubBroker::findOrFail(Auth::user()->id);
        // dd($subBroker);
        // if($subBroker->policy == null)
        // {
        // //     // dd($policyLists->sub_broker->name);
        //     return view('home')->with('subBroker' , $subBroker);
        // }
        // else
        // {
        //     return view('home')->with('policyLists' , $subBroker->policy);
        // }

        if($subBroker->policy == null)
        {
            
            return redirect()->route('policy.create');

        }
        else
        {
            // if()
            return view('home')->with('subBroker' , $subBroker->policy);
        }
        //dd($policyLists);

        // return view('home', compact('policyLists'));
        
    }
}
