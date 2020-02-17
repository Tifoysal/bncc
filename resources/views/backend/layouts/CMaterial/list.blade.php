@extends('backend.master')
@section('content')
    <div class="page-heading">
        <h1 class="page-title">PUO Information Management</h1>
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
                            <h3>All Course Materials Information</h3>
                        </div>
                        @if(auth()->user()->role=='PUO')
                        <div class="col-lg-offset-6">                        
                            <a href="{{route('puo.create-cmaterial')}}">
                                <button class="btn btn-info btn-md">
                                Add New</button>
                            </a>                        
                            <a href="{{route('puo.print-cmaterial-all')}}" class="col-lg-offset-1">
                                <button class="btn btn-primary btn-md">
                                Print All</button>
                            </a>
                        </div>
                        @endif
                    </div>
                   <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-body">
                        <table class="table table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                            <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>File Name</th>
                                        <th>File Type</th>
                                        <th>Uploaded On</th>
                                        <th>Remarks</th>
                                        <th>File</th>
                                        @if(auth()->user()->role=='PUO') 
                                        <th>Action</th>
                                        @endif
                                    </tr>
                                </thead>
                                 <tbody>
                                    @foreach($cmaterials as $key=>$singleCmaterial)
                                        <tr>
                                          <td>{{$key+1}}</td>
                                          <td>{{$singleCmaterial->name}}</td>
                                          <td>{{$singleCmaterial->type}}</td>
                                          <td>{{$singleCmaterial->created_at}}</td>
                                          <td>{{$singleCmaterial->remarks}}</td>
                                          <td><a class="btn btn-success" href="{{route('puo.download-cmaterial',$singleCmaterial->id)}}">
                                          Downlaod
                                                </a></td>
                                        @if(auth()->user()->role=='PUO')  
                                        <td>
                                            <a href="{{route('puo.update-view-cmaterial',$singleCmaterial->id)}}">
                                                  <button class="btn btn-info btn-sm" data-toggle="tooltip" data-original-title="Edit">
                                                    <i class="fa fa-pencil font-14"></i></button>
                                                </a>
                                                <a href="{{route('puo.delete-cmaterial',$singleCmaterial->id)}}" onclick="return confirm('Are you sure you want to DELETE this?')">
                                                    <button class="btn btn-danger btn-sm" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash font-14"></i></button>
                                                </a>
                                          </td>
                                          @endif
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