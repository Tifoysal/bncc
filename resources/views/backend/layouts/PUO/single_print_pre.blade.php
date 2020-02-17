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
                            <h3>Print Personnel Information</h3>
                        </div>
                    </div> 
                <div class="ibox-body">
                        <div class="print_title">
                            <h1><b>Individual Personnel Information</b></h1>    
                        </div>
                        <div class="print_body">
                            <h5>
                                <table class="table">
                                <tr>
                                    <th>Personnel Image</th>
                                    <td>:</td>
                                    <td><img src="{{asset('user/puo/'.$puos->photo)}}" width="100px" height="100px" alt="PUO Image"/></td>
                                </tr>
                                <tr>
                                    <th>BNCC ID</th><td>:</td><td>{{$puos->puo_id}}</td>
                                </tr>
                                <tr>
                                    <th>Name</th><td>:</td><td>{{$puos->name}}</td>
                                </tr>   
                                <tr>
                                    <th>Rank</th><td>:</td><td>{{$puos->rank}}</td>
                                </tr>   
                                <tr>
                                    <th>Mobile</th><td>:</td><td>{{$puos->mobile}}</td>
                                </tr>   
                                <tr>
                                    <th>Email</th><td>:</td><td>{{$puos->email}}</td>
                                </tr>   
                                <tr>
                                    <th>Joining Date</th><td>:</td><td>{{$puos->join}}</td>
                                </tr>   
                                <tr>
                                    <th>Retirement Date</th><td>:</td><td>{{$puos->left}}</td>
                                </tr>   
                            </table>
                            </h5>
                        </div>
                        <br>
                        <a href="{{route('puo.print-puo-one',$puos->id)}}">
                            <button class="btn btn-primary btn-md">
                            Print</button>
                        </a>
                </div>
            </div>
        </div>
    </div>
</div> 
@stop
