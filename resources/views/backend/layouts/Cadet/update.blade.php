@extends('backend.master')
@section('content')
    <div class="page-heading">
        <h1 class="page-title">PUO Information Management</h1>
    </div>
        <div class="page-content fade-in-up">
            <div class="row">
                <div class="col-md-12">
                    @if(auth()->user()->role=='PUO')
                        <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">
                            <h3>Update Cadet Information</h3>
                        </div>
                    </div>
                            <div class="ibox-body">
                                <form id="regForm" action="{{route('puo.update-method-cadet',$cadet->id)}}" method="post" role="form" enctype="multipart/form-data">
                    @csrf
                    <!-- One "tab" for each step in the form: -->
                    <div class="tab">
                        <p class="form-sub-title"><b>Basic Information</b></p>
                        <div class="row">                
                            <div class="col-sm-3 form-group">
                                <label>Cadet ID</label>
                                <input class="form-control" type="text" name="cdt_id" placeholder="Must be 10 Digits" pattern="[0-9]{10}" autofocus required value="{{$cadet->cdt_id}}">
                            </div>
                            <div class="col-sm-3 form-group">
                                <label>Cadet Name</label>
                                <input class="form-control" type="text" name="name" placeholder="Must be 2 to 30 Letters" pattern="[a-z A-Z.]{2,30}" autofocus required value="{{$cadet->name}}">
                            </div>
                            <div class="col-sm-3 form-group">
                                <label>Student ID</label>
                                <input class="form-control" type="text" name="std_id" placeholder="Must be 8 Digits" pattern="[0-9]{8}" autofocus required value="{{$cadet->std_id}}">
                            </div>
                            <div class="col-sm-3 form-group">
                                <label>Department</label>
                                <input class="form-control" type="text" name="dept" placeholder="Must be 3 to 30 Letters" pattern="[a-z A-Z.]{3,30}" autofocus required value="{{$cadet->dept}}">
                            </div>
                    </div>
                    <div class="row">            
                        <div class="col-sm-3 form-group">
                            <label>Rank</label>
                                <select name="rank" class="form-control" required>
                                    <option value="{{$cadet->rank}}">Select To Change</option>
                                    <option value="Cadet">Cadet</option>
                                    <option value="Cadet Lance Corporal">Cadet Lance Corporal</option>
                                    <option value="Cadet Corporal">Cadet Corporal</option>
                                    <option value="Cadet Surgent">Cadet Surgent</option>
                                    <option value="Cadet Under Officer">Cadet Under Officer</option>
                                </select>
                        </div>
                        <div class="col-sm-3 form-group">
                            <label>Section</label>
                            <input class="form-control" type="text" name="section" placeholder="Must be 2 to 30 Letters" pattern="[a-z A-Z.]{2,30}" autofocus required value="{{$cadet->section}}">
                        </div>
                        <div class="col-sm-3 form-group">
                            <label>Platoon</label>
                            <input class="form-control" type="text" name="platoon" placeholder="Must be 2 to 30 Letters" pattern="[a-z A-Z.]{2,30}" autofocus required value="{{$cadet->platoon}}">
                        </div>
                        <div class="col-sm-3 form-group">
                            <label>Gender</label>
                                <select name="gender" class="form-control" required>
                                    <option value="{{$cadet->gender}}">Select To Change</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3 form-group">
                            <label>Joining Date</label>
                            <input class="form-control" type="date" name="join" autofocus required value="{{$cadet->join}}">
                        </div>
                        <div class="col-sm-3 form-group">
                            <label>Retirement Date</label>
                            <input class="form-control" type="date" name="left" autofocus value="{{$cadet->left}}">
                        </div>
<!--
                        <div class="col-sm-3 form-group">
                            <label>Photo</label>
                            <input class="form-control" type="file" name="photo" value="{{$cadet->photo}}">
                        </div>
