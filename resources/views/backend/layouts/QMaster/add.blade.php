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
                            <h3>Add New Quarter Master</h3>
                        </div>
                    </div> 
                <div class="ibox-body">
                    <form action="{{route('puo.add-qmaster')}}" method="post" role="form">
                        @csrf
                        <div class="row">
                            <div class="col-sm-4 form-group">
                                <label>Name</label>
                                <input class="form-control" type="text" name="name" placeholder="Must be 2 to 30 Letters"
                                pattern="[a-z A-Z.]{2,30}" autofocus required>
                            </div>
                            <div class="col-sm-4 form-group">
                                <label>Cadet ID</label>
                                <input class="form-control" type="text" name="cdt_id" placeholder="Must be 10 Digits" pattern="[0-9]{10}" autofocus required>
                            </div>
                            <div class="col-sm-4 form-group">
                                <label>Email</label>
                                <input class="form-control" type="email" name="email" autofocus required pattern="[a-z A-Z.-@]{6,50}" placeholder="Must be 6 to 50 Characters">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 form-group">
                                <label>Mobille</label>
                                <input class="form-control" type="text" name="mobile" pattern="[0-9]{11,14}" autofocus required placeholder="Must be 11 to 14 Digits">
                            </div>                            
                            <div class="col-sm-4 form-group">
                                <label>Joining Date</label>
                                <input class="form-control" type="date" name="join" autofocus required>
                            </div>
                            <div class="col-sm-4 form-group">
                                <label>Retirement Date</label>
                                <input class="form-control" type="date" name="left">
                            </div>                            
                        </div>
                        <div class="row">
                            <div class="col-sm-3 form-group">
                                <label>Status</label>
                                    <select name="status" class="form-control">
                                        <option value="Active">Active</option>
                                        <option value="Inactive">Inactive</option>
                                    </select>
                            </div>
                            <div class="col-sm-3 form-group">
                                <label>Gender</label>
                                    <select name="gender" class="form-control">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                            </div>
                            <div class="col-sm-3 form-group">
                                <label>Role</label>
                                <input class="form-control" type="text" name="role" value="QMaster" readonly>
                            </div>
                            <div class="col-sm-3 form-group">
                                <label>Password</label>
                                <input class="form-control" type="text" name="password"
                                value="12345678" readonly>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <button class="btn btn-info" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@stop