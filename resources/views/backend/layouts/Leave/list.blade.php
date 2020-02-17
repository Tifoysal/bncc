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
                            <h3>All Leave Application Information</h3>
                        </div>
                        <div class="col-lg-offset-6">
                        @if(auth()->user()->role=='Cadet')
                        <a href="{{route('cdt.create-leave')}}">
                            <button class="btn btn-info btn-md">
                            Add New</button>
                        </a>
                        <a href="{{route('cdt.list-leave-cadet-print',auth()->user()->id)}}" class="col-lg-offset-1">
                            <button class="btn btn-primary btn-md">
                            Print All</button>
                        </a>
                        @endif
                        @if(auth()->user()->role=='PUO')
                        <a href="{{route('puo.print-leave-all')}}" class="col-lg-offset-1">
                            <button class="btn btn-primary btn-md">
                            Print All</button>
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
                                        @if(auth()->user()->role=='PUO')
                                            <th>Name</th>
                                            <th>Cadet ID</th>
                                        @endif
                                        <th>Reason</th>
                                        <th>From</th>
                                        <th>To</th>
                                        <th>Emergency Contact</th>
                                        <th>Location</th>
                                        <th>Remarks</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                 <tbody>
                                    @foreach($leaves as $key=>$singleLeave)
                                        <tr>
                                          <td>{{$key+1}}</td>
                                          @if(auth()->user()->role=='PUO')
                                          <td>{{($singleLeave->cdt_leave)->name}}</td>
                                          <td>{{($singleLeave->cdt_leave)->cdt_id}}</td>
                                          @endif
                                          <td>{{$singleLeave->reason}}</td>
                                          <td>{{$singleLeave->from}}</td>
                                          <td>{{$singleLeave->to}}</td>
                                          <td>{{$singleLeave->emergency}}</td>
                                          <td>{{$singleLeave->location}}</td>
                                          <td>{{$singleLeave->remarks}}</td>
                                          <td>{{$singleLeave->status}}</td>
                                         <td>
                                               <a href="{{route('puo.update-view-leave',$singleLeave->id)}}">
                                                  <button class="btn btn-info btn-sm" data-toggle="tooltip" data-original-title="Edit">
                                                    <i class="fa fa-pencil font-14"></i></button>
                                                </a>
                                                <a href="{{route('puo.print-single-leave',$singleLeave->id)}}">
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