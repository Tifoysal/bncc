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
                            <h3>Update Course Materials Information</h3>
                        </div>
                    </div> 
                <div class="ibox-body">
                    <form action="{{route('puo.update-method-cmaterial',$cmaterial->id)}}" role="form" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-sm-4 form-group">
                                <label>Topic</label>
                                <input class="form-control" type="text" name="name" placeholder="Must be 2 to 30 Letters" pattern="[a-z A-Z.-]{2,30}" autofocus required value="{{$cmaterial->name}}">
                            </div>
                            <div class="col-sm-4 form-group">
                                <label>Type</label>
                                    <select name="type" class="form-control" >
                                        <option value="{{$cmaterial->type}}">Select to Change</option>
                                        <option value="Theorotical">Theorotical</option>
                                        <option value="Practical">Practical</option>
                                    </select>                            
                            </div>                            
                            <div class="col-sm-4 form-group">
                                <label>Select File</label>
                                <input class="form-control" type="file" name="file" value="{{$cmaterial->file}}"autofocus>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label>Remarks</label>
                                <input class="form-control" type="text" name="remarks" placeholder="Must be 3 to 250 Letters" pattern="[a-z \:A-Z.]{3,250}" autofocus value="{{$cmaterial->remarks}}">
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
