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
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

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
                                    <input id="associatetype" type="radio" class="{{ $errors->has('associatetype') ? ' is-invalid' : '' }}" name="associatetype" value="true" required autofocus>Individual

                                    @if ($errors->has('associatetype'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('associatetype') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <label for="name" class="col-md-4 col-form-label radio-inline"></label>
                            <div class="col-md-6">
                                <input id="associatetype1" type="radio" class="{{ $errors->has('associatetype') ? ' is-invalid' : '' }}" name="associatetype" value="false" required autofocus>Company

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
                                <input id="introducercode" type="text" class="form-control{{ $errors->has('introducercode') ? ' is-invalid' : '' }}" name="introducercode" value="{{ old('introducercode') }}" required autofocus>

                                @if ($errors->has('introducercode'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('introducercode') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-form-label text-md-right" style="padding-left: 120px;">{{ __('Adress Details : ') }}</label>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Present Address') }}</label>

                            <div class="col-md-6">
                                <textarea id="pradress" class="form-control{{ $errors->has('pradress') ? ' is-invalid' : '' }}" name="pradress" value="{{ old('pradress') }}" required autofocus>

                                @if ($errors->has('pradress'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('pradress') }}</strong>
                                    </span>
                                @endif
                                </textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Permanent Address') }}</label>

                            <div class="col-md-6">
                                <textarea id="permadress" class="form-control{{ $errors->has('permadress') ? ' is-invalid' : '' }}" name="permadress" value="{{ old('permadress') }}" required autofocus>

                                @if ($errors->has('permadress'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('permadress') }}</strong>
                                    </span>
                                @endif
                                </textarea>
                            </div>
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
                                <input id="age" type="text" class="form-control {{ $errors->has('age') ? 'is-invalid' : '' }}" name="age" value="{{ old('age') }}" required autofocus>

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
                                <input id="homephno" type="text" class="form-control{{ $errors->has('homephno') ? ' is-invalid' : '' }}" name="homephno" value="{{ old('homephno') }}" required autofocus>

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
                                <input id="faxno" type="text" class="form-control{{ $errors->has('faxno') ? ' is-invalid' : '' }}" name="faxno" value="{{ old('faxno') }}" required autofocus>

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
                                <input id="qualification" type="text" class="form-control{{ $errors->has('qualification') ? ' is-invalid' : '' }}" name="qualification" value="{{ old('qualification') }}" required autofocus>

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
                                <input id="proffqualification" type="text" class="form-control{{ $errors->has('proffqualification') ? ' is-invalid' : '' }}" name="proffqualification" value="{{ old('proffqualification') }}" required autofocus>

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
                                <input id="amfino" type="radio" class="{{ $errors->has('amfino') ? ' is-invalid' : '' }}" name="amfino" value="true" required autofocus>Yes

                                @if ($errors->has('amfino'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('amfino') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <label for="name" class="col-md-4 col-form-label radio-inline"></label>
                            <div class="col-md-6">
                                <input id="amfino1" type="radio" class="{{ $errors->has('amfino') ? ' is-invalid' : '' }}" name="amfino" value="false" required autofocus>No

                                @if ($errors->has('amfino1'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('amfino') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('If Yes Then Please Give ARN No.(Attach Photocopy)') }}</label>

                            <div class="col-md-6">
                                <input id="arnattachment" type="file" class="{{ $errors->has('arnattachment') ? ' is-invalid' : '' }}" name="arnattachment" value="{{ old('arnattachment') }}" required autofocus>

                                @if ($errors->has('arnattachment'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('arnattachment') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label radio" style="padding-left : 162px;">{{ __('IRDA No.') }}</label>

                            <div class="col-md-6">
                                <input id="irdano" type="radio" class="{{ $errors->has('irdano') ? ' is-invalid' : '' }}" name="irdano" value="true" required autofocus>Yes

                                @if ($errors->has('irdano'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('irdano') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <label for="name" class="col-md-4 col-form-label radio-inline"></label>
                            <div class="col-md-6">
                                <input id="irdano1" type="radio" class="{{ $errors->has('irdano') ? ' is-invalid' : '' }}" name="irdano" value="false" required autofocus>No

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
                                <input id="otherqualification" type="text" class="form-control{{ $errors->has('otherqualification') ? ' is-invalid' : '' }}" name="otherqualification" value="{{ old('otherqualification') }}" required autofocus>

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
                                <input id="occupation" type="radio" class="{{ $errors->has('occupation') ? ' is-invalid' : '' }}" name="occupation" value="true" required autofocus>Service

                                @if ($errors->has('occupation'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('occupation') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <label for="name" class="col-md-4 col-form-label radio"></label>
                            <div class="col-md-6">
                                <input id="occupation1" type="radio" class="{{ $errors->has('occupation') ? ' is-invalid' : '' }}" name="occupation" value="false" required autofocus>Business<br><br>

                                @if ($errors->has('occupation'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('occupation') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <label for="name" class="col-md-4 col-form-label radio"></label>
                            <div class="col-md-6">
                                <input id="occupation2" type="radio" class="{{ $errors->has('occupation') ? ' is-invalid' : '' }}" name="occupation" value="false" required autofocus>Retired<br><br>

                                @if ($errors->has('occupation'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('occupation') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <label for="name" class="col-md-4 col-form-label radio-inline"></label>
                            <div class="col-md-6">
                                <input id="occupation3" type="radio" class="{{ $errors->has('occupation') ? ' is-invalid' : '' }}" name="occupation" value="false" required autofocus>Housewife<br><br>

                                @if ($errors->has('occupation'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('occupation') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <label for="name" class="col-md-4 col-form-label radio-inline"></label>
                            <div class="col-md-6">
                                <input id="occupation4" type="radio" class="{{ $errors->has('occupation') ? ' is-invalid' : '' }}" name="occupation" value="false" required autofocus>Other

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
                                <input id="experience" type="text" class="form-control {{ $errors->has('experience') ? 'is-invalid' : '' }}" name="experience" value="{{ old('experience') }}" required autofocus>

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
                                <input id="product" type="radio" class="{{ $errors->has('product') ? ' is-invalid' : '' }}" name="product" value="true" required autofocus>Fixed Deposit

                                @if ($errors->has('product'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('product') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <label for="name" class="col-md-4 col-form-label radio"></label>
                            <div class="col-md-6">
                                <input id="product1" type="radio" class="{{ $errors->has('product') ? ' is-invalid' : '' }}" name="product" value="false" required autofocus>Mutual Fund<br><br>

                                @if ($errors->has('product'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('product') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <label for="name" class="col-md-4 col-form-label radio"></label>
                            <div class="col-md-6">
                                <input id="product2" type="radio" class="{{ $errors->has('product') ? ' is-invalid' : '' }}" name="product" value="false" required autofocus>RBI Bonds<br><br>

                                @if ($errors->has('product'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('product') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <label for="name" class="col-md-4 col-form-label radio-inline"></label>
                            <div class="col-md-6">
                                <input id="product3" type="radio" class="{{ $errors->has('product') ? ' is-invalid' : '' }}" name="product" value="false" required autofocus>Life Insurance<br><br>

                                @if ($errors->has('product'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('product') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <label for="name" class="col-md-4 col-form-label radio-inline"></label>
                            <div class="col-md-6">
                                <input id="product4" type="radio" class="{{ $errors->has('product') ? ' is-invalid' : '' }}" name="product" value="false" required autofocus>General Insurance<br><br>

                                @if ($errors->has('product'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('product') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <label for="name" class="col-md-4 col-form-label radio-inline"></label>
                            <div class="col-md-6">
                                <input id="product5" type="radio" class="{{ $errors->has('product') ? ' is-invalid' : '' }}" name="product" value="false" required autofocus>Educational Product<br><br>

                                @if ($errors->has('product'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('product') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <label for="name" class="col-md-4 col-form-label radio-inline"></label>
                            <div class="col-md-6">
                                <input id="product6" type="radio" class="{{ $errors->has('product') ? ' is-invalid' : '' }}" name="product" value="false" required autofocus>Post Office Scheme

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
                                <input id="panno" type="text" class="form-control{{ $errors->has('panno') ? ' is-invalid' : '' }}" name="panno" value="{{ old('panno') }}" required autofocus>

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
                                <input id="aadharno" type="text" class="form-control{{ $errors->has('aadharno') ? ' is-invalid' : '' }}" name="aadharno" value="{{ old('aadharno') }}" required autofocus>

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
                                <input id="bankbranchname" type="text" class="form-control{{ $errors->has('bankbranchname') ? ' is-invalid' : '' }}" name="bankbranchname" value="{{ old('bankbranchname') }}" required autofocus>

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
                                <input id="accounttype" type="radio" class="{{ $errors->has('accounttype') ? ' is-invalid' : '' }}" name="accounttype" value="true" required autofocus>Savings

                                @if ($errors->has('accounttype'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('accounttype') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <label for="name" class="col-md-4 col-form-label radio"></label>
                            <div class="col-md-6">
                                <input id="accounttype1" type="radio" class="{{ $errors->has('accounttype') ? ' is-invalid' : '' }}" name="accounttype" value="false" required autofocus>Current<br><br>

                                @if ($errors->has('accounttype'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('accounttype') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <label for="name" class="col-md-4 col-form-label radio"></label>
                            <div class="col-md-6">
                                <input id="accounttype2" type="radio" class="{{ $errors->has('accounttype') ? ' is-invalid' : '' }}" name="accounttype" value="false" required autofocus>NRE<br><br>

                                @if ($errors->has('accounttype'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('accounttype') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <label for="name" class="col-md-4 col-form-label radio-inline"></label>
                            <div class="col-md-6">
                                <input id="accounttype3" type="radio" class="{{ $errors->has('accounttype') ? ' is-invalid' : '' }}" name="accounttype" value="false" required autofocus>NRO

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
