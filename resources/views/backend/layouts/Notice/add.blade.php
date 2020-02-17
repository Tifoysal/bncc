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
                            <h3>Add New Notice</h3>
                        </div>
                    </div> 
                <div class="ibox-body">
                    <form action="{{route('puo.add-notice')}}" method="post" role="form" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label>Notice Title</label>
                                <input class="form-control" type="text" name="title" placeholder="Must be 2 to 30 Letters" pattern="[a-z A-Z.]{2,30}" autofocus required>
                            </div>
                            <div class="col-sm-3 form-group">
                                <label>Starting Date</label>
                                <input class="form-control" type="date" name="start" autofocus required>
                            </div>
                            <div class="col-sm-3 form-group">
                                <label>File</label>
                                <input class="form-control" type="file" name="file" autofocus required>
                            </div>                            
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label>Body</label>
                                <textarea class="form-control" type="text" name="body" autofocus required pattern="[0-9a-z A-Z.-@]{2,2000}" placeholder="Must be 2 to 2000 Characters"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-12 form-group">
                            <input type="hidden" value="{{auth()->user()->id}}" name="puo_id">
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