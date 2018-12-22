@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Associates Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"  required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label radio" style="padding-left : 125px;">{{ __('Associate Type') }}</label>

                            <div class="col-md-6">
                                    <input id="associatetype" type="radio" class="{{ $errors->has('associatetype') ? ' is-invalid' : '' }}" name="associatetype" value="individual" required autofocus>Individual

                                    @if ($errors->has('associatetype'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('associatetype') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <label for="name" class="col-md-4 col-form-label radio-inline"></label>
                            <div class="col-md-6">
                                <input id="associatetype1" type="radio" class="{{ $errors->has('associatetype') ? ' is-invalid' : '' }}" name="associatetype" value="company" required autofocus>Company

                                @if ($errors->has('associatetype'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('associatetype') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Introducer Name') }}</label>

                            <div class="col-md-6">
                                <input id="introducername" type="text" class="form-control{{ $errors->has('introducername') ? ' is-invalid' : '' }}" name="introducername" value="{{ old('introducername') }}" required autofocus>

                                @if ($errors->has('introducername'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('introducername') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Introducer Code') }}</label>

                            <div class="col-md-6">
                                <input id="introducercode" type="text" class="form-control{{ $errors->has('introducercode') ? ' is-invalid' : '' }}" name="introducercode" value="{{ old('introducercode') }}"  autofocus>

                                @if ($errors->has('introducercode'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('introducercode') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-form-label text-md-right" style="padding-left: 160px;">{{ __('Adress Details : ') }}</label>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-form-label text-md-right" style="padding-left: 190px;">{{ __('Permanent Address : ') }}</label>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('House No. / Street Name') }}</label>

                            <div class="col-md-6">
                                <input id="permstreet" type="text" class="form-control{{ $errors->has('permstreet') ? ' is-invalid' : '' }}" name="permstreet" value="{{ old('permstreet') }}" required autofocus>

                                @if ($errors->has('permstreet'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('permstreet') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('City/Town') }}</label>

                            <div class="col-md-6">
                                <input id="permtown" type="text" class="form-control{{ $errors->has('permtown') ? ' is-invalid' : '' }}" name="permtown" value="{{ old('permtown') }}" required autofocus>

                                @if ($errors->has('permtown'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('permtown') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="select" class="col-md-4 col-form-label text-md-right">{{ __('state') }}</label>

                            <div class="col-md-6">
                                <select id="permstate" name='permstate' class="form-control" autofocus>
                                    <option value = "0">-Please Select One-</option>
                                    @foreach ($states as $state)
                                        <option value="{{ $state->id }}">{{ $state->state_name }}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('permstate'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('permstate') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Pin') }}</label>

                            <div class="col-md-6">
                                <input id="permpin" type="text" class="form-control{{ $errors->has('permpin') ? ' is-invalid' : '' }}" name="permpin" value="{{ old('permpin') }}" required autofocus>

                                @if ($errors->has('permpin'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('permpin') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-form-label text-md-right" style="padding-left: 190px;">{{ __('Present Address : ') }}</label>
                        </div>

                        <div class="form-group row col-md-12">
                            <label for=""><input id="address" type="checkbox"  name="address">Check This Box If The Permanent And Present Address are Same :</label>

                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('House No. / Street Name') }}</label>

                            <div class="col-md-6">
                                <input id="presentstreet" type="text" class="form-control{{ $errors->has('presentstreet') ? ' is-invalid' : '' }}" name="presentstreet" value="{{ old('presentstreet') }}" required autofocus>

                                @if ($errors->has('presentstreet'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('presentstreet') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('City/Town') }}</label>

                            <div class="col-md-6">
                                <input id="presenttown" type="text" class="form-control{{ $errors->has('presenttown') ? ' is-invalid' : '' }}" name="presenttown" value="{{ old('presenttown') }}" required autofocus>

                                @if ($errors->has('presenttown'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('presenttown') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="select" class="col-md-4 col-form-label text-md-right">{{ __('state') }}</label>

                            <div class="col-md-6">
                                <select id="presentstate" name='presentstate' class="form-control" autofocus>
                                    <option value = "0">-Please Select One-</option>
                                    @foreach ($states as $state)
                                        <option value="{{ $state->id }}">{{ $state->state_name }}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('presentstate'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('presentstate') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Pin') }}</label>

                            <div class="col-md-6">
                                <input id="presentpin" type="text" class="form-control{{ $errors->has('presentpin') ? ' is-invalid' : '' }}" name="presentpin" value="{{ old('presentpin') }}" required autofocus>

                                @if ($errors->has('presentpin'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('presentpin') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="name" class="col-form-label text-md-right" style="padding-left: 160px;">{{ __('Personal Details : ') }}</label>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('DOB') }}</label>

                            <div class="col-md-6">
                                <input id="dob" type="date" class="form-control{{ $errors->has('dob') ? ' is-invalid' : '' }}" name="dob" value="{{ old('dob') }}" required autofocus>

                                @if ($errors->has('dob'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('dob') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Age(Completed Year)') }}</label>

                            <div class="col-md-6">
                                <input id="age" type="text" class="form-control {{ $errors->has('age') ? 'is-invalid' : '' }}" name="age" value="{{ old('age') }}" autofocus>

                                @if ($errors->has('permadress'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('age') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Mobile No') }}</label>

                            <div class="col-md-6">
                                <input id="mobno" type="text" class="form-control{{ $errors->has('mobno') ? ' is-invalid' : '' }}" name="mobno" value="{{ old('mobno') }}" required autofocus>

                                @if ($errors->has('mobno'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('mobno') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Home No') }}</label>

                            <div class="col-md-6">
                                <input id="homephno" type="text" class="form-control{{ $errors->has('homephno') ? ' is-invalid' : '' }}" name="homephno" value="{{ old('homephno') }}" autofocus>

                                @if ($errors->has('homephno'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('homephno') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Fax No') }}</label>

                            <div class="col-md-6">
                                <input id="faxno" type="text" class="form-control{{ $errors->has('faxno') ? ' is-invalid' : '' }}" name="faxno" value="{{ old('faxno') }}"  autofocus>

                                @if ($errors->has('faxno'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('faxno') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Educational Qualification') }}</label>

                            <div class="col-md-6">
                                <input id="qualification" type="text" class="form-control{{ $errors->has('qualification') ? ' is-invalid' : '' }}" name="qualification" value="{{ old('qualification') }}" autofocus>

                                @if ($errors->has('qualification'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('qualification') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Professional Qualification') }}</label>

                            <div class="col-md-6">
                                <input id="proffqualification" type="text" class="form-control{{ $errors->has('proffqualification') ? ' is-invalid' : '' }}" name="proffqualification" value="{{ old('proffqualification') }}"  autofocus>

                                @if ($errors->has('proffqualification'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('proffqualification') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label radio" style="padding-left : 162px;">{{ __('AMFI No.') }}</label>

                            <div class="col-md-6">
                                <input id="amfino" type="radio" class="{{ $errors->has('amfino') ? ' is-invalid' : '' }}" name="amfino" value="yes" required autofocus>Yes

                                @if ($errors->has('amfino'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('amfino') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <label for="name" class="col-md-4 col-form-label radio-inline"></label>
                            <div class="col-md-6">
                                <input id="amfino1" type="radio" class="{{ $errors->has('amfino') ? ' is-invalid' : '' }}" name="amfino" value="no" required autofocus>No

                                @if ($errors->has('amfino1'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('amfino') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label radio" style="padding-left : 162px;">{{ __('IRDA No.') }}</label>

                            <div class="col-md-6">
                                <input id="irdano" type="radio" class="{{ $errors->has('irdano') ? ' is-invalid' : '' }}" name="irdano" value="yes"  autofocus>Yes

                                @if ($errors->has('irdano'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('irdano') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <label for="name" class="col-md-4 col-form-label radio-inline"></label>
                            <div class="col-md-6">
                                <input id="irdano1" type="radio" class="{{ $errors->has('irdano') ? ' is-invalid' : '' }}" name="irdano" value="no" required autofocus>No

                                @if ($errors->has('irdano'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('irdano') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Any Other Qualification') }}</label>

                            <div class="col-md-6">
                                <input id="otherqualification" type="text" class="form-control{{ $errors->has('otherqualification') ? ' is-invalid' : '' }}" name="otherqualification" value="{{ old('otherqualification') }}" autofocus>

                                @if ($errors->has('otherqualification'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('otherqualification') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label radio" style="padding-left : 150px;">{{ __('Occupation') }}</label>
                            <div class="col-md-6">
                                <input id="occupation" type="radio" class="{{ $errors->has('occupation') ? ' is-invalid' : '' }}" name="occupation" value="service" required autofocus>Service

                                @if ($errors->has('occupation'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('occupation') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <label for="name" class="col-md-4 col-form-label radio"></label>
                            <div class="col-md-6">
                                <input id="occupation1" type="radio" class="{{ $errors->has('occupation') ? ' is-invalid' : '' }}" name="occupation" value="business" required autofocus>Business<br><br>

                                @if ($errors->has('occupation'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('occupation') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <label for="name" class="col-md-4 col-form-label radio"></label>
                            <div class="col-md-6">
                                <input id="occupation2" type="radio" class="{{ $errors->has('occupation') ? ' is-invalid' : '' }}" name="occupation" value="retired" required autofocus>Retired<br><br>

                                @if ($errors->has('occupation'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('occupation') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <label for="name" class="col-md-4 col-form-label radio-inline"></label>
                            <div class="col-md-6">
                                <input id="occupation3" type="radio" class="{{ $errors->has('occupation') ? ' is-invalid' : '' }}" name="occupation" value="housewife" required autofocus>Housewife<br><br>

                                @if ($errors->has('occupation'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('occupation') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <label for="name" class="col-md-4 col-form-label radio-inline"></label>
                            <div class="col-md-6">
                                <input id="occupation4" type="radio" class="{{ $errors->has('occupation') ? ' is-invalid' : '' }}" name="occupation" value="other" required autofocus>Other

                                @if ($errors->has('occupation'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('occupation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __(' No. of years of experience in selling Financial Product and Educational Product') }}</label>

                            <div class="col-md-6">
                                <input id="experience" type="text" class="form-control {{ $errors->has('experience') ? 'is-invalid' : '' }}" name="experience" value="{{ old('experience') }}"  autofocus>

                                @if ($errors->has('experience'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('experience') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label radio">{{ __('Click on the Product/s you have experience in selling') }}</label>
                            <div class="col-md-6">
                                <input id="product" type="radio" class="{{ $errors->has('product') ? ' is-invalid' : '' }}" name="product" value="fixeddeposit" required autofocus>Fixed Deposit

                                @if ($errors->has('product'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('product') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <label for="name" class="col-md-4 col-form-label radio"></label>
                            <div class="col-md-6">
                                <input id="product1" type="radio" class="{{ $errors->has('product') ? ' is-invalid' : '' }}" name="product" value="mutualfund" required autofocus>Mutual Fund<br><br>

                                @if ($errors->has('product'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('product') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <label for="name" class="col-md-4 col-form-label radio"></label>
                            <div class="col-md-6">
                                <input id="product2" type="radio" class="{{ $errors->has('product') ? ' is-invalid' : '' }}" name="product" value="rbibonds" required autofocus>RBI Bonds<br><br>

                                @if ($errors->has('product'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('product') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <label for="name" class="col-md-4 col-form-label radio-inline"></label>
                            <div class="col-md-6">
                                <input id="product3" type="radio" class="{{ $errors->has('product') ? ' is-invalid' : '' }}" name="product" value="lifeinsurance" required autofocus>Life Insurance<br><br>

                                @if ($errors->has('product'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('product') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <label for="name" class="col-md-4 col-form-label radio-inline"></label>
                            <div class="col-md-6">
                                <input id="product4" type="radio" class="{{ $errors->has('product') ? ' is-invalid' : '' }}" name="product" value="generalinsurance" required autofocus>General Insurance<br><br>

                                @if ($errors->has('product'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('product') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <label for="name" class="col-md-4 col-form-label radio-inline"></label>
                            <div class="col-md-6">
                                <input id="product5" type="radio" class="{{ $errors->has('product') ? ' is-invalid' : '' }}" name="product" value="educationalproduct" required autofocus>Educational Product<br><br>

                                @if ($errors->has('product'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('product') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <label for="name" class="col-md-4 col-form-label radio-inline"></label>
                            <div class="col-md-6">
                                <input id="product6" type="radio" class="{{ $errors->has('product') ? ' is-invalid' : '' }}" name="product" value="poscheme" required autofocus>Post Office Scheme

                                @if ($errors->has('product'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('product') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('PAN/GIR No') }}</label>

                            <div class="col-md-6">
                                <input id="panno" type="text" class="form-control{{ $errors->has('panno') ? ' is-invalid' : '' }}" name="panno" value="{{ old('panno') }}"  autofocus>

                                @if ($errors->has('panno'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('panno') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Aadhar No') }}</label>

                            <div class="col-md-6">
                                <input id="aadharno" type="text" class="form-control{{ $errors->has('aadharno') ? ' is-invalid' : '' }}" name="aadharno" value="{{ old('aadharno') }}"  autofocus>

                                @if ($errors->has('aadharno'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('aadharno') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-form-label text-md-right" style="padding-left: 120px;">{{ __('Bank Account Details : ') }}</label>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Bank Name') }}</label>

                            <div class="col-md-6">
                                <input id="bankname" type="text" class="form-control{{ $errors->has('bankname') ? ' is-invalid' : '' }}" name="bankname" value="{{ old('bankname') }}" required autofocus>

                                @if ($errors->has('bankname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('bankname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Branch Name') }}</label>

                            <div class="col-md-6">
                                <input id="bankbranchname" type="text" class="form-control{{ $errors->has('bankbranchname') ? ' is-invalid' : '' }}" name="bankbranchname" value="{{ old('bankbranchname') }}"  autofocus>

                                @if ($errors->has('bankbranchname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('bankbranchname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Account No') }}</label>

                            <div class="col-md-6">
                                <input id="accountno" type="text" class="form-control{{ $errors->has('accountno') ? ' is-invalid' : '' }}" name="accountno" value="{{ old('accountno') }}" required autofocus>

                                @if ($errors->has('accountno'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('accountno') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Branch Code') }}</label>

                            <div class="col-md-6">
                                <input id="branchcode" type="text" class="form-control{{ $errors->has('branchcode') ? ' is-invalid' : '' }}" name="branchcode" value="{{ old('branchcode') }}" required autofocus>

                                @if ($errors->has('branchcode'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('branchcode') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('IFS Code') }}</label>

                            <div class="col-md-6">
                                <input id="ifsc" type="text" class="form-control{{ $errors->has('ifsc') ? ' is-invalid' : '' }}" name="ifsc" value="{{ old('ifsc') }}" required autofocus>

                                @if ($errors->has('ifsc'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('ifsc') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('MICR No') }}</label>

                            <div class="col-md-6">
                                <input id="micr" type="text" class="form-control{{ $errors->has('micr') ? ' is-invalid' : '' }}" name="micr" value="{{ old('micr') }}" required autofocus>

                                @if ($errors->has('micr'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('micr') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Branch RTGS No') }}</label>

                            <div class="col-md-6">
                                <input id="rtgs" type="text" class="form-control{{ $errors->has('rtgs') ? ' is-invalid' : '' }}" name="rtgs" value="{{ old('rtgs') }}" required autofocus>

                                @if ($errors->has('rtgs'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('rtgs') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label radio" style="padding-left : 80px;">{{ __('Bank Account Type') }}</label>
                            <div class="col-md-6">
                                <input id="accounttype" type="radio" class="{{ $errors->has('accounttype') ? ' is-invalid' : '' }}" name="accounttype" value="savings"  autofocus>Savings

                                @if ($errors->has('accounttype'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('accounttype') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <label for="name" class="col-md-4 col-form-label radio"></label>
                            <div class="col-md-6">
                                <input id="accounttype1" type="radio" class="{{ $errors->has('accounttype') ? ' is-invalid' : '' }}" name="accounttype" value="current"  autofocus>Current<br><br>

                                @if ($errors->has('accounttype'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('accounttype') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <label for="name" class="col-md-4 col-form-label radio"></label>
                            <div class="col-md-6">
                                <input id="accounttype2" type="radio" class="{{ $errors->has('accounttype') ? ' is-invalid' : '' }}" name="accounttype" value="nre"  autofocus>NRE<br><br>

                                @if ($errors->has('accounttype'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('accounttype') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <label for="name" class="col-md-4 col-form-label radio-inline"></label>
                            <div class="col-md-6">
                                <input id="accounttype3" type="radio" class="{{ $errors->has('accounttype') ? ' is-invalid' : '' }}" name="accounttype" value="nro" autofocus>NRO

                                @if ($errors->has('accounttype'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('accounttype') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-form-label text-md-right" style="padding-left: 150px;">{{ __('Nominee Details : ') }}</label>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nominee Name') }}</label>

                            <div class="col-md-6">
                                <input id="nomineename" type="text" class="form-control{{ $errors->has('nomineename') ? ' is-invalid' : '' }}" name="nomineename" value="{{ old('nomineename') }}" required autofocus>

                                @if ($errors->has('nomineename'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nomineename') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Relation with Nominee') }}</label>

                            <div class="col-md-6">
                                <input id="nomineerelation" type="text" class="form-control{{ $errors->has('nomineerelation') ? ' is-invalid' : '' }}" name="nomineerelation" value="{{ old('nomineerelation') }}" required autofocus>

                                @if ($errors->has('nomineerelation'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nomineerelation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('If Yes Then Please Give ARN No.(Attach Photocopy)') }}</label>

                            <div class="col-md-6">
                                <input id="amfi_file" type="file" class="{{ $errors->has('amfi_file') ? ' is-invalid' : '' }}" name="filename" value="{{ old('amfi_file') }}"  autofocus>
                                <div class="input-group-btn">
                                    <button id = "amfi" class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>upload</button>
                                </div>

                                @if ($errors->has('amfi_file'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('amfi_file') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Photo') }}</label>

                            <div class="col-md-6">
                                <input id="photo" type="file" class="{{ $errors->has('photo') ? ' is-invalid' : '' }}" name="photo" value="{{ old('photo') }}"  autofocus>
                                <div class="input-group-btn">
                                    <button  id="photo1" class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>upload</button>
                                </div>
                                @if ($errors->has('photo'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('photo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Signature') }}</label>

                            <div class="col-md-6">
                                <input id="sign" type="file" class="{{ $errors->has('sign') ? ' is-invalid' : '' }}" name="sign" value="{{ old('sign') }}"  autofocus>
                                <div class="input-group-btn">
                                    <button id="sign1" class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>upload</button>
                                </div>
                                @if ($errors->has('sign'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('sign') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
<script>

    /*function FillAddress(f) {
        if(f.address.checked == true) {
            f.permstreet.value = f.presentstreet.value;
            f.permtown.value = f.presenttown.value;
            f.permstate.value = f.presentstate.value;
            f.permpin.value = f.presentpin.value;
        }
    }*/
    $(document).ready(function (){
        $("#address").click(function(){
//            alert("checked!!!");
            var permenentStreetName = $("#permstreet").val();
            var permanentTownName = $("#permtown").val();
            var permanentStateName = $("#permstate").val();
            var permanentPin = $("#permpin").val();
            //console.log(permenentStreetName);

            $("#presentstreet").val(permenentStreetName);
            $("#presenttown").val(permanentTownName);
            $("#presentstate").val(permanentStateName);
            $("#presentpin").val(permanentPin);
        });

        $("#amfi").click(function(){
            var html = $(".clone").html();
            $(".increment").after(html);
        });

        $("#photo1").click(function(){
            var html = $(".clone").html();
            $(".increment").after(html);
        });

        $("#sign1").click(function(){
            var html = $(".clone").html();
            $(".increment").after(html);
        });
    });

</script>
@endpush