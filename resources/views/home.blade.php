@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in               

                    <!-- ///  Table  starts ///  -->
                    <div class="card">
                                <table class="table table-bordered my_table" border="1">
                                    <!-- ///  Table  Headings ///  -->
                                    <thead >
                                        <tr class="tell_index">
                                            <th>Sub Broker Name</th>
                                            <th>Policy Holder Name</th>
                                            <th>Policy Category</th>
                                            <th>Policy Name</th>
                                            <th>Policy Amount</th>
                                            <th>Issuing Status</th>
                                            <!-- <th colspan="2">Action</th> -->
                                        </tr>
                                    </thead>
                                    <!-- ///  End of Table  Headings ///  -->

                                    <!-- ///  Table  Data ///  -->

                                    <tbody>
                                    
                                        <!-- dd($policy); -->
                                        <tr class="tell_index">
                                            <td align="center">{{ $subBroker->sub_broker->name }}</td>
                                            <td align="center">{{ $subBroker->policy_holder_name }}</td>
                                            <td align="center">{{ $subBroker->category }}</td>
                                            <td align="center">{{ $subBroker->product_name }}</td>
                                            <td align="center">{{ $subBroker->policy_amount }}</td>
                                            <td align="center">{{ $subBroker->issuing_status }}</td>
                                            <!-- <td align="center"><a href="{{action('PolicyController@edit',$subBroker['id'])}}" class="btn btn-success">Edit</a></td>  -->
                                        </tr>
                                   
                                    </tbody>
                                    <!-- ///  Table  Data ///  -->
                                </table>
                            </div>
                            <!-- End of Table -->                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
