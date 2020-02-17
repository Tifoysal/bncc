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
                            <h3>Update Business Settings Information</h3>
                        </div>
                    </div> 
                <div class="ibox-body">
                    <form action="{{route('puo.update-method-settings',$business->id)}}" role="form" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-sm-3 form-group">
                                <label>Business Name</label>
                                <input class="form-control" type="text" name="name" autofocus required value="{{$business->name}}">
                            </div>
                            <div class="col-sm-3 form-group">
                                <label>Contact No</label>
                                <input class="form-control" type="text" name="contact" autofocus required value="{{$business->contact}}">
                            </div>
                            <div class="col-sm-3 form-group">
                                <label>Email Address</label>
                                <input class="form-control" type="text" name="email" autofocus required value="{{$business->email}}">
                            </div>
                            <div class="col-sm-3 form-group">
                                <label>Recruitment Status</label>
                                    <select name="recruitment" class="form-control" >
                                        <option value="{{$business->recruitment}}">{{$business->recruitment}}</option>
                                        <option value="1">Active - 1</option>
                                        <option value="0">Inactive - 0</option>
                                    </select>                            
                            </div>                            
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label>Instruction</label>
                                <input class="form-control" type="text" name="instruction" placeholder="Must be 2 to 2000 Letters" pattern="[a-z \:A-Z.]{3,250}" autofocus value="{{$business->instruction}}">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-info">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
