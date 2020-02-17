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
                            <h3>Print Attendance Information</h3>
                        </div>
                    </div> 
                <div class="ibox-body">
                        <div class="print_title">
                            <h1><b>Individual Attendance Information</b></h1>    
                        </div>
                        <div class="print_body">
                            <h5>
                                <table class="table">
                                <tr>
                                    <th>Cadet ID</th><td>:</td><td>{{($attendances->qmaster)->cdt_id}}</td>
                                </tr>
                                <tr>
                                    <th>Name</th><td>:</td><td>{{($attendances->qmaster)->name}}</td>
                                </tr>   
                                <tr>
                                    <th>Attendance Date</th><td>:</td><td>{{$attendances->date}}</td>
                                </tr>   
                                <tr>
                                    <th>Class Type</th><td>:</td><td>{{$attendances->type}}</td>
                                </tr>   
                                <tr>
                                    <th>Status</th><td>:</td><td>{{$attendances->status}}</td>
                                </tr>   
                            </table>
                            </h5>
                        </div>
                        <br>
                        <a href="{{route('puo.print-qmaster-one-att',$attendances->id)}}">
                            <button class="btn btn-primary btn-md">
                            Print</button>
                        </a>
                </div>
            </div>
        </div>
    </div>
</div> 
@stop
