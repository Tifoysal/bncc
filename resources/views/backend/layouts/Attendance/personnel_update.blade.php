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
                            <h3>Update Personnel Attendance Information</h3>
                        </div>
                    </div> 
                <div class="ibox-body">
                    <form action="{{route('puo.update-method-personnel-att',$attendance->id)}}" role="form" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-sm-3 form-group">
                                <label>Personnel ID</label>
                                <input class="form-control" type="text" readonly autofocus value="{{($attendance->puo)->puo_id}}">
                            </div>
                            <div class="col-sm-3 form-group">
                                <label>Personnel Name</label>
                                <input class="form-control" type="text" readonly autofocus value="{{($attendance->puo)->name}}">
                            </div>                            
                            <div class="col-lg-3 form-group">
                                <label>Attendance Date</label>
                                <input class="form-control" type="date" name="date" autofocus required value="{{$attendance->date}}">
                            </div>
                            <div class="col-lg-3 form-group">
                                <label>Class Type</label>
                                    <select name="type" class="form-control" required>
                                        <option value="{{$attendance->date}}">Click to Change</option>
                                        <option value="Theorotical">Theorotical</option>
                                        <option value="Practical">Practical</option>
                                    </select>                            
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-9 form-group">
                                <label>Topic</label>
                                <input class="form-control" type="text" name="topic" placeholder="Must be 3 to 250 Letters" pattern="[a-z \:A-Z.]{3,250}" value="{{$attendance->topic}}" autofocus required>
                            </div>
                            <div class="col-lg-3 form-group">
                                <label>Status</label>
                                    <select name="status" class="form-control" required>
                                        <option value="{{$attendance->status}}">Please Select</option>
                                        <option value="Present">Present</option>
                                        <option value="Absent">Absent</option>
                                    </select>                            
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
