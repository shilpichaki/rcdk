<?php

namespace App\Http\Controllers;

use App\Policy;
use App\SubBroker;
use Illuminate\Http\Request;
use DB;
use Validator;

class PolicyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $policyLists = Policy::all();

        return view('policy.index', compact('policyLists'));
    }

    public function create()
    {
        $subbrokers = DB::table('sub_broker_master')->select('id','name')->get();
        return view('policy.create', compact('subbrokers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $rules = [
            'sub_broker_name',
            'policy_holder_name',
            'category',
            'product_name',
            'policy_amount',
            'issuing_status',
        ];

        $this->validate($request, $rules);

        $policy = new Policy;

        $policy->sub_broker_id = $request->sub_broker_name;
        $policy->policy_holder_name = $request->policy_holder_name;
        $policy->category = $request->category;
        $policy->product_name = $request->product_name;
        $policy->policy_amount = $request->policy_amount;
        $policy->issuing_status = $request->issuing_status;

        $policy->save();

//        $data = $request->all();
//        $subbroker = Policy::create($data);

        return redirect()->route('policy.index');
    }

    public function edit(policy  $policy ,$id)
    {
        $policy = Policy::findOrFail($id);
        $subbroker = SubBroker::all();
        $sub_broker = Policy::findOrFail($policy ->sub_broker_id);

        return view('policy.edit', compact('policy','subbroker','sub_broker'));
    }

    public function update(Request $request, $id)
    {
        $policy = Policy::find($id);

        $request->validate([
            'sub_broker_name',
            'policy_holder_name',
            'category',
            'product_name',
            'policy_amount',
            'issuing_status',
        ]);

        $policy->policy_holder_name = $request->get('policy_holder_name');
        $policy->category = $request->get('category');
        $policy->product_name = $request->get('product_name');
        $policy->policy_amount = $request->get('policy_amount');
        $policy->issuing_status = $request->get('issuing_status');

        $policy->save();

        return redirect()->route('policy.index');
    }
}
