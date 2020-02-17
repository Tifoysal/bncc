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
                            <h3>Update Leave Application</h3>
                        </div>
                    </div> 
                <div class="ibox-body">
                    @if(auth()->user()->role=='PUO')
                        <form action="{{route('puo.update-method-leave',$leave->id)}}" role="form" method="post">
                        @csrf
                            <div class="row">
                                <div class="col-sm-3 form-group">
                                    <label>Leave From</label>
                                    <input class="form-control" type="date" name="from" autofocus required value="{{$leave->from}}" readonly>
                                </div>
                                <div class="col-sm-3 form-group">
                                    <label>Leave To</label>
                                    <input class="form-control" type="date" name="to" autofocus required value="{{$leave->to}}" readonly>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Leave Reason</label>
                                    <input class="form-control" type="text" name="reason" placeholder="Must be 2 to 255 Letters" pattern="[a-z A-Z.0-9]{2,255}" autofocus required value="{{$leave->reason}}" readonly>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3 form-group">
                                    <label>Emergency Contact</label>
                                    <input class="form-control" type="text" name="emergency" autofocus required pattern="[0-9]{11,14}" placeholder="Must be 11 to 14 Digits" value="{{$leave->emergency}}" readonly>
                                </div> 
                                <div class="col-sm-3 form-group">
                                    <label>During Leave Location</label>
                                    <input class="form-control" type="text" name="location" placeholder="Must be 2 to 255 Letters" pattern="[a-z A-Z./0-9-,]{2,255}"readonly autofocus required value="{{$leave->location}}">
                                </div>
                                <div class="col-sm-3 form-group">
                                    <label>Any Remarks</label>
                                    <input class="form-control" type="text" name="remarks" placeholder="Its Optional" pattern="[a-z A-Z.-0-9]{2,255}" value="{{$leave->remarks}}" readonly>
                                </div>
                                <div class="col-sm-3 form-group">
                                    <label>Status</label>
                                        <select name="status" class="form-control">
                                            <option value="{{$leave->status}}">Select to Change</option>
                                            <option value="Approved">Approved</option>
                                            <option value="Pending">Pending</option>
                                            <option value="Declined">Declined</option>
                                        </select>
                                </div>     
                                <div class="col-sm-12 form-group">
                                    <input type="hidden" value="{{auth()->user()->id}}" name="puo_id">
                                </div>
                                </div>
                            <button type="submit" class="btn btn-info">Update</button>
                        </form>
                    @endif
                    
                    @if(auth()->user()->role=='Cadet')
                    <form action="{{route('puo.update-method-leave',$leave->id)}}" role="form" method="post">
                        @csrf
                            <div class="row">
                                <div class="col-sm-3 form-group">
                                    <label>Leave From</label>
                                    <input class="form-control" type="date" name="from" autofocus required value="{{$leave->from}}" readonly>
                                </div>
                                <div class="col-sm-3 form-group">
                                    <label>Leave To</label>
                                    <input class="form-control" type="date" name="to" autofocus required value="{{$leave->to}}" readonly>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Leave Reason</label>
                                    <input class="form-control" type="text" name="reason" placeholder="Must be 2 to 255 Letters" pattern="[a-z A-Z.0-9]{2,255}" autofocus required value="{{$leave->reason}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3 form-group">
                                    <label>Emergency Contact</label>
                                    <input class="form-control" type="text" name="emergency" autofocus required pattern="[0-9]{11,14}" placeholder="Must be 11 to 14 Digits" value="{{$leave->emergency}}">
                                </div> 
                                <div class="col-sm-3 form-group">
                                    <label>During Leave Location</label>
                                    <input class="form-control" type="text" name="location" placeholder="Must be 2 to 255 Letters" pattern="[a-z A-Z./0-9-,]{2,255}" autofocus required value="{{$leave->location}}">
                                </div>
                                <div class="col-sm-3 form-group">
                                    <label>Any Remarks</label>
                                    <input class="form-control" type="text" name="remarks" placeholder="Its Optional" pattern="[a-z A-Z.-0-9]{2,255}" value="{{$leave->remarks}}">
                                </div>
                                <div class="col-sm-3 form-group">
                                    <label>Status</label>
                                        <select name="status" class="form-control" readonly>
                                            <option value="{{$leave->status}}">{{$leave->status}}</option>
                                        </select>
                                </div>     
                                <div class="col-sm-12 form-group">
                                    <input type="hidden" value="{{auth()->user()->id}}" name="cdt_id">
                                </div>
                                </div>
                            <button type="submit" class="btn btn-info">Update</button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@stop
