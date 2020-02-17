@extends('backend.master')
@section('content')
    <div class="page-heading">
        <h1 class="page-title">PUO Information Management</h1>
           
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
                            <h3>All Application Information</h3>
                        </div>
                        
                        <div class="col-lg-offset-6">      
                            <a href="{{route('puo.list-settings')}}" class="col-lg-offset-1">
                                <button class="btn btn-info btn-md">
                                Recruitment Settings</button>
                            </a>
                            <a href="{{route('puo.print-application-all')}}" class="col-lg-offset-1">
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
                                        <th>Student ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>Department</th>
                                        <th>Semester</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                 <tbody>
                                    @foreach($cadets as $key=>$singleCadet)
                                        <tr>
                                          <td>{{$key+1}}</td>
                                          <td>{{$singleCadet->std_id}}</td>
                                          <td>{{$singleCadet->name}}</td>
                                          <td>{{$singleCadet->email}}</td>
                                          <td>{{$singleCadet->mobile}}</td>
                                          <td>{{$singleCadet->dept}}</td>
                                          <td>{{$singleCadet->semester}}</td>
                                          <td>{{$singleCadet->status}}</td>
                                            <td>
                                                <a href="{{route('puo.update-view-application',$singleCadet->id)}}">
                                                    <button class="btn btn-info btn-sm" data-toggle="tooltip" data-original-title="Edit">
                                                    <i class="fa fa-pencil font-14"></i></button>
                                                </a>
                                                <a href="{{route('puo.print-single-applicant',$singleCadet->id)}}">
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