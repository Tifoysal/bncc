@extends('backend.master')
@section('content')
    <div class="page-heading">
        <h1 class="page-title">PUO Information Management</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{route('puo.dashboard')}}"><i class="la la-home font-20"></i></a>
                </li>
            </ol>
    </div>
    @if(Session::has('message'))
        <div class="alert alert-success">{{ Session::get('message') }}</div>
    @endif
    <div class="page-content fade-in-up">
        <div class="row">
            <div class="col-md-12">
                    <div class="ibox">
                        <div class="ibox-head">
                            <div class="ibox-title">
                                <h3>Update Quarter Master Password</h3>
                            </div>
                        </div>
                            <div class="ibox-body">
                                <form id="regForm" action="{{route('puo.update-method-qmaster-pass-puo',$qmaster->id)}}" method="post" role="form">
                    @csrf
                    <!-- One "tab" for each step in the form: -->
                        <p class="form-sub-title"><b>Password will be updated for the follwing personnel</b></p><br>
                        <div class="row">                
                            <div class="col-sm-3 form-group">
                                <label>Cadet ID</label>
                                <input class="form-control" type="text" autofocus required value="{{$qmaster->cdt_id}}" readonly>
                            </div>
                            <div class="col-sm-3 form-group">
                                <label>Name</label>
                                <input class="form-control" type="text" autofocus required value="{{$qmaster->name}}" readonly>
                            </div>
                            <div class="col-sm-3 form-group">
                                <label>Email</label>
                                <input class="form-control" type="text" name="std_id" value="{{$qmaster->email}}" readonly>
                            </div>
                            <div class="col-sm-3 form-group">
                                <label>Password</label>
                                <input class="form-control" type="password" autofocus name="password" required>
                            </div>
                        </div>
                        <br>            
                        <button type="submit" class="btn btn-info" onclick="return confirm('Are you sure you want to UPDATE the password?')">Update</button>
                        <a href="{{route('puo.dashboard')}}"><button type="button" class="btn btn-danger">Back</button></a>              
                </form>
                            </div>
                        </div>  
@stop        