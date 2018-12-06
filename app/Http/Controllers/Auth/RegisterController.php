<?php

namespace App\Http\Controllers\Auth;

use App\SubBroker;
use App\Address;
use App\BankMaster;
use App\Introducer;
use App\Nominee;
use App\Http\Controllers\Controller;
use App\Util;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'sub_broker_id' => 'required|integer',
            'sub_broker_name' => 'required|string|max:180',
            'sub_broker_type' => 'required|in:individual,company',
            'sub_broker_introducer_name' => 'string|max:100|nullable',
            'sub_broker_introducer_code' => 'string|max:80|nullable',
            'sub_broker_present_address' => 'required|string|max:180',
            'sub_broker_permanent_address' => 'required|string|max:180',
            'sub_broker_dob' => 'required|date',
            'sub_broker_age' =>'required|integer',
            'sub_broker_mob_no' => 'required|integer|max:10',
            'sub_broker_home_no' => 'nullable|integer',
            'sub_broker_fax_no' => 'nullable|integer',
            'sub_broker_email' => 'required|string|email|max:180|unique:sub_broker_master',
            'sub_broker_password' => 'required|string|min:8|confirmed',
            'sub_broker_edu_quali' => 'required|string',
            'sub_broker_proff_quali' => 'nullable|string',
            'sub_broker_amfi' => 'required|in:yes,no',
            'sub_broker_amfi_file' => 'image|mime:jpeg,png,jpg,gif,svg|max:2048',
            'sub_broker_irda' => 'required|in:yes,no',
            'sub_broker_other_quali' => 'nullable|string',
            'sub_broker_occupation' => 'required|in:service,business,housewife,retired,other',
            'sub_broker_experience' => 'required|integer',
            'sub_broker_product_exp' => 'required|in:fixeddeposit,mutualfund,rbibonds,lifeinsurance,generalinsurance,educationalproduct,poscheme',
            'sub_broker_pan_no' => 'required|string|unique:sub_broker_master',
            'sub_broker_aadhar' => 'required|integer|max:12',
            'sub_broker_bank name' => 'required|string',
            'sub_broker_bank_branch_name' => 'required|string',
            'sub_broker_account_no' => 'required|string',
            'sub_broker_branch_code' => 'required|string',
            'sub_broker_ifsc' => 'required|string',
            'sub_broker_micr' => 'required|string',
            'sub_broker_rtgs' => 'required|string',
            'sub_broker_account_type' => 'required|in:savings,current,nre,nro',
            'sub_broker_nominee_name' => 'required|string',
            'sub_broker_nominee_relation' => 'required|string',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $input)
    {
        DB::beginTransaction();

        try
        {
            $subBroker = new SubBroker;
            $bankDetails = new BankMaster;
            $nominee = new Nominee;
            $address = new Address;
            $introducer = new Introducer;

            $subBroker_input = [
                'name' => $input['name'],
                'identity' => $input['associatetype'],
                'introducer_detail_id' => $input['introducer_detail_id'],
                'dob' => Util::mysqlDateTimeConverter($input["dob"]),
                'age' => Util::mysqlDateTimeConverter($input["age"]),
                'phone_no' => $input["mobno"],
                'email' => $input["email"],
                'home_no' => $input["homephno"],
                'fax_no' => $input["faxno"],
                'education' => $input[""]
            ];
        }
        catch (\Exception $exception)
        {

        }

    }
}
