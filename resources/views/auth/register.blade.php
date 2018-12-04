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
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Present Address') }}</label>

                            <div class="col-md-6">
                                <input id="pradress" type="text" class="form-control{{ $errors->has('pradress') ? ' is-invalid' : '' }}" name="pradress" value="{{ old('pradress') }}" required autofocus>

                                @if ($errors->has('pradress'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('pradress') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Permanent Address') }}</label>

                            <div class="col-md-6">
                                <input id="permadress" type="text" class="form-control{{ $errors->has('permadress') ? ' is-invalid' : '' }}" name="permadress" value="{{ old('permadress') }}" required autofocus>

                                @if ($errors->has('permadress'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('permadress') }}</strong>
                                    </span>
                                @endif
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
                                <input id="occupation1" type="radio" class="{{ $errors->has('occupation') ? ' is-invalid' : '' }}" name="occupation" value="false" required autofocus>Business

                                @if ($errors->has('occupation'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('occupation') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <label for="name" class="col-md-4 col-form-label radio"></label>
                            <div class="col-md-6">
                                <input id="occupation2" type="radio" class="{{ $errors->has('occupation') ? ' is-invalid' : '' }}" name="occupation" value="false" required autofocus>Retired

                                @if ($errors->has('occupation'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('occupation') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <label for="name" class="col-md-4 col-form-label radio-inline"></label>
                            <div class="col-md-6">
                                <input id="occupation3" type="radio" class="{{ $errors->has('occupation') ? ' is-invalid' : '' }}" name="occupation" value="false" required autofocus>Housewife

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