-->
                        <input class="form-control" type="hidden" name="role" value="Cadet" required>

                        <div class="col-sm-3 form-group">
                            <label>Status</label>
                                <select name="status" class="form-control" required>
                                    <option value="{{$cadet->status}}">Select To Change</option>
                                    <option value="Active">Active</option>
                                    <option value="Inactive">Inactive</option>
                                    <option value="Ex-Cadet">Ex-Cadet</option>
                                </select>
                        </div>
                    </div>
                </div>
                <div class="tab">
                    <p class="form-sub-title"><b>Personal Information</b></p>
                        <div class="row">
                            <div class="col-sm-3 form-group">
                                <label>Father Name</label>
                                <input class="form-control" type="text" name="fname" placeholder="Must be 2 to 30 Letters" pattern="[a-z A-Z.]{2,30}" autofocus required value="{{$cadet->fname}}">
                            </div>
                            <div class="col-sm-3 form-group">
                                <label>Father Occupation</label>
                                <input class="form-control" type="text" name="foccu" placeholder="Must be 2 to 30 Letters" pattern="[a-z A-Z.]{2,30}" autofocus required value="{{$cadet->foccu}}">
                            </div>
                            <div class="col-sm-3 form-group">
                                <label>Mather Name</label>
                                <input class="form-control" type="text" name="mname" placeholder="Must be 2 to 30 Letters" pattern="[a-z A-Z.]{2,30}" autofocus required value="{{$cadet->mname}}">
                            </div>
                            <div class="col-sm-3 form-group">
                                <label>Mather Occupation</label>
                                <input class="form-control" type="text" name="moccu" placeholder="Must be 2 to 30 Letters" pattern="[a-z A-Z.]{2,30}" autofocus required value="{{$cadet->moccu}}">
                            </div>                
                        </div>
                        <div class="row">
                            <div class="col-sm-3 form-group">
                                <label>Date of Birth</label>
                                <input class="form-control" type="date" name="dob" autofocus required value="{{$cadet->dob}}">
                            </div>
                            <div class="col-sm-3 form-group">
                                <label>Birth Location</label>
                                <input class="form-control" type="text" name="birth_locs" placeholder="Must be 2 to 30 Letters" pattern="[a-z A-Z.]{2,30}" autofocus required value="{{$cadet->birth_locs}}">
                            </div>
                            <div class="col-sm-3 form-group">
                                <label>Blood Group</label>
                                <select name="blood_grp" class="form-control" required>
                                    <option value="{{$cadet->blood_grp}}">Select To Change</option>
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>                        
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>                        
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                    <option value="O+">O+</option>                        
                                    <option value="O-">O-</option>
                                </select>
                            </div>
                            <div class="col-sm-3 form-group">
                                <label>Merial Status</label>
                                <input class="form-control" type="text" name="marital" placeholder="Must be 8 to 30 Letters" pattern="[a-z A-Z.]{2,30}" autofocus required value="{{$cadet->marital}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 form-group">
                                <label>National ID (Optional)</label>
                                <input class="form-control" type="text" name="nid" placeholder="If not write 0 or must be 10 or 17 Digits" pattern="[0-9]{1,17}" autofocus value="{{$cadet->nid}}">
                            </div>
                            <div class="col-sm-3 form-group">
                                <label>Religion</label>
                                <input class="form-control" type="text" name="religion" placeholder="Must be 2 to 30 Letters" pattern="[a-z A-Z.]{2,30}" autofocus required value="{{$cadet->religion}}">
                            </div>
                            <div class="col-sm-3 form-group">
                                <label>Number of Siblings</label>
                                <input class="form-control" type="text" name="sibling" placeholder="Must be 8 Digits" pattern="[0-9]{0,2}" autofocus required value="{{$cadet->sibling}}">
                            </div>
                            <div class="col-sm-3 form-group">
                                <label>Position</label>
                                <input class="form-control" type="text" name="position" placeholder="Must be 1 to 2 digits" pattern="[0-9]{1,2}" autofocus required value="{{$cadet->position}}">
                            </div>
                        </div>
                </div>
                <div class="tab">
                    <p class="form-sub-title"><b>Contact Information</b></p>
                        <div class="row">
                            <div class="col-sm-2 form-group">
                                <label>Father Mobille</label>
                                <input class="form-control" type="text" name="fmobile" pattern="[0-9]{11,14}" autofocus required placeholder="Must be 11 to 14 Digit" value="{{$cadet->fmobile}}">
                            </div>
                            <div class="col-sm-2 form-group">
                                <label>Mather Mobille</label>
                                <input class="form-control" type="text" name="mmobile" pattern="[0-9]{11,14}" autofocus required placeholder="Must be 11 to 14 Digit" value="{{$cadet->mmobile}}">
                            </div>
                            <div class="col-sm-2 form-group">
                                <label>Cadet Mobille</label>
                                <input class="form-control" type="text" name="mobile" pattern="[0-9]{11,14}" autofocus required placeholder="Must be 11 to 14 Digit" value="{{$cadet->mobile}}">
                            </div>
                            <div class="col-sm-3 form-group">
                                <label>Cadet Email</label>
                                <input class="form-control" type="email" name="email" placeholder="Must be 8 to 50 Letters" pattern="[a-z A-Z.@]{8,50}" autofocus required value="{{$cadet->email}}" readonly>
                            </div>
                            <div class="col-sm-3 form-group">
                                <label>Cadet FB Profile Link (Optional)</label>
                                <input class="form-control" type="text" name="fbid" placeholder="If not write N/A or it must be 2 to 255 Letters" pattern="[a-z A-Z.:/0-9]{2,255}" autofocus value="{{$cadet->fbid}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label>Present Address</label>
                                <input class="form-control" type="text" name="pre_add" autofocus required pattern="[0-9a-z A-Z.-@]{2,500}" placeholder="Must be 2 to 500 Characters" value="{{$cadet->pre_add}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label>Permanent Address</label>
                                <input class="form-control" type="text" name="par_add" autofocus required pattern="[0-9a-z A-Z.-@]{2,500}" placeholder="Must be 2 to 500 Characters" value="{{$cadet->par_add}}">
                            </div>
                        </div>
                </div>
                <div class="tab">
                    <p class="form-sub-title"><b>Educational Information</b></p>
                            <table class="table table-bordered" id="dynamicTable">  

                        <tr>

                            <th>Exam Name</th>
                            <th>Institute</th>
                            <th>Board</th>
                            <th>Year</th>
                            <th>Result</th>
                            <th>Action</th>
                        </tr>
                                @foreach(json_decode($cadet->exam) as $key=>$educadet)

                        <tr>  
                            <td><input type="text" name="addmore[{{$key}}][exam]" placeholder="Enter your Name" class="form-control" value="{{$educadet->exam}}"/></td>  
                            <td><input type="text" name="addmore[{{$key}}][institute]" placeholder="Enter your Name" class="form-control" value="{{$educadet->institute}}"/></td>  
                            <td><input type="text" name="addmore[{{$key}}][board]" placeholder="Enter your Qty" class="form-control" value="{{$educadet->board}}"/></td>  
                            <td><input type="text" name="addmore[{{$key}}][year]" placeholder="Enter your Name" class="form-control" value="{{$educadet->result}}"/></td>  
                            <td><input type="text" name="addmore[{{$key}}][result]" placeholder="Enter your Price" class="form-control" value="{{$educadet->year}}"/></td>  

                            <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>
                            @endforeach
                        </tr>  
                    </table>
                </div>
                <div class="tab">
                    <p class="form-sub-title"><b>Physical Information & Fevorite Matter</b></p>
                        <div class="row">
                            <div class="col-sm-3 form-group">
                                <label>Height</label>
                                <input class="form-control" type="text" name="height" pattern="[0-9.]{2,4}" autofocus required placeholder="Must be in x.y form" value="{{$cadet->height}}">
                            </div>
                            <div class="col-sm-3 form-group">
                                <label>Weight</label>
                                <input class="form-control" type="text" name="weight" pattern="[0-9]{2,3}" autofocus required placeholder="Write 52 not 52 kg" value="{{$cadet->weight}}">
                            </div>
                            <div class="col-sm-3 form-group">
                                <label>Complexon</label>
                                <input class="form-control" type="text" name="complexion" placeholder="Must be 2 to 30 Letters" pattern="[a-z /A-Z.]{2,30}" autofocus required value="{{$cadet->complexion}}">
                            </div>
                            <div class="col-sm-3 form-group">
                                <label>Visbile Mark</label>
                                <input class="form-control" type="text" name="visible_mark" placeholder="Must be 2 to 30 Letters" pattern="[a-z/ A-Z.]{2,30}" autofocus required value="{{$cadet->visible_mark}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 form-group">
                                <label>Hobby</label>
                                <input class="form-control" type="text" name="hobby" placeholder="Must be 2 to 30 Letters" pattern="[a-z A-Z.]{2,30}" autofocus required value="{{$cadet->hobby}}">
                            </div>
                            <div class="col-sm-3 form-group">
                                <label>Career</label>
                                <input class="form-control" type="text" name="career" placeholder="Must be 2 to 30 Letters" pattern="[a-z A-Z.]{2,30}" autofocus required value="{{$cadet->career}}">
                            </div>
                            <div class="col-sm-3 form-group">
                                <label>Study Subject</label>
                                <input class="form-control" type="text" name="study_subject" placeholder="Must be 2 to 30 Letters" pattern="[a-z A-Z.]{2,30}" autofocus required value="{{$cadet->study_subject}}">
                            </div>
                            <div class="col-sm-3 form-group">
                                <label>Person</label>
                                <input class="form-control" type="text" name="person" placeholder="Must be 2 to 30 Letters" pattern="[a-z A-Z.]{2,30}" autofocus required value="{{$cadet->person}}">
                            </div>
                        </div>
                        <div class="row">                
                                <div class="col-sm-6 form-group">
                                    <label>Skills</label>
                                    <input class="form-control" type="text" name="skill" placeholder="Must be 2 to 30 Letters" pattern="[a-z A-Z.]{2,30}" autofocus required value="{{$cadet->skill}}">
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Responsibility</label>
                                    <input class="form-control" type="text" name="responsibility" placeholder="Must be 2 to 30 Letters" pattern="[a-z A-Z.]{2,30}" autofocus required value="{{$cadet->responsibility}}">
                                </div>
                        </div>
                </div>
                <div class="tab">
                    <p class="form-sub-title"><b>Games and Extracurricular Activities</b></p>
                            <table class="table table-bordered" id="ecaTable">  

                        <tr>

                            <th>Games / Extracurricular Activities</th>
                            <th>Institution (if related)</th>
                            <th>Award / Achievement (if any)</th>   
                            <th>Action</th>
                        </tr>
                                @foreach(json_decode($cadet->eca_name) as $singleEca)

                        <tr>  
                            <td><input type="text" name="eca_act[{{$key}}][eca_name]" placeholder="Dancing" class="form-control" value="{{$singleEca->eca_name}}"/></td>  
                            <td><input type="text" name="eca_act[{{$key}}][eca_inst]" placeholder="Enter your Name" class="form-control" value="{{$singleEca->eca_inst}}"/></td>  
                            <td><input type="text" name="eca_act[{{$key}}][eca_award]" placeholder="Enter your Qty" class="form-control" value="{{$singleEca->eca_award}}"/></td>  
                             <td><button type="button" name="addeca" id="addeca" class="btn btn-success">Add More</button></td>
                            @endforeach
                        </tr>  
                    </table>
                </div>
                <div class="tab">
                    <p class="form-sub-title"><b>Involvements and Additional Information</b></p>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label>Involvements</label>
                                <input class="form-control" type="text" name="involvement" autofocus required pattern="[0-9a-z A-Z.-@]{6,500}" placeholder="Must be 6 to 255 Characters" value="{{$cadet->involvement}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label>Additional Information</label>
                                <input class="form-control" type="text" name="remarks" autofocus required pattern="[0-9a-z A-Z.-@]{6,500}" placeholder="Must be 6 to 255 Characters" value="{{$cadet->remarks}}">
                            </div>
                        </div>
                </div>
           
                  <div style="overflow:auto;">
                    <div style="float:right;">
                      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                    </div>
                  </div>
                  <!-- Circles which indicates the steps of the form: -->
                  <div style="text-align:center;margin-top:40px;">
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
            <!--        <span class="step"></span>-->
            <!--        <span class="step"></span>-->
                  </div>
                </form>
                            </div>
                        </div>
                    @endif
                    
                    @if(auth()->user()->role=='Cadet')
                    
                    <div class="ibox">
                        <div class="ibox-head">
                            <div class="ibox-title">
                                <h3>Update Password</h3>
                            </div>
                        </div>
                            <div class="ibox-body">
                                <form id="regForm" action="{{route('puo.update-method-cadet-pass-cadet',$cadet->id)}}" method="post" role="form">
                    @csrf
                    <!-- One "tab" for each step in the form: -->
                        <p class="form-sub-title"><b>Basic Information</b></p>
                        <div class="row">                
                            <div class="col-sm-3 form-group">
                                <label>Cadet ID</label>
                                <input class="form-control" type="text" autofocus required value="{{$cadet->cdt_id}}" readonly>
                            </div>
                            <div class="col-sm-3 form-group">
                                <label>Cadet Name</label>
                                <input class="form-control" type="text" autofocus required value="{{$cadet->name}}" readonly>
                            </div>
                            <div class="col-sm-3 form-group">
                                <label>Student ID</label>
                                <input class="form-control" type="text" name="std_id" value="{{$cadet->std_id}}" readonly>
                            </div>
                            <div class="col-sm-3 form-group">
                                <label>Password</label>
                                <input class="form-control" type="password" autofocus name="password" required>
                            </div>
                        </div>
                        <br>            
                        <button type="submit" class="btn btn-info">Update</button>
                        <a href="{{route('puo.dashboard')}}"><button type="button" class="btn btn-danger">Back</button></a>              
                </form>
                            </div>
                        </div>  
                    
                    @endif
                </div>
            </div>
        </div>
