<?php

namespace App\Http\Controllers\Auth;

use App\FileUpload;
use App\Product;
use App\SubBroker;
use App\Address;
use App\BankMaster;
use App\Introducer;
use App\Nominee;
use App\UserActivation;
use App\Mail\VerifyMail;
use App\Http\Controllers\Controller;
use App\Util;
use Dotenv\Exception\ValidationException;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\RegistersUsers;
use Validator;
use DB;

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
            'name' => 'required|string|max:180',
            'identity' => 'required|in:individual,company',
            'introducername' => 'string|nullable',
            'introducercode' => 'string|nullable',
            'pradress' => 'required|string|max:180',
            'permadress' => 'required|string|max:180',
            'dob' => 'required|date',
            'age' =>'required|integer',
            'mobno' => 'required',
            'homephno' => 'nullable',
            'faxno' => 'nullable',
            'email' => 'required|string|email|max:180|unique:sub_broker_master',
            'password' => 'required|string|min:6|confirmed',
            'qualification' => 'required|string',
            'proffqualification' => 'nullable|string',
            'amfino' => 'required|in:yes,no',
            'filename' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'irdano' => 'required|in:yes,no',
            'otherqualification' => 'nullable|string',
            'occupation' => 'required|in:service,business,housewife,retired,other',
            'experience' => 'required|integer',
            'product' => 'required|in:fixeddeposit,mutualfund,rbibonds,lifeinsurance,generalinsurance,educationalproduct,poscheme',
            'pan_no' => 'required|string|unique:sub_broker_master',
            'aadharno' => 'required',
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
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'sign' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
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
//        return User::create([
//            'name' => $data['name'],
//            'email' => $data['email'],
//            'password' => Hash::make($data['password']),
//        ]);
        DB::beginTransaction();

        //sub-broker details
        $subbroker = SubBroker::create([
            'name' => strtoupper($input['name']),
            'identity' => $input['associatetype'] ,
            'introducer_name' => $input['introducername'],
            'introducer_code' => $input['introducercode'],
            'dob' => Util::mysqlDateTimeConverter($input['dob']),
            'age' => $input['age'],
            'phone_no' => $input['mobno'],
            'email' => $input['email'],
            'home_no' => $input['homephno'],
            'fax_no' => $input['faxno'],
            'password' => bcrypt($input['password']),
            'education' => $input['qualification'],
            'proff_qualification' => $input['proffqualification'],
            'amfi_no' => $input['amfino'] ,
            'irda_no' => $input['irdano'] ,
            'other_qualification' => $input['otherqualification'],
            'occupation' => $input['occupation']  ,
            'exp_year' => $input['experience'],
            'pan_no' => $input['panno'],
            'aadhar_no' => $input['aadharno'],
        ]);

        //bank-details
        BankMaster::create([
            'sub_broker_id' => $subbroker->id,
            'bank_name' => $input['bankname'],
            'branch_name' => $input['bankbranchname'],
            'account_no' => $input['accountno'],
            'branch_code' => $input['branchcode'],
            'ifsc' => $input['ifsc'],
            'micr' => $input['micr'],
            'branch_rtgs_no' => $input['rtgs'],
            'acc_type' => $input['accounttype'] ,
        ]);

        //nominee-details
        Nominee::create([
            'sub_broker_id' => $subbroker->id,
            'nominee_name' => $input['nomineename'],
            'nominee_relationship' => $input['nomineerelation'],
        ]);

        //address-details
        Address::create([
            'sub_broker_id' => $subbroker->id,
            'permanent_street' => $input['permstreet'],
            'permanent_town' => $input['permtown'],
            'permanent_pin' => $input['permpin'],
            'permanent_state_id' => $input['permstate'],
            'present_street' => $input['presentstreet'],
            'present_town' => strtoupper($input['presenttown']),
            'present_pin' => $input['presentpin'],
            'present_state_id' => $input['presentstate'],
        ]);

        //Generate User-ID and save
        $string_name = strtoupper($input['name']);
        $string_town = strtoupper($input['presenttown']);
        $rand_no = mt_rand(100000, 999999);
        $string_const = "RCDK/" ;

        $RCDK = array_filter(explode(" ", $string_const));

        $username = array_filter(explode(" ", $string_name));
        $username = array_slice($username, 0, 3); //return only first three part

        $town = array_filter(explode(" ", $string_town));
        $town = array_slice($town, 0, 3);//return only first three part

        $part1 = (!empty($RCDK[0]))?substr($RCDK[0],0 ,5):"";
        $part2 = (!empty($username[0]))?substr($username[0], 0,3):"";
        $part3 = (!empty($town[0]))?substr($town[0], 0,3):"";
        //$part2 = (!empty($username[1]))?substr($username[1], 0,5):"";
        $part4 = ($rand_no)?rand(0, $rand_no):"";

        $username = $part1.$part2."/".$part3."/".$part4;

        UserActivation::create([
            'sub_broker_id' => $subbroker->id,
            'user_id' => $username,
            'token' => str_random('30'),
        ]);
        \Mail::to($subbroker->email)->send(new VerifyMail($subbroker)); //sending mail to the new sub-broker


        //product-details
        Product::create([
            'sub_broker_id' => $subbroker->id,
            'product_name' => $input['product'],
        ]);

        //file-upload
        $title = $input['filename'];
        $imageName = $title->getClientOriginalName();
        $title->move(public_path('upload'), $imageName);

        $phototitle = $input['photo'];
        $nameOfPhoto = $phototitle->getClientOriginalName();
        $phototitle->move(public_path('upload'), $nameOfPhoto);

        $signtitle = $input['sign'];
        $nameOfSign = $signtitle->getClientOriginalName();
        $signtitle->move(public_path('upload'), $nameOfSign);

        FileUpload::create([
            'sub_broker_id' => $subbroker->id,
            'amfi_file' => $title,
            'photo' => $nameOfPhoto,
            'signature' => $nameOfSign,
        ]);

        DB::commit();
    }
    // public function generate_username(array $input) {


    //     $string_name = $input['name'];
    //     $string_town = $input['presenttown'];
    //     $rand_no = mt_rand(100000, 999999);
    //     $string_const = "RCDK/" ;

    //     $RCDK = array_filter(explode(" ", $string_const));

    //     $username = array_filter(explode(" ", $string_name));
    //     $username = array_slice($username, 0, 3); //return only first three part

    //     $town = array_filter(explode(" ", $string_town));
    //     $town = array_slice($town, 0, 3);//return only first three part

    //     $part1 = (!empty($RCDK[0]))?substr($RCDK[0],0 ,5):"";
    //     $part2 = (!empty($username[0]))?substr($username[0], 0,3):"";
    //     $part3 = (!empty($town[0]))?substr($town[0], 0,3):"";
    //     //$part2 = (!empty($username[1]))?substr($username[1], 0,5):"";
    //     $part4 = ($rand_no)?rand(0, $rand_no):"";

    //     $username = $part1."/".$part2."/".$part3."/".$part4;

    //     //return $username;
    //     $subbroker = new SubBroker;
    //     $subbroker->user_id = $username;
    //     $subbroker->save();

    // }

//    public function verifyUser($token)
//    {
//        $verifyUser = UserActivation::where('token', $token)->first();
//        if(isset($verifyUser) ){
//            $user = $verifyUser->subbroker;
//            if(!$user->verified) {
//                $verifyUser->subbroker->verified = 1;
//                $verifyUser->subbroker->save();
//                $status = "Your e-mail is verified. You can now login.";
//            } else {
//                $status = "Your e-mail is already verified. You can now login.";
//            }
//        } else {
//            return redirect('/login')->with('warning', "Sorry your email cannot be identified.");
//        }
//        return redirect('/login')->with('status', $status);
    //}

    public function register(Request $request)
    {
        $validator = $this->validator($request->all());
        event(new Registered($subbroker = $this->create($request->all())));
        return $this->registered($request, $subbroker)
            ?: redirect($this->redirectPath());
    }

    public function showRegistrationForm()
    {
        $states = DB::select("select id,state_name from sub_broker_states");
        return view("auth.register", compact('states'));
    }

    
}

