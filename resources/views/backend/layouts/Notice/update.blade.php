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
                            <h3>Update Notice Information</h3>
                        </div>
                    </div> 
                <div class="ibox-body">
                    <form action="{{route('puo.update-method-notice',$notice->id)}}" role="form" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label>Notice Title</label>
                                <input class="form-control" type="text" name="title" placeholder="Must be 2 to 30 Letters" pattern="[a-z A-Z.]{2,30}" autofocus required value="{{$notice->title}}">
                            </div>
                            <div class="col-sm-3 form-group">
                                <label>Starting Date</label>
                                <input class="form-control" type="date" name="start" autofocus required value="{{$notice->start}}">
                            </div>
                            <div class="col-sm-3 form-group">
                                <label>File</label>
                                <input class="form-control" type="file" name="file" autofocus value="{{$notice->file}}">
                            </div>                            
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label>Body</label>
                                <textarea class="form-control" type="text" name="body" autofocus required pattern="[0-9a-z A-Z.-@]{2,2000}" placeholder="Must be 2 to 2000 Characters" value="{{$notice->body}}">{{$notice->body}}</textarea>
                            </div>
<!--
                            <div class="col-sm-12 form-group">
                                <input type="hidden" value="{{auth()->user()->id}}" name="puo_id">
                            </div>
-->
                        </div>
                        <button type="submit" class="btn btn-info">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
