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
                            <h3>Add New Budget</h3>
                        </div>
                    </div> 
                    <div class="ibox-body">
                        
        <form id="regForm" action="{{route('puo.add-budget')}}" method="post" role="form">
            @csrf
                <div class="row">                
                    <div class="col-sm-6 form-group">
                        <label>Budget Semester</label>
                        <input class="form-control" type="text" name="semester" placeholder="Must be 2 to 30 Letters" pattern="[0-9a-z A-Z.-]{2,30}" autofocus required>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label>Date</label>
                        <input class="form-control" type="date" name="date" autofocus required>
                    </div>
            </div>   
            <br><br><br>
            <h4 class="form-sub-title"><b>Budget Information</b></h4>
                    <table class="table table-bordered" id="dynamicTable">  

                <tr>

                    <th>Item</th>
                    <th>Quantity</th>
                    <th>Rate</th>
                    <th>Action</th>
                </tr>
                <tr>  
                    <td><input type="text" name="budget[0][item]" placeholder="Transport Bill" class="form-control" /></td>  
                    <td><input type="text" name="budget[0][qty]" placeholder="5" class="form-control" /></td>  
                    <td><input type="text" name="budget[0][rate]" placeholder="50" class="form-control"/></td>  
                      

                    <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>  
                </tr>  
            </table>        
            <div class="col-sm-12 form-group">
            <input type="hidden" value="{{auth()->user()->id}}" name="user_id">
                            </div>
                <button type="submit" class="btn btn-success">Submit</button>
                <button type="reset" class="btn btn-danger">Reset</button>
        </form>
        <br><br>
    </div></div>
                </div>
            </div>
        </div>
        
@stop
@push('js')

<script type="text/javascript">
    var i = 0;
    $("#add").click(function(){
        ++i;
        $("#dynamicTable").append('<tr><td><input type="text" name="budget['+i+'][item]" placeholder="Food Allowance" class="form-control" /></td><td><input type="text" name="budget['+i+'][qty]" placeholder="10" class="form-control" /></td><td><input type="text" name="budget['+i+'][rate]" placeholder="50" class="form-control" /></td><td><button type="button" class="btn btn-danger remove-tr">Remove</button></td></tr>');
    });
    $(document).on('click', '.remove-tr', function(){  
         $(this).parents('tr').remove();
    });  
</script>
@endpush()
	<script src="backend/js/main.js"></script>

    </div>
</div>

