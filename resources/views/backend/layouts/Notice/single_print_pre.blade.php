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
                            <h3>Print Notice Information</h3>
                        </div>
                    </div> 
                <div class="ibox-body">
                        <div class="print_title">
                            <h1><b>NOTICE</b></h1>    
                        </div>
                        <div class="print_body">
                            <h5>
                                <table class="notice">
                                <tr>
                                    <th>Date of Publication : {{$notices->start}}</th>
                                </tr>
                                <tr><td></td></tr>
                                <tr>
                                    <td style="text-align:center;"><h2>{{$notices->title}}</h2></td>
                                </tr> 
                                <tr><td></td></tr>
                                <tr>
                                    <td>{{$notices->body}}</td>
                                </tr>   
                            </table>
                            </h5>
                        </div>
                        <br>
                        <a href="{{route('puo.print-notice-one',$notices->id)}}">
                            <button class="btn btn-primary btn-md">
                            Print</button>
                        </a>
                </div>
            </div>
        </div>
    </div>
</div> 
@stop
