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
        $name = $subBroker->name;
        $policy = $subBroker->policies;
        // dd($policy);
        // dd($subBroker);
        if($subBroker->policies == null)
        {
            
            return view('home2')->with('subBroker' , $subBroker);

        }
        else
        {
            $sub_brokers = SubBroker::with(['userActivation' , 'policies'])->where('introducer_code' , $subBroker->userActivation->user_id)->get();
            // $joinee_policy = $sub_brokers->policies;
            // dd($sub_brokers);
            // return response()->json($joinee_policy);
            // if($sub_brokers)
            // {
            //     return view('home')->with(['policy' => $policy , 'sub_brokers' => $sub_brokers , 'name' => $name]);
            // }
            // else
            // {
            //     return view('home')->with('subBroker' , $subBroker->policy);
            // }
            
        }

        //return view('home');
        
    }
}
