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
                            <h3>Update Product Information</h3>
                        </div>
                    </div> 
                <div class="ibox-body">
                    <form action="{{route('puo.update-method-product',$product->id)}}" role="form" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-sm-3 form-group">
                                <label>Product Name</label>
                                <input class="form-control" type="text" name="item" placeholder="Must be 2 to 50 Letters" pattern="[a-z0-9 A-Z.-]{2,50}" autofocus required value="{{$product->item}}">
                            </div>
                            <div class="col-sm-3 form-group">
                                <label>Category</label>
                                    <select name="category" class="form-control" required>
                                        <option value="{{$product->category}}">Select Category</option>
                                        <option value="Ammunition">Ammunition</option>
                                        <option value="Weapon">Weapon</option>
                                        <option value="Camouflage">Camouflage</option>
                                        <option value="Boot Shoe">Boot Shoe</option>
                                        <option value="Cap">Cap</option>
                                    </select>
                            </div>
                            <div class="col-sm-3 form-group">
                                <label>Quantity</label>
                                <input class="form-control" type="text" name="qty" placeholder="Must be 1 to 4 Digits" pattern="[0-9]{1,4}" autofocus required value="{{$product->qty}}">
                            </div>
                            <div class="col-sm-3 form-group">
                                <label>Status</label>
                                    <select name="status" class="form-control">
                                        <option value="{{$product->status}}">Select to Change</option>
                                        <option value="Available">Available</option>
                                        <option value="Out of Stock">Out of Stock</option>
                                        <option value="Invalid">Invalid</option>
                                    </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 form-group">
                                <label>Any Damages</label>
                                <input class="form-control" type="text" name="damage" placeholder="Its Optional" pattern="[0-9]{1,3}" value="{{$product->damage}}">
                            </div>
                            <div class="col-sm-9 form-group">
                                <label>Any Remarks</label>
                                <input class="form-control" type="text" name="remarks" placeholder="Its Optional" pattern="[a-z A-Z.]{2,200}" value="{{$product->remarks}}">
                            </div> 
                        </div>
                        <button type="submit" class="btn btn-info">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
