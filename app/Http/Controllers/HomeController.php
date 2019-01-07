<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Policy;

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
        // $policyLists = Policy::find($id);
        // $subbroker = Policy::find($policyLists->sub_broker_id);
        // return view('home', compact('policyLists', 'subbroker'));
    }
}
