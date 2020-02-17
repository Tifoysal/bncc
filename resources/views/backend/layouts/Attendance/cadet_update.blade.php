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
                            <h3>Update Cadet Attendance Information</h3>
                        </div>
                    </div> 
                <div class="ibox-body">
                    <form action="{{route('puo.update-method-cadet-att',$attendance->id)}}" role="form" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-sm-4 form-group">
                                <label>Cadet ID</label>
                                <input class="form-control" type="text" readonly autofocus value="{{($attendance->cadet)->cdt_id}}">
                            </div>
                            <div class="col-sm-4 form-group">
                                <label>Cadet Name</label>
                                <input class="form-control" type="text" readonly autofocus value="{{($attendance->cadet)->name}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 form-group">
                                <label>Date</label>
                                <input class="form-control" type="date" name="date" autofocus value="{{$attendance->date}}">
                            </div>
                            <div class="col-sm-4 form-group">
                                <label>Type</label>
                                <select name="type" class="form-control">
                                    <option value="{{$attendance->type}}">Select to Change</option>
                                    <option value="Theorotical">Theorotical</option>
                                    <option value="Practical">Practical</option>
                                </select>
                            </div>                            
                            <div class="col-sm-4 form-group">
                                <label>Status</label>
                                <select name="status" class="form-control">
                                    <option value="{{$attendance->status}}">Select to Change</option>
                                    <option value="Present">Present</option>
                                    <option value="Absent">Absent</option>
                                </select>
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
