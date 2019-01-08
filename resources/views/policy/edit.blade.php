@extends('layouts.app')

@section('content')

    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('policy.index') }}"> Back</a>
    </div>

    <div class="row">
        <div class="col-md-6">
            <h1>Edit Policy Details</h1>
            <form action="{{route('policy.update', ['id' => $policy->id])}}" method="post">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
            @endif
            {{csrf_field()}}
            @method('PUT')


                <div class="form-group">
                    <label for="customer_name">Sub Broker Name</label>
                    <input type="text" readonly class="form-control" id="sub_broker_name"  name="sub_broker_name" value="{{$policy->sub_broker->name}}">
                </div>
                    <div class="form-group">
                        <label for="company_name" class="col-md-4 control-label">Policy Holder Name</label>
                        <div class="col-md-6">
                            <input type="text" name="policy_holder_name" autocomplete="off" class="form-control" id="policy_holder_name" value="{{ $policy->policy_holder_name }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="feedback_day1" class="col-md-4 control-label">Policy Category</label>
                        <div class="col-md-6">
                            <input type="text"  name="category" autocomplete="off" class="form-control" id="category" value="{{ $policy->category }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="company_email" class="col-md-4 control-label">Policy Name</label>
                        <div class="col-md-6">
                            <input type="text" autocomplete="off" name="product_name" class="form-control" id="product_name" value="{{ $policy->product_name }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="feedback_day1" class="col-md-4 control-label">Policy Amount</label>
                        <div class="col-md-6">
                            <input type="text"  name="policy_amount" autocomplete="off" class="form-control" id="policy_amount" value="{{ $policy->policy_amount }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="feedback_day1" class="col-md-4 control-label">Issuing Status</label>
                        <div class="col-md-6">
                            <input type="text"  name="issuing_status" autocomplete="off" class="form-control" id="issuing_status" value="{{ $policy->issuing_status }}">
                        </div>
                    </div>



                <div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>

@endsection

