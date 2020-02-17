    @include('frontend/header')
     @if(Session::has('message'))
            <div class="alert alert-success">{{ Session::get('message') }}</div>
        @endif
    <div class="wrapper" style="background-color:#b2d8b2;">
        <div class="container">
            <div class="page-content fade-in-up">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ibox">
                            <div class="ibox-head"><br><br><br><br><br><br>
                                 @if($business_data->recruitment)
                                <div class="ibox-title">
                                    <h2>Cadet Recruitment Form</h2>
                                </div>
                            </div>
                           
         <div class="ibox-body">
                            <h3>Instructions</h3>
                            <b><p class="text-danger" style="font-size:25px;">{{$business_data->instruction}}</p></b>
                            <br><br>
            <form id="regForm" action="{{route('add-recru-application')}}" method="post" role="form" enctype="multipart/form-data">
                @csrf
                    <h4 class="form-sub-title"><b>Basic Information</b></h4>
                    <div class="row">                
                        <div class="col-sm-3 form-group">
                            <label>Student Name</label>
                            <input class="form-control" type="text" name="name" placeholder="Must be 2 to 30 Letters" pattern="[a-z A-Z.]{2,30}" autofocus required>
                        </div>
                        <div class="col-sm-3 form-group">
                            <label>Student ID</label>
                            <input class="form-control" type="text" name="std_id" placeholder="Must be 8 Digits" pattern="[0-9]{8}" autofocus required>
                        </div>
                        <div class="col-sm-3 form-group">
                            <label>Department</label>
                            <select name="dept" class="form-control" required>
                                <option value="BBA">BBA</option>
                                <option value="BCSE">BCSE</option>
                                <option value="BSME">BSME</option>
                                <option value="BEEE">BEEE</option>
                                <option value="BSCE">BSCE</option>
                                <option value="BSN">BSN</option>
                                <option value="BAEcon">BAEcon</option>
                                <option value="BAEng">BAEng</option>
                            </select>
                        </div>
                        <div class="col-sm-3 form-group">
                            <label>Semester</label>
                            <input class="form-control" type="text" name="semester" placeholder="Must be 1 digit" pattern="[1-9]{1}" autofocus required>
                        </div>
                </div>
                <div class="row">            
                    <div class="col-sm-3 form-group">
                        <label>Gender</label>
                            <select name="gender" class="form-control" required>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                    </div>
                    <div class="col-sm-3 form-group">
                            <label>Date of Birth</label>
                            <input class="form-control" type="date" name="dob" autofocus required>
                        </div>
                        <div class="col-sm-3 form-group">
                            <label>Merial Status</label>
                            <select name="marital" class="form-control" required>
                                <option value="Single">Single</option>
                                <option value="Married">Married</option>
                            </select>
                        </div>
                        <div class="col-sm-3 form-group">
                            <label>Religion</label>
                            <input class="form-control" type="text" name="religion" placeholder="Must be 2 to 30 Letters" pattern="[a-z A-Z.]{2,30}" autofocus required>
                        </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 form-group">
                        <label>Nationality</label>
                        <input class="form-control" type="text" name="nation" placeholder="Must be 3 to 30 Letters" pattern="[a-z A-Z.]{3,30}" autofocus required>
                    </div>
                    <div class="col-sm-3 form-group">
                        <label>Photo</label>
                        <input class="form-control" type="file" name="photo" autofocus required>
                    </div>
                    <div class="col-sm-3 form-group">
                        <label>ID Card</label>
                        <input class="form-control" type="file" name="id_card" autofocus required>
                    </div>                
                    <input class="form-control" type="hidden" name="role" value="Cadet" required>
        <!--            IT WILL BE HIDDEN-->
                    <div class="col-sm-3 form-group">
                        <label>Status</label>
                            <input class="form-control" type="text" name="status" value="Applied" autofocus required readonly>
                    </div>

                </div>
                <br><br><br>
                <h4 class="form-sub-title"><b>Educational Information</b></h4>
                        <table class="table table-bordered" id="dynamicTable">  

                    <tr>

                        <th>Exam Name</th>
                        <th>Institute</th>
                        <th>Board</th>
                        <th>Year</th>
                        <th>Result</th>
                        <th>Action</th>
                    </tr>
                    <tr>  
                        <td><input type="text" name="education[0][exam]" placeholder="Degree Name" class="form-control" /></td>  
                        <td><input type="text" name="education[0][institute]" placeholder="Institute Name" class="form-control" /></td>  
                        <td><input type="text" name="education[0][board]" placeholder="Board" class="form-control" /></td>  
                        <td><input type="text" name="education[0][result]" placeholder="Year" class="form-control" /></td>  
                        <td><input type="text" name="education[0][year]" placeholder="Result" class="form-control" /></td>  

                        <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>  
                    </tr>  
                </table>

                <br><br><br>
                <h4 class="form-sub-title"><b>Contact Information</b></h4>
                    <div class="row">
                        <div class="col-sm-4 form-group">
                            <label>Cadet Mobille</label>
                            <input class="form-control" type="text" name="mobile" pattern="[0-9]{11,14}" autofocus required placeholder="Must be 11 to 14 Digit">
                        </div>
                        <div class="col-sm-4 form-group">
                            <label>Cadet Email</label>
                            <input class="form-control" type="email" name="email" placeholder="Must be 8 to 50 Letters" pattern="[a-z A-Z.@]{8,50}" autofocus required>
                        </div>
                        <div class="col-sm-4 form-group">
                            <label>Cadet FB Profile Link (Optional)</label>
                            <input class="form-control" type="text" name="fbid" placeholder="If not write N/A or it must be 2 to 255 Letters" pattern="[a-z A-Z.:/0-9]{2,255}" autofocus>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3 form-group">
                            <label>Father Name</label>
                            <input class="form-control" type="text" name="fname" placeholder="Must be 2 to 30 Letters" pattern="[a-z A-Z.]{2,30}" autofocus required>
                        </div>
                        <div class="col-sm-3 form-group">
                            <label>Father Occupation</label>
                            <input class="form-control" type="text" name="foccu" placeholder="Must be 2 to 30 Letters" pattern="[a-z A-Z.]{2,30}" autofocus required>
                        </div>
                        <div class="col-sm-3 form-group">
                            <label>Mather Name</label>
                            <input class="form-control" type="text" name="mname" placeholder="Must be 2 to 30 Letters" pattern="[a-z A-Z.]{2,30}" autofocus required>
                        </div>
                        <div class="col-sm-3 form-group">
                            <label>Mather Occupation</label>
                            <input class="form-control" type="text" name="moccu" placeholder="Must be 2 to 30 Letters" pattern="[a-z A-Z.]{2,30}" autofocus required>
                        </div>                
                    </div>                
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label>Present Address</label>
                            <input class="form-control" type="text" name="pre_add" autofocus required pattern="[0-9a-z A-Z.-@]{2,500}" placeholder="Must be 2 to 500 Characters">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label>Permanent Address</label>
                            <input class="form-control" type="text" name="par_add" autofocus required pattern="[0-9a-z A-Z.-@]{2,500}" placeholder="Must be 2 to 500 Characters">
                        </div>
                    </div>
                    <br><br><br>
                <h4 class="form-sub-title"><b>Physical Information & Fevorite Matter</b></h4>
                    <div class="row">
                        <div class="col-sm-4 form-group">
                            <label>Height</label>
                            <input class="form-control" type="text" name="height" pattern="[0-9.]{2,4}" autofocus required placeholder="Must be in x.y form">
                        </div>
                        <div class="col-sm-4 form-group">
                            <label>Weight</label>
                            <input class="form-control" type="text" name="weight" pattern="[0-9]{2,3}" autofocus required placeholder="Write 52 not 52 kg">
                        </div>
                        <div class="col-sm-4 form-group">
                            <label>Visbile Mark</label>
                            <input class="form-control" type="text" name="visible_mark" placeholder="Must be 2 to 30 Letters" pattern="[a-z/ A-Z.]{2,30}" autofocus required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 form-group">
                            <label>Hobby</label>
                            <input class="form-control" type="text" name="hobby" placeholder="Must be 2 to 30 Letters" pattern="[a-z A-Z.]{2,30}" autofocus required>
                        </div>
                        <div class="col-sm-4 form-group">
                            <label>Career</label>
                            <input class="form-control" type="text" name="career" placeholder="Must be 2 to 30 Letters" pattern="[a-z A-Z.]{2,30}" autofocus required>
                        </div>
                        <div class="col-sm-4 form-group">
                            <label>Study Subject</label>
                            <input class="form-control" type="text" name="study_subject" placeholder="Must be 2 to 30 Letters" pattern="[a-z A-Z.]{2,30}" autofocus required>
                        </div>
                    </div>
                    <br><br><br>
                <h4 class="form-sub-title"><b>Games and Extracurricular Activities</b></h4>
                    <table class="table table-bordered" id="ecaTable">  
                    <tr>

                        <th>Games / Extracurricular Activities</th>
                        <th>Institution (if related)</th>
                        <th>Award / Achievement (if any)</th>   
                        <th>Action</th>
                    </tr>
                   <tr>  
                        <td><input type="text" name="eca_act[0][eca_name]" placeholder="Degree Name" class="form-control" /></td>  
                        <td><input type="text" name="eca_act[0][eca_inst]" placeholder="Institute Name" class="form-control" /></td>  
                        <td><input type="text" name="eca_act[0][eca_award]" placeholder="Board" class="form-control" /></td>  
                        <td><button type="button" name="addeca" id="addeca" class="btn btn-success">Add More</button></td>  
                    </tr> 
                </table>
                    <br><br><br>
                <h4 class="form-sub-title"><b>Involvements and Additional Information</b></h4>
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <label>
                                Currently Involved with other   organization (If any)
                            </label>
                            <input class="form-control" type="text" name="involvement" autofocus pattern="[0-9a-z A-Z.-@]{6,500}" placeholder="Must be 6 to 255 Characters">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <label>
                                Previous Experience with other organization (If any)
                            </label>
                            <input class="form-control" type="text" name="ex_involvement" autofocus pattern="[0-9a-z A-Z.-@]{6,500}" placeholder="Must be 6 to 255 Characters">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 form-group">
                            <label>
                                Are you an Ex-BNCC Cadet
                            </label>
                            <input type="radio" name="ex_cdt_status" value="No"> No<br>
                            <input type="radio" name="ex_cdt_status" value="Yes"> Yes
                            (If yes fillup the following information)
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 form-group">
                            <label>Cadet ID</label>
                            <input class="form-control" type="text" name="ex_cdt_id" placeholder="Must be 8 Digits" pattern="[0-9]{8}" autofocus>
                        </div>
                        <div class="col-sm-4 form-group">
                            <label>Division</label>
                            <input class="form-control" type="text" name="ex_cdt_div" placeholder="Must be 3 to 30 Letters" pattern="[a-z A-Z.]{3,30}" autofocus>
                        </div>
                        <div class="col-sm-4 form-group">
                            <label>Institute</label>
                            <input class="form-control" type="text" name="ex_cdt_inst" placeholder="Must be 3 to 30 Letters" pattern="[a-z A-Z.]{3,30}" autofocus>
                        </div>
                    </div>
                <br><br><br>
                <h4 class="form-sub-title"><b>Declaration</b></h4>
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <p><input type="checkbox" required>
                            &nbsp;&nbsp;  
                            I hereby declare that the above furnished infomration is true to the best of my knowledge and that I will be held responsibile for any deviation from them at a later stage.</p>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
            </form>
            <br><br>
             @else
             <h3>Currently our recruitment process is CLOSED.</h3>
             @endif
        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    @push('js')

    <script type="text/javascript">
        var i = 0;
        $("#add").click(function(){
            ++i;
            $("#dynamicTable").append('<tr><td><input type="text" name="education['+i+'][exam]" placeholder="Degree Name" class="form-control" /></td><td><input type="text" name="education['+i+'][institute]" placeholder="Institute Name" class="form-control" /></td><td><input type="text" name="education['+i+'][board]" placeholder="Board" class="form-control" /></td><td><input type="text" name="education['+i+'][result]" placeholder="Result" class="form-control" /></td><td><input type="text" name="education['+i+'][year]" placeholder="Year" class="form-control" /></td><td><button type="button" class="btn btn-danger remove-tr">Remove</button></td></tr>');
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
        <script src="backend/js/main.js"></script>

        </div>
    </div>
    .@include('frontend.footer')