@stop
@push('js')

<script type="text/javascript">
    var i = 0;
    $("#add").click(function(){
        ++i;
        $("#dynamicTable").append('<tr><td><input type="text" name="addmore['+i+'][exam]" placeholder="Enter your Name" class="form-control" /></td><td><input type="text" name="addmore['+i+'][institute]" placeholder="Enter your Name" class="form-control" /></td><td><input type="text" name="addmore['+i+'][board]" placeholder="Enter your Name" class="form-control" /></td><td><input type="text" name="addmore['+i+'][result]" placeholder="Enter your Qty" class="form-control" /></td><td><input type="text" name="addmore['+i+'][year]" placeholder="Enter your Price" class="form-control" /></td><td><button type="button" class="btn btn-danger remove-tr">Remove</button></td></tr>');
    });
    $(document).on('click', '.remove-tr', function(){  
         $(this).parents('tr').remove();
    }); 
    
            var i = 0;
        $("#addeca").click(function(){
            ++i;
            $("#ecaTable").append('<tr><td><input type="text" name="eca_act['+i+'][eca_name]" placeholder="Singing" class="form-control" /></td><td><input type="text" name="eca_act['+i+'][eca_inst]" placeholder="Rajuk Uttara Model College" class="form-control" /></td><td><input type="text" name="eca_act['+i+'][eca_award]" placeholder="Runner Up" class="form-control" /></td><td><button type="button" class="btn btn-danger remove-tr">Remove</button></td></tr>');
        });
        $(document).on('click', '.remove-tr', function(){  
             $(this).parents('tr').remove();
        }); 
    
</script>
@endpush()
