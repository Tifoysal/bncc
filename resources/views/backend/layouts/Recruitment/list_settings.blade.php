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
                            <h3>Business Settings Information</h3>
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
                                        <th>Contact</th>
                                        <th>Email</th>
                                        <th>Recruitment Status</th>
                                        <th>Instruction</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                 <tbody>
                                    @foreach($bussets as $key=>$singleBussets)
                                        <tr>
                                          <td>{{$key+1}}</td>
                                          <td>{{$singleBussets->name}}</td>
                                          <td>{{$singleBussets->contact}}</td>
                                          <td>{{$singleBussets->email}}</td>
                                          <td>{{$singleBussets->recruitment}}</td>
                                          <td>{{$singleBussets->instruction}}</td>   
                                          <td>
                                              <a href="{{route('puo.update-view-settings',$singleBussets->id)}}">
                                                  <button type="button" class="btn btn-primary"  data-original-title="Edit">
                                                        <i class="fa fa-pencil font-14"></i></button>
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





@stop