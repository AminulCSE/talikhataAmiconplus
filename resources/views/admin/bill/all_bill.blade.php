@extends('layouts.app')
        <!-- /#header -->
        <!-- Content -->
@section('content')
<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">

                <div class="page-body">
                     <div class="card">
                            <div class="card-header">
                                <h5>All bills</h5>
                            </div>
                            <div class="card-block">
                                <div class="dt-responsive table-responsive">
                                    <table id="responsive-reorder" class="table table-striped table-bordered nowrap">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
                @endif

                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
                                        <thead>
                                            <tr>
                                                <th>Bill No</th>
                                                <th>Customer Name</th>
                                                <th>Customer Phone</th>
                                                <th>Description</th>
                                                <th>Total Bill</th>
                                                <th>Advanced</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($allbill as $all_row)
                                            <tr>
                                                <td>{{ $all_row->bill_no }}</td>
                                                <td>{{ $all_row->customer_name }}</td>
                                                <td>{{ $all_row->customer_phone }}</td>
                                                <td>{{ $all_row->description }}</td>
                                                <td>{{ $all_row->total_bill }}</td>
                                                <td>{{ $all_row->advanced_amount }}</td>
                                                <td>
                                                    <a href="{{ url('bill/edit_bill/'.$all_row->id) }}" style="font-size: 22px"><i class="fa fa-pencil"></i></a>||

                                                    <a onclick="return confirm('Are you sure to Delete data? ')" href="{{ url('bill/delete_bill/'.$all_row->id) }}" style="font-size: 22px"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



























@endsection()