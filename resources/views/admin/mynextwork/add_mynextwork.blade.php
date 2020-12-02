

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
                                         <h4>Add My Next Day Work</h4>
                                     </div>
                                     <div class="col-md-6 d-flex justify-content-end">
                                         <a class="btn btn-primary" href="{{ url('MyWork/all_MyWork') }}">All My Next Day Work</a>
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


                 <form action="{{ url('MyWork/store_MyWork') }}" method="post">
                    @csrf
                    <div class="form-group row">
                        <label for="noted_date" class="col-sm-2 col-form-label">Noted Date</label>
                        <div class="col-sm-10">
                            <input type="date" id="noted_date" name="noted_date" class="form-control form-control-normal" placeholder="Enter your Noted date">
                        </div>
                    </div>
                    

                    <div class="form-group row">
                        <label for="description" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">
                           <textarea name="description" rows="5" class="form-control form-control-normal"></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="advanced_amount" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <button class="btn btn-primary" type="submit">Add</button>
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