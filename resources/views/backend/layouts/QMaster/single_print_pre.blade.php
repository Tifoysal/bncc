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
                            <h3>Print Quarter Master Information</h3>
                        </div>
                    </div> 
                <div class="ibox-body">
                    @if(auth()->user()->role=='QMaster')
                    <p class="text-danger font-weight-bold"> Inform your PUO to update any information. You can only view your information from here.
                    </p>
                    @endif
                        <div class="print_title">
                            <h1><b>Individual Quarter Master Information</b></h1>    
                        </div>
                        <div class="print_body">
                            <h5>
                                <table class="table">
                                    <tr>
                                        <th>Cadet ID</th><td>:</td><td>{{$qmasters->cdt_id}}</td>
                                    </tr>
                                    <tr>
                                        <th>Name</th><td>:</td><td>{{$qmasters->name}}</td>
                                    </tr>    
                                    <tr>
                                        <th>Email</th><td>:</td><td>{{$qmasters->email}}</td>
                                    </tr> 
                                                                        <tr>
                                        <th>Mobile</th><td>:</td><td>{{$qmasters->mobile}}</td>
                                    </tr>
                                    <tr>
                                        <th>Joining Date</th><td>:</td><td>{{$qmasters->join}}</td>
                                    </tr>   
                                    <tr>
                                        <th>Retirement Date</th><td>:</td><td>{{$qmasters->left}}</td>
                                    </tr>   
                                </table>
                            </h5>
                        </div>
                        <br>
                        <a href="{{route('puo.print-qmaster-one',$qmasters->id)}}">
                            <button class="btn btn-primary btn-md">
                            Print</button>
                        </a>
                </div>
            </div>
        </div>
    </div>
</div> 
@stop
