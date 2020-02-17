@extends('backend.master')
@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="page-heading">
        <h1 class="page-title">Cadet Information Management</h1>
    </div>
    <div class="page-content fade-in-up">
        <div class="row">
            <div class="col-md-12">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">
                            <h3>Add New Leave Request</h3>                            
                        </div>
                    </div>                         
                <div class="ibox-body">
                    <p class="text-danger font-weight-bold"> Select date appropriately. Later you can not update the date.</p>
                    <form action="{{route('cdt.add-leave')}}" method="post" role="form">
                        @csrf
                        <div class="row">
                            <div class="col-sm-3 form-group">
                                <label>Leave From</label>
                                <input class="form-control" type="date" name="from" autofocus required>
                            </div>
                            <div class="col-sm-3 form-group">
                                <label>Leave To</label>
                                <input class="form-control" type="date" name="to" autofocus required>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Leave Reason</label>
                                <input class="form-control" type="text" name="reason" placeholder="Must be 2 to 255 Letters" pattern="[a-z A-Z.0-9]{2,255}" autofocus required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 form-group">
                                <label>Emergency Contact</label>
                                <input class="form-control" type="text" name="emergency" autofocus required pattern="[0-9]{11,14}" placeholder="Must be 11 to 14 Digits">
                            </div> 
                            <div class="col-sm-3 form-group">
                                <label>During Leave Location</label>
                                <input class="form-control" type="text" name="location" placeholder="Must be 2 to 255 Letters" pattern="[a-z A-Z./0-9-,]{2,255}" autofocus required>
                            </div>
                            <div class="col-sm-3 form-group">
                                <label>Any Remarks</label>
                                <input class="form-control" type="text" name="remarks" placeholder="Its Optional" pattern="[a-z A-Z.-0-9]{2,255}">
                            </div>
                            <div class="col-sm-3 form-group">
                                <label>Status</label>
                                    <select name="status" class="form-control">
                                        <option value="Pending">Pending</option>
                                    </select>
                            </div>
                        </div>
                        <div class="col-sm-12 form-group">
                                <input type="hidden" value="{{auth()->user()->id}}" name="cdt_id">
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