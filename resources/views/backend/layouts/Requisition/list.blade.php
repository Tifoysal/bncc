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
                            <h3>All Requisition Information</h3>
                        </div>
      
                        <div class="col-lg-offset-6">
                            @if(auth()->user()->role=='PUO') 
                            <a href="{{route('cdt.create-req')}}">
                            <button class="btn btn-info btn-md">
                            Add New</button>
                            </a>
                            <a href="{{route('puo.print-req-all-own',auth()->user()->id)}}" class="col-lg-offset-1">
                            <button class="btn btn-primary btn-md">
                            Print Yours</button>
                            </a>
                            <a href="{{route('puo.print-req-all')}}">
                            <button class="btn btn-success btn-md">
                            Print All</button>
                            </a>
                            @endif
                            
                            @if(auth()->user()->role=='Cadet') 
                            <a href="{{route('cdt.create-req')}}">
                            <button class="btn btn-info btn-md">
                            Add New</button>
                            </a>
                            <a href="{{route('puo.print-req-all-own',auth()->user()->id)}}" class="col-lg-offset-1">
                            <button class="btn btn-primary btn-md">
                            Print All</button>
                            </a>
                            @endif
                            
                            @if(auth()->user()->role=='QMaster') 
                            <a href="{{route('puo.print-req-all')}}">
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
                                        <th>Requsition By</th>
                                        <th>Prduct Name</th>
                                        <th>Quantity</th>
                                        <th>Requisition For</th>
                                        <th>Tentative Return Date</th>
                                        <th>Remarks</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                 <tbody>
                                     @foreach($reqs as $key=>$singleReq)
                                        <tr>
                                          <td>{{$key+1}}</td>
                                          <td>{{($singleReq->personnel)->name}}</td>
                                          <td>{{($singleReq->product)->item}}</td>
                                          <td>{{$singleReq->qty}}</td>
                                          <td>{{$singleReq->req_for}}</td>
                                          <td>{{$singleReq->return}}</td>
                                          <td>{{$singleReq->remarks}}</td>
                                          <td>{{$singleReq->status}}</td>
                                          <td>
                                              <a href="{{route('puo.update-view-req',$singleReq->id)}}">
                                                  <button class="btn btn-info btn-sm" data-toggle="tooltip" data-original-title="Edit">
                                                    <i class="fa fa-pencil font-14"></i></button>
                                                </a>
                                                <a href="{{route('puo.print-single-req',$singleReq->id)}}">
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