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
                            <h3>All Quarter Master Information</h3>
                        </div>
                        <div class="col-lg-offset-6">
                            <a href="{{route('puo.create-qmaster')}}">
                            <button class="btn btn-info btn-md">
                            Add New</button>
                        </a>
                        <a href="{{route('puo.print-qmaster-all')}}" class="col-lg-offset-1">
                            <button class="btn btn-primary btn-md">
                            Print All</button>
                        </a>
                        </div>
                    </div>
                   <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-body">
                        <table class="table table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Name</th>
                                        <th>Cadet ID</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>Joining</th>
                                        <th>Rertirement</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                 <tbody>
                                    @foreach($qmasters as $key=>$singleQMaster)
                                        <tr>
                                          <td>{{$key+1}}</td>
                                          <td>{{$singleQMaster->name}}</td>
                                          <td>{{$singleQMaster->cdt_id}}</td>
                                          <td>{{$singleQMaster->email}}</td>
                                          <td>{{$singleQMaster->mobile}}</td>
                                          <td>{{$singleQMaster->join}}</td>
                                          <td>{{$singleQMaster->left}}</td>
                                          <td>{{$singleQMaster->status}}</td>
                                          <td>
                                               <a href="{{route('puo.update-view-qmaster',$singleQMaster->id)}}">
                                                  <button class="btn btn-info btn-sm" data-toggle="tooltip" data-original-title="Edit">
                                                    <i class="fa fa-pencil font-14"></i></button>
                                                </a>
                                                <a href="{{route('puo.print-single-qmaster',$singleQMaster->id)}}">
                                                  <button class="btn btn-dark btn-sm" data-toggle="tooltip" data-original-title="Print"><i class="fa fa-print font-14"></i></button>
                                                </a>
                                  <a href="{{route('puo.update-qmaster-password',$singleQMaster->id)}}">
                                  <button class="btn btn-danger btn-sm" data-toggle="tooltip" data-original-title="Password"><i class="fa fa-key"></i></button>
                                </a>
<!--
                                                <a href="{{route('puo.delete-qmaster',$singleQMaster->id)}}">
                                                    <button class="btn btn-danger btn-sm" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash font-14"></i></button>
                                                </a>
-->
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