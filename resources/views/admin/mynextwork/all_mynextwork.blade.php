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
                            <div class="card-header">
                                <h5>All Next Days Work</h5>
                                <a class="btn btn-primary float-right" href="{{ url('MyWork/add_MyWork') }}">Add Nex Day Work</a>
                            </div>
                            <div class="card-block">
                                <div class="dt-responsive table-responsive">
                                    <table id="new-cons" class="table table-striped table-bordered nowrap">
                                        <div class="col-md-5">
                                            </div>
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
                                                <?php $i=1; ?>
                                                <th>Sl No</th>
                                                <th>Noted Date</th>
                                                <th>Description</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($all_my_work as $all_row)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $all_row->noted_date }}</td>
                                                <td>{{ $all_row->description }}</td>
                                                <td>
                                                    <a href="{{ url('MyWork/edit_MyWork/'.$all_row->id) }}" style="font-size: 22px"><i class="fa fa-pencil"></i></a>||

                                                    <a onclick="return confirm('Are you sure to Delete data? ')" href="{{ url('MyWork/delete_bill/'.$all_row->id) }}" style="font-size: 22px"><i class="fa fa-trash"></i></a>
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