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
                            <h3>Print Requisition Information</h3>
                        </div>
                    </div> 
                <div class="ibox-body">
                        <div class="print_title">
                            <h1><b>Individual Requisition Information</b></h1>    
                        </div>
                        <div class="print_body">
                            <h5>
                                <table class="table">
                                    <tr>
                                        <th>Printing Date</th><td>:</td><td>{{date("d-m-y")}}</td>
                                    </tr>
                                    <tr>
                                        <th>Prduct Name</th><td>:</td><td>{{($reqs->product)->item}}</td>
                                    </tr>
                                    <tr>
                                        <th>Quantity</th><td>:</td><td>{{$reqs->qty}}</td>
                                    </tr>   
                                    <tr>
                                        <th>Requsition For</th><td>:</td><td>{{$reqs->req_for}}</td>
                                    </tr>   
                                    <tr>
                                        <th>Tentative Return Date</th><td>:</td><td>{{$reqs->return}}</td>
                                    </tr>   
                                    <tr>
                                        <th>Remarks</th><td>:</td><td>{{$reqs->remarks}}</td>
                                    </tr>   
                                    <tr>
                                        <th>Status</th><td>:</td><td>{{$reqs->status}}</td>
                                    </tr>     
                                </table>
                            </h5>
                        </div>
                        <br>
                        <a href="{{route('puo.print-req-one',$reqs->id)}}">
                            <button class="btn btn-primary btn-md">
                            Print</button>
                        </a>
                </div>
            </div>
        </div>
    </div>
</div> 
@stop
