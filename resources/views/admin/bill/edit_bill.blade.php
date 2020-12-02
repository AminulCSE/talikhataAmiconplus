@extends('layouts.app')
        <!-- /#header -->
        <!-- Content -->
@section('content')
<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">

                <div class="page-body">
                    <div class="card-block">
                        <div class="row justify-content-center">
                            <div class="col-sm-8">
                                <div class="row">
                                     <div class="col-md-6">
                                         <h4>Edit bill</h4>
                                     </div>
                                     <div class="col-md-6 d-flex justify-content-end">
                                         <a  class="btn btn-primary" href="{{ url('bill/add_bill') }}">Add Bill</a>
                                     </div>
                                </div><hr>
                               
                                    <div class="row">
                                        <div class="col-sm-12">
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


                <form action="{{ url('bill/update_bill/'.$edit_data->id) }}" method="post">
                    @csrf
                    <div class="form-group row">
                        <label for="bill_no" class="col-sm-2 col-form-label">Bill No</label>
                        <div class="col-sm-10">
                            <input type="number" id="bill_no" name="bill_no" class="form-control form-control-normal" value="{{ $edit_data->bill_no }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="customer_name" class="col-sm-2 col-form-label">Customer Name</label>
                        <div class="col-sm-10">
                            <input type="text" id="customer_name" name="customer_name" class="form-control form-control-normal"  value="{{ $edit_data->customer_name }}">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="customer_phone" class="col-sm-2 col-form-label">Customer Phone</label>
                        <div class="col-sm-10">
                            <input type="number" id="customer_phone" name="customer_phone" class="form-control form-control-normal"  value="{{ $edit_data->customer_phone }}">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="description" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">
                           <textarea name="description" rows="5" class="form-control form-control-normal">{{ $edit_data->description }}</textarea>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="total_bill" class="col-sm-2 col-form-label">Total bill</label>
                        <div class="col-sm-10">
                            <input type="text" id="total_bill" name="total_bill" class="form-control form-control-normal"  value="{{ $edit_data->total_bill }}">
                        </div>
                    </div>     

                    <div class="form-group row">
                        <label for="advanced_amount" class="col-sm-2 col-form-label">Advanced amount</label>
                        <div class="col-sm-10">
                            <input type="text" id="advanced_amount" name="advanced_amount" class="form-control form-control-normal"  value="{{ $edit_data->advanced_amount }}">
                        </div>
                    </div> 

                    <div class="form-group row">
                        <label for="advanced_amount" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <button class="btn btn-primary" type="submit">Update</button>
                        </div>
                    </div> 
                </form>
            </div>
        </div>
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