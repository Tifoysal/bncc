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
                            <h3>All Product Information</h3>
                        </div>
                        <div class="col-lg-offset-6">
                            <a href="{{route('puo.create-product')}}">
                            <button class="btn btn-info btn-md">
                            Add New</button>
                        </a>
                        <a href="{{route('puo.print-product-all')}}">
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
                                        <th>Product Name</th>
                                        <th>Category</th>
                                        <th>Quantity</th>
                                        <th>Damages</th>
                                        <th>Usable</th>
                                        <th>Remarks</th>
                                        <th>Last Updated</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                 <tbody>
                                    @foreach($products as $key=>$singleProduct)
                                        <tr>
                                          <td>{{$key+1}}</td>
                                          <td>{{$singleProduct->item}}</td>
                                          <td>{{$singleProduct->category}}</td>
                                          <td>{{$singleProduct->qty}}</td>
                                          <td>{{$singleProduct->damage}}</td>
                                          <td>{{($singleProduct->qty)-($singleProduct->damage)}}</td>
                                          <td>{{$singleProduct->remarks}}</td>
                                          <td>{{$singleProduct->updated_at}}</td>
                                          <td>{{$singleProduct->status}}</td>
                                          <td>
                                              <a href="{{route('puo.update-view-product',$singleProduct->id)}}">
                                                      <button class="btn btn-info btn-sm" data-toggle="tooltip" data-original-title="Edit">
                                                        <i class="fa fa-pencil font-14"></i></button>
                                                    </a>
                                                    <a href="{{route('puo.print-single-product',$singleProduct->id)}}">
                                                      <button class="btn btn-dark btn-sm" data-toggle="tooltip" data-original-title="Print"><i class="fa fa-print font-14"></i></button>
                                                    </a>
<!--
                                                    <a href="{{route('puo.delete-product',$singleProduct->id)}}">
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