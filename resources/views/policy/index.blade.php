@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><b>Policy Details</b></div>
                    <div class="panel-body">
                        @if($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{$message}}</p>
                            </div>
                        @endif
                        <div>
                            <a href="policy/create" class="btn btn-primary">Create New</a>
                            <br />
                            <br />
                            <br/>
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
                                            <th colspan="2">Action</th>
                                        </tr>
                                    </thead>
                                    <!-- ///  End of Table  Headings ///  -->

                                    <!-- ///  Table  Data ///  -->

                                    <tbody>
                                    @foreach($policyLists as $row)
                                        <tr class="tell_index">
                                            <td align="center">{{ $row->sub_broker->name }}</td>
                                            <td align="center">{{ $row->policy_holder_name }}</td>
                                            <td align="center">{{ $row->category }}</td>
                                            <td align="center">{{ $row->product_name }}</td>
                                            <td align="center">{{ $row->policy_amount }}</td>
                                            <td align="center">{{ $row->issuing_status }}</td>
                                            <!-- <td align="center"><a href="{{action('PolicyController@edit',$row['id'])}}" class="btn btn-success">Edit</a></td> -->
                                        </tr>
                                    @endforeach
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
    </div>
@endsection