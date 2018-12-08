<?php

namespace App\Http\Controllers\Auth;

use App\FileUpload;
use App\SubBroker;
use App\Address;
use App\BankMaster;
use App\Introducer;
use App\Nominee;
use App\Http\Controllers\Controller;
use App\Util;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\RegistersUsers;
use Validator;


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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $subbroker = $request->isMethod('put') ? SubBroker::findOrFail($request->id) : new SubBroker;

        if($request->isMethod('put'))
        {

            $validator = Validator::make($request->all(),
                [
                    'id' => 'required|integer',
                    'name' => 'required|string|max:180',
                    'associatetype' => 'required|in:individual,company',
                    'introducername' => 'string|max:100|nullable',
                    'introducercode' => 'string|max:80|nullable',
                    'pradress' => 'required|string|max:180',
                    'permadress' => 'required|string|max:180',
                    'dob' => 'required|date',
                    'age' =>'required|integer',
                    'mobno' => 'required|max:10',
                    'homephno' => 'nullable',
                    'faxno' => 'nullable',
                    'email' => 'required|string|email|max:180|unique:sub_broker_master',
                    'password' => 'required|string|min:8|confirmed',
                    'qualification' => 'required|string',
                    'proffqualification' => 'nullable|string',
                    'amfino' => 'required|in:yes,no',
                    'arnattachment' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                    'irdano' => 'required|in:yes,no',
                    'otherqualification' => 'nullable|string',
                    'occupation' => 'required|in:service,business,housewife,retired,other',
                    'experience' => 'required|integer',
                    'product' => 'required|in:fixeddeposit,mutualfund,rbibonds,lifeinsurance,generalinsurance,educationalproduct,poscheme',
                    'pan_no' => 'required|string|unique:sub_broker_master',
                    'aadharno' => 'required|max:12',
                    'bankname' => 'required|string',
                    'bankbranchname' => 'required|string',
                    'accountno' => 'required|string',
                    'branchcode' => 'required|string',
                    'ifsc' => 'required|string',
                    'micr' => 'required|string',
                    'rtgs' => 'required|string',
                    'accounttype' => 'required|in:savings,current,nre,nro',
                    'nomineename' => 'required|string',
                    'nomineerelation' => 'required|string',
                ]
            );

            if ($validator->fails()) {
                return redirect('auth.register')
                    ->withErrors($validator)
                    ->withInput();
            }
        }
        else
        {
            $validator = Validator::make($request->all(),
                [
                    'id' => 'required|integer',
                    'name' => 'required|string|max:180',
                    'associatetype' => 'required|in:individual,company',
                    'introducername' => 'string|max:100|nullable',
                    'introducercode' => 'string|max:80|nullable',
                    'pradress' => 'required|string|max:180',
                    'permadress' => 'required|string|max:180',
                    'dob' => 'required|date',
                    'age' =>'required|integer',
                    'mobno' => 'required|max:10',
                    'homephno' => 'nullable',
                    'faxno' => 'nullable',
                    'email' => 'required|string|email|max:180|unique:sub_broker_master',
                    'password' => 'required|string|min:8|confirmed',
                    'qualification' => 'required|string',
                    'proffqualification' => 'nullable|string',
                    'amfino' => 'required|in:yes,no',
                    'arnattachment' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                    'irdano' => 'required|in:yes,no',
                    'otherqualification' => 'nullable|string',
                    'occupation' => 'required|in:service,business,housewife,retired,other',
                    'experience' => 'required|integer',
                    'product' => 'required|in:fixeddeposit,mutualfund,rbibonds,lifeinsurance,generalinsurance,educationalproduct,poscheme',
                    'pan_no' => 'required|string|unique:sub_broker_master',
                    'aadharno' => 'required|max:12',
                    'bankname' => 'required|string',
                    'bankbranchname' => 'required|string',
                    'accountno' => 'required|string',
                    'branchcode' => 'required|string',
                    'ifsc' => 'required|string',
                    'micr' => 'required|string',
                    'rtgs' => 'required|string',
                    'accounttype' => 'required|in:savings,current,nre,nro',
                    'nomineename' => 'required|string',
                    'nomineerelation' => 'required|string',
                ]
            );

            if ($validator->fails()) {
                return redirect('auth.register')
                    ->withErrors($validator)
                    ->withInput();
            }
        }

        $subBroker = new SubBroker;
        $bankDetails = new BankMaster;
        $nominee = new Nominee;
        $address = new Address;
        $introducer = new Introducer;

        $introducer->introducer_name = $request->input('introducername');
        $introducer->introducer_code = $request->input('introducercode');

        $introducer->save();

        dd($introducer);
        $address_input = [
            'present_address' => $input["pradress"],
            'permanent_address' => $input["permadress"],
        ];

        $address = Address::create($address_input);

        $brokercompany->b_company_id = $request->input('company_id');
        $brokercompany->b_company_name = $request->input('company_name');
        $brokercompany->b_avg_feedback_day = $request->input('feedback_day');
        $brokercompany->b_company_email = $request->input('company_email');
        $brokercompany->b_company_address = $request->input('company_address');
        $brokercompany->b_company_pin = $request->input('company_pin');
        $brokercompany->b_company_city = $request->input('company_city');
        $brokercompany->b_company_state = $request->input('company_state');
        $brokercompany->b_company_country = $request->input('company_country');
        $brokercompany->b_company_GSTIN = $request->input('company_gstinno');

        if($brokercompany->save())
        {
            return redirect()->route('brokercompany.index');
        }
    }


    public function register(Request $request)
    {
        $this->validator($request->all())->validate();
        event(new Registered($subbroker = $this->create($request->all())));
        return $this->registered($request, $subbroker)
            ?: redirect($this->redirectPath());
    }

    public function showRegistrationForm()
    {
        return view("auth.register");
    }
}
