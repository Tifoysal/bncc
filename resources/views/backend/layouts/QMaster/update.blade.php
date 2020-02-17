@extends('backend.master')
@section('content')
    <div class="page-heading">
        <h1 class="page-title">PUO Information Management</h1>
    </div>
    <div class="page-content fade-in-up">
        <div class="row">
            <div class="col-md-12">
                @if(auth()->user()->role=='PUO')
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">
                            <h3>Update Quarter Master Information</h3>
                        </div>
                    </div> 
                    <div class="ibox-body">
                    <form action="{{route('puo.update-method-qmaster',$qmaster->id)}}" role="form" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-sm-3 form-group">
                                <label>Name</label>
                                <input class="form-control" type="text" name="name" placeholder="Must be 2 to 30 Letters" pattern="[a-z A-Z.]{2,30}" autofocus required value="{{$qmaster->name}}">
                            </div>
                            <div class="col-sm-3 form-group">
                                <label>Cadet ID</label>
                                <input class="form-control" type="text" name="cdt_id" placeholder="Must be 10 Digits" pattern="[0-9]{10}" autofocus required value="{{$qmaster->cdt_id}}">
                            </div>                                                       
                            <div class="col-sm-3 form-group">
                                <label>Email</label>
                                <input class="form-control" type="email" name="email" autofocus required pattern="[a-z A-Z.-@]{6,50}" placeholder="Must be 6 to 50 Characters" value="{{$qmaster->email}}" readonly>
                            </div>
                            <div class="col-sm-3 form-group">
                                <label>Mobille</label>
                                <input class="form-control" type="text" name="mobile" autofocus required pattern="[0-9]{11,14}" placeholder="Must be 11 to 14 Digits" value="{{$qmaster->mobile}}">
                            </div> 
                        </div>
                        <div class="row">                            
                                <div class="col-sm-3 form-group">
                                    <label>Joining Date</label>
                                    <input class="form-control" type="date" name="join" autofocus required value="{{$qmaster->join}}">
                                </div>
                                <div class="col-sm-3 form-group">
                                    <label>Retirement Date</label>
                                    <input class="form-control" type="date" name="left" autofocus value="{{$qmaster->left}}">
                                </div> 
                                <div class="col-sm-3 form-group">
                                    <label>Gender</label>
                                        <select name="gender" class="form-control">
                                            <option value="{{$qmaster->gender}}">Select to Change</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                </div>
                                <div class="col-sm-3 form-group">
                                        <label>Status</label>
                                            <select name="status" class="form-control">
                                                <option value="{{$qmaster->status}}">Select to Change</option>
                                                <option value="Active">Active</option>
                                                <option value="Inactive">Inactive</option>
                                            </select>
                                    </div>
                            </div>
                        <button type="submit" class="btn btn-info">Update</button>
                    </form>
                </div>
                </div>
                @endif
                @if(auth()->user()->role=='QMaster')
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">
                            <h3>Quarter Master Information</h3>
                        </div>
                    </div> 
                    <div class="ibox-body">
                    <p class="text-danger font-weight-bold"> Inform your PUO to update any information. You can only update password from here.</p>
                    <form action="{{route('puo.update-method-qmaster-pass',$qmaster->id)}}"  role="form" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-sm-3 form-group">
                                <label>Name</label>
                                <input class="form-control" type="text" name="name" placeholder="Must be 2 to 30 Letters" pattern="[a-z A-Z.]{2,30}" autofocus required value="{{$qmaster->name}}" readonly>
                            </div>
                            <div class="col-sm-3 form-group">
                                <label>Cadet ID</label>
                                <input class="form-control" type="text" name="cdt_id" placeholder="Must be 10 Digits" pattern="[0-9]{10}" autofocus required value="{{$qmaster->cdt_id}}" readonly>
                            </div>                                                       
                            <div class="col-sm-3 form-group">
                                <label>Email</label>
                                <input class="form-control" type="email" name="email" autofocus required pattern="[a-z A-Z.-@]{6,50}" placeholder="Must be 6 to 50 Characters" value="{{$qmaster->email}}" readonly>
                            </div>
                            <div class="col-sm-3 form-group">
                                <label>Mobille</label>
                                <input class="form-control" type="text" name="mobile" autofocus required pattern="[0-9]{11,14}" placeholder="Must be 11 to 14 Digits" value="{{$qmaster->mobile}}" readonly>
                            </div> 
                        </div>
                        <div class="row">                            
                                <div class="col-sm-3 form-group">
                                    <label>Joining Date</label>
                                    <input class="form-control" type="date" name="join" autofocus required value="{{$qmaster->join}}" readonly>
                                </div>
                                <div class="col-sm-3 form-group">
                                    <label>Retirement Date</label>
                                    <input class="form-control" type="date" name="left" autofocus value="{{$qmaster->left}}" readonly>
                                </div> 
                                <div class="col-sm-3 form-group">
                                    <label>Status</label>
                                    <input class="form-control" type="text" name="left" autofocus value="{{$qmaster->status}}" readonly>    
                                </div>
                                <div class="col-sm-3 form-group">
                                    <label>Password</label>
                                    <input class="form-control" type="password" name="password" value="{{$qmaster->password}}">
                                </div>
                            </div>
                        <br>
                        <button type="submit" class="btn btn-info">Update</button>
                        <a href="{{route('puo.dashboard')}}"><button type="button" class="btn btn-danger">Back</button></a>

                    </form>
                </div>
                </div>
                @endif
            </div>
        </div>
    </div>
@stop
