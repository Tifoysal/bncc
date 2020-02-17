@extends('backend.master')
@section('content')
    <div class="page-heading">
        <h1 class="page-title">CMSIBP Information Management</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{route('puo.dashboard')}}"><i class="la la-home font-20"></i></a>
                </li>
            </ol>
    </div>
    @if(Session::has('message'))
        <div class="alert alert-success">{{ Session::get('message') }}</div>
    @endif
    <div class="page-content fade-in-up">
        <div class="row">
            <div class="col-md-12">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title"> 
                            <h3>All Notice Information</h3>
                        </div>
                        <div class="col-lg-offset-6">
                            @if(auth()->user()->role=='PUO') 
                            <a href="{{route('puo.create-notice')}}">
                                <button class="btn btn-info btn-md">Add New</button>
                            </a>
                            <a href="{{route('puo.print-notice-all')}}" class="col-lg-offset-1">
                                <button class="btn btn-primary btn-md">Print All</button>
                            </a>
                            @endif
                        </div>
                    </div>
                   <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-body">
                        <table class="table table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                            <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Title</th>
                                        <th>Body</th>
                                        <th>Published On</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                 <tbody>
                                    @foreach($notices as $key=>$singleNotice)
                                        <tr>
                                          <td>{{$key+1}}</td>
                                          <td>{{$singleNotice->title}}</td>
                                          <td>{{$singleNotice->body}}</td>
                                          <td>{{$singleNotice->start}}</td>
                                          <td>
                                          @if(auth()->user()->role=='PUO') 
                                              <a href="{{route('puo.update-view-notice',$singleNotice->id)}}">
                                                      <button class="btn btn-info btn-sm" data-toggle="tooltip" data-original-title="Edit">
                                                        <i class="fa fa-pencil font-14"></i></button>
                                            </a>
                                            <a href="{{route('puo.delete-notice',$singleNotice->id)}}" onclick="return confirm('Are you sure you want to DELETE this?')">
                                                <button class="btn btn-danger btn-sm" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash font-14"></i></button>
                                            </a>
                                           @endif
                                            <a href="{{route('puo.print-single-notice',$singleNotice->id)}}">
                                              <button class="btn btn-dark btn-sm" data-toggle="tooltip" data-original-title="Print"><i class="fa fa-print font-14"></i></button>
                                            </a>
                                            
                                          </td>
                                        </tr>
                                       @endforeach
                               </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop