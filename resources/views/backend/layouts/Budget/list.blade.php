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
                            <h3>All Budget Information</h3>
                        </div>
                        <div class="col-lg-offset-6">
                            <a href="{{route('puo.create-budget')}}">
                                <button class="btn btn-info btn-md">Add New</button>
                            </a>
                            <a href="{{route('puo.print-budget-all')}}" class="col-lg-offset-1">
                                <button class="btn btn-primary btn-md">Print All</button>
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
                                        <th>Semester</th>
                                        <th>Date</th>
<!--                                        <th>Total Cost</th>-->
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                 <tbody>
                                    @foreach($budgets as $key=>$singleBudget)
                                        <tr>
                                          <td>{{$key+1}}</td>
                                          <td>{{$singleBudget->semester}}</td>
                                          <td>{{$singleBudget->date}}</td>
<!--                                          <td>{{$singleBudget->start}}</td>-->
                                          <td>
                                              <a href="{{route('puo.print-single-budget',$singleBudget->id)}}">
                                              <button class="btn btn-dark btn-sm" data-toggle="tooltip" data-original-title="Print"><i class="fa fa-print font-14"></i></button>
                                              </a>
                                           @endforeach 
                                          </td>
                                        </tr>                                       
                               </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop