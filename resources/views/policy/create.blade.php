@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Policy Details</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('policy.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('policy.store')}}" method="post" class="form-horizontal" >
        @csrf
        <div class="panel panel-default">
            <div class="panel-heading"><b>New Policy Details</b></div>

            <!-- // Form Body // -->


            <div class="panel-body">
                <div class="form-group">
                    <label for="company_name" class="col-md-4 control-label">Sub Broker Name</label>
                    <div class="col-md-6">
                        <select name="sub_broker_name" class="form-control">
                            <option>Select Customer</option><!--selected by default-->
                            @foreach ($subbrokers as $subbroker)
                                <option value="{{ $subbroker->id }}">{{ $subbroker->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="company_name" class="col-md-4 control-label">Policy Holder Name</label>
                    <div class="col-md-6">
                        <input type="text" name="policy_holder_name" autocomplete="off" class="form-control" id="policy_holder_name" placeholder="policy_holder_name">
                    </div>
                </div>

                <div class="form-group">
                    <label for="feedback_day1" class="col-md-4 control-label">Policy Category</label>
                    <div class="col-md-6">
                        <input type="text"  name="category" autocomplete="off" class="form-control" id="category" placeholder="category">
                    </div>
                </div>

                <div class="form-group">
                    <label for="company_email" class="col-md-4 control-label">Policy Name</label>
                    <div class="col-md-6">
                        <input type="text" autocomplete="off" name="product_name" class="form-control" id="product_name" placeholder="product_name">
                    </div>
                </div>

                <div class="form-group">
                    <label for="feedback_day1" class="col-md-4 control-label">Policy Amount</label>
                    <div class="col-md-6">
                        <input type="text"  name="policy_amount" autocomplete="off" class="form-control" id="policy_amount" placeholder="policy_amount">
                    </div>
                </div>

                <div class="form-group">
                    <label for="feedback_day1" class="col-md-4 control-label">Issuing Status</label>
                    <div class="col-md-6">
                        <input type="text"  name="issuing_status" autocomplete="off" class="form-control" id="issuing_status" placeholder="issuing_status">
                    </div>
                </div>

                <!-- //End of Form Body // -->
                <button type="submit" class="btn btn-primary">Create</button>
                <input type="button" class="btn btn-primary" value="Go back" onclick="history.back()">
            </div>
        </div>
    </form>
@endsection