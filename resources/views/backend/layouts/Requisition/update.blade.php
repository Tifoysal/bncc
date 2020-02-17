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
                            <h3>Update Requisition Information</h3>
                        </div>
                    </div> 
                <div class="ibox-body">
                    @if(auth()->user()->role=='QMaster')
                    <form action="{{route('puo.update-method-req',$req->id)}}" role="form" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-sm-3 form-group">
                                <label>Product Name</label> 
                                    <select name="status" class="form-control" required readonly>
                                        <option value="{{$req->pro_id}}">{{($req->product)->item}}</option> 
                                    </select>
                            </div>
                            <div class="col-sm-3 form-group">
                                <label>Required Quantity</label>
                                <input class="form-control" type="text" name="qty" autofocus required value="{{$req->qty}}" readonly>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Requisition For</label>
                                <input class="form-control" type="text" name="req_for" autofocus required value="{{$req->req_for}}" readonly>
                            </div> 
                        </div>
                        <div class="row">
                            <div class="col-sm-3 form-group">
                                <label>Tentative Return Date</label>
                                <input class="form-control" type="date" name="return" autofocus required value="{{$req->return}}" readonly>
                            </div>
                           
                            <div class="col-sm-3 form-group">
                                <label>Status</label>
                                    <select name="status" class="form-control">
                                        <option value="{{$req->status}}">Select to Change</option>
                                        <option value="Approved">Approved</option>
                                        <option value="Pending">Pending</option>
                                        <option value="Declined">Declined</option>
                                    </select>
                            </div>     
                             <div class="col-sm-6 form-group">
                                <label>Any Remarks</label>
                                <input class="form-control" type="text" name="remarks" value="{{$req->remarks}}" readonly>
                            </div>
                            <div class="col-sm-12 form-group">
                                <input type="hidden" value="{{auth()->user()->id}}" name="puo_id">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-info">Update</button>
                    </form>
                    @endif
                    
                    @if(auth()->user()->role=='PUO' || auth()->user()->role=='Cadet')
                    <form action="{{route('puo.update-method-req',$req->id)}}" role="form" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-sm-3 form-group">
                                <label>Product Name</label> 
                                    <select name="status" class="form-control" required>
                                        <option value="{{$req->pro_id}}">{{($req->product)->item}}</option>@foreach($product as $singleProduct) 
                                    <option value="{{$singleProduct->id}}">{{$singleProduct->item}}</option>
                                    @endforeach
                                    </select>
                            </div>
                            <div class="col-sm-3 form-group">
                                <label>Required Quantity</label>
                                <input class="form-control" type="text" name="qty" placeholder="Must be 1 to 4 Digits" pattern="[0-9]{1,4}" autofocus required value="{{$req->qty}}">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Requisition For</label>
                                <input class="form-control" type="text" name="req_for" placeholder="Must be 2 to 250 Letters" pattern="[a-z A-Z.]{2,250}" autofocus required value="{{$req->req_for}}">
                            </div> 
                        </div>
                        <div class="row">
                            <div class="col-sm-3 form-group">
                                <label>Tentative Return Date</label>
                                <input class="form-control" type="date" name="return" autofocus required value="{{$req->return}}">
                            </div>
                           
                            <div class="col-sm-3 form-group">
                                <label>Status</label>
                                    <select name="status" class="form-control">
                                        <option value="Pending">Pending</option>
                                    </select>
                            </div>     
                             <div class="col-sm-6 form-group">
                                <label>Any Remarks</label>
                                <input class="form-control" type="text" name="remarks" placeholder="Its Optional" pattern="[a-z A-Z.]{2,250}" value="{{$req->remarks}}">
                            </div>
                            <div class="col-sm-12 form-group">
                                <input type="hidden" value="{{auth()->user()->id}}" name="puo_id">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-info">Update</button>
                    </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@stop
