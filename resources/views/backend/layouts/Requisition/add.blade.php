@extends('backend.master')
@section('content')
    <div class="page-heading">
        <h1 class="page-title">Cadet Information Management</h1>
    </div>
    <div class="page-content fade-in-up">
        <div class="row">
            <div class="col-md-12">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">
                            <h3>Place New Requisition</h3>
                        </div>
                    </div> 
                <div class="ibox-body">
                    <form action="{{route('cdt.add-req')}}" method="post" role="form">
                        @csrf
                        <div class="row">
                            <div class="col-sm-3 form-group">
                                <label>Product Name</label>
                                <select name="pro_id" class="form-control" required>
                                    <option value="">Please Select</option>
                                    @foreach($product as $singleProduct) 
                                    <option value="{{$singleProduct->id}}">{{$singleProduct->item}}</option>
                                    @endforeach
                                    </select>
                            </div>
                            <div class="col-sm-3 form-group">
                                <label>Required Quantity</label>
                                <input class="form-control" type="text" name="qty" placeholder="Must be 1 to 4 Digits" pattern="[0-9]{1,4}" autofocus required>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Requisition For</label>
                                <input class="form-control" type="text" name="req_for" placeholder="Must be 2 to 250 Letters" pattern="[a-z A-Z.]{2,250}" autofocus required>
                            </div> 
                        </div>
                        <div class="row">
                            <div class="col-sm-3 form-group">
                                <label>Tentative Return Date</label>
                                <input class="form-control" type="date" name="return" autofocus required>
                            </div>
                            <div class="col-sm-3 form-group">
                                <label>Status</label>
                                    <select name="status" class="form-control" readonly>
                                        <option value="Pending">Pending</option>
                                    </select>
                            </div>
                             <div class="col-sm-6 form-group">
                                <label>Any Remarks</label>
                                <input class="form-control" type="text" name="remarks" placeholder="Its Optional" pattern="[a-z A-Z.]{2,250}">
                            </div>
                        </div>
                        <div class="col-sm-12 form-group">
                                <input type="hidden" value="{{auth()->user()->id}}" name="apply_by">
                            </div>
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <button class="btn btn-info" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop