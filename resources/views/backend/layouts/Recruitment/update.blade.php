@extends('backend.master')
@section('content')
    <div class="page-heading">
        <h1 class="page-title">PUO Information Management</h1>
    </div>
        <div class="page-content fade-in-up">
            <div class="row">
                <div class="col-md-12"> 
                    <div class="ibox">
                        <div class="ibox-head">
                            <div class="ibox-title">
                                <h3>Update Application Status</h3>
                            </div>
                        </div>
                            <div class="ibox-body">
                                <form id="regForm" action="{{route('puo.update-method-application',$cadet->id)}}" method="post" role="form">
                    @csrf
                    <!-- One "tab" for each step in the form: -->
                        <p class="form-sub-title"><b>Basic Information</b></p>
                        <div class="row">                
                            <div class="col-sm-2 form-group">
                                <label>Student ID</label>
                                <input class="form-control" type="text" autofocus required name="std_id" value="{{$cadet->std_id}}" readonly>
                            </div>
                            <div class="col-sm-2 form-group">
                                <label>Student Name</label>
                                <input class="form-control" type="text" autofocus required name="name" value="{{$cadet->name}}" readonly>
                            </div>
                            <div class="col-sm-2 form-group">
                                <label>Mobile</label>
                                <input class="form-control" type="text" value="{{$cadet->mobile}}" readonly>
                            </div>
                            <div class="col-sm-2 form-group">
                                <label>Status</label>
                                    <select name="status" class="form-control" required>
                                        <option value="{{$cadet->status}}">{{$cadet->status}}</option><option value="Applied">Applied</option><option value="Communicated">Communicated</option><option value="Active">Active</option>
                                    </select>
                            </div>
                            <div class="col-sm-4 form-group">
                                <label>Remarks</label>
                                <input class="form-control" type="text" autofocus name="remarks">
                            </div>
                           
                        </div>
                        <input type="hidden" name="email" value="{{$cadet->email}}"> 
                        <input type="hidden" name="role" value="Cadet">           
                        <input type="hidden" name="gender" value="{{$cadet->gender}}">           
                        <input type="hidden" name="password" value="12345678">           
                        <br>            
                        <button type="submit" class="btn btn-info">Update</button>
                        <a href="{{route('puo.dashboard')}}"><button type="button" class="btn btn-danger">Back</button></a>              
                </form>
                            </div>
                        </div>  
                </div>
            </div>
        </div>
@stop

