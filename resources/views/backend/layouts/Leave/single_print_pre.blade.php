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
                            <h3>Print Leave Information</h3>
                        </div>
                    </div> 
                <div class="ibox-body">
                        <div class="print_title">
                            <h1><b>Individual Leave Application</b></h1>    
                        </div>
                        <div class="print_body">
                            <h5>
                                <table class="table">
                                <tr>
                                    <th>Date of Application</th><td>:</td><td>{{$leaves->created_at}}</td>
                                </tr>              
                                <tr>
                                    <th>Cadet Name</th><td>:</td><td>{{($leaves->cdt_leave)->name}}</td>
                                </tr>
                                <tr>
                                    <th>Cadet ID</th><td>:</td><td>{{($leaves->cdt_leave)->cdt_id}}</td>
                                </tr>
                                <tr>
                                    <th>Leave From</th><td>:</td><td>{{$leaves->from}}</td>
                                </tr>   
                                <tr>
                                    <th>Leave To</th><td>:</td><td>{{$leaves->to}}</td>
                                </tr>   
                                <tr>
                                    <th>Leave Reason</th><td>:</td><td>{{$leaves->reason}}</td>
                                </tr>   
                                <tr>
                                    <th>Emergency Contact</th><td>:</td><td>{{$leaves->emergency}}</td>
                                </tr>   
                                <tr>
                                    <th>During Leave Location</th><td>:</td><td>{{$leaves->location}}</td>
                                </tr> 
                                <tr>
                                    <th>Remarks</th><td>:</td><td>{{$leaves->remarks}}</td>
                                </tr>
                                <tr>
                                    <th>Status</th><td>:</td><td>{{$leaves->status}}</td>
                                </tr>
                            </table>
                            </h5>
                        </div>
                        <br>
                        <a href="{{route('puo.print-leave-one',$leaves->id)}}">
                            <button class="btn btn-primary btn-md">
                            Print</button>
                        </a>
                </div>
            </div>
        </div>
    </div>
</div> 
@stop
