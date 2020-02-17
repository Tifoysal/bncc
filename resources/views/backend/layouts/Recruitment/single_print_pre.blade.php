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
                            <h1><b>Individual Applicant Information</b></h1>    
                        </div>
                        <br>
                        <div class="print_body">
                            <h5>
                                <div class="print_body_single">
                            
                            <table border="0" cellspacing="0" cellpadding="0" class="table">
                              <tr>
                                    <td colspan="5"><center><h3>Personal Information</h3></center></td>
                              </tr>
                              <tr>
                                <th width="100" valign="top">Student ID</th>
                                <td width="100" valign="top">: {{$cadets->std_id}}</td>
                                <th width="100" valign="top"></th>
                                <td width="150" valign="top"></td>
                                <td width="200" rowspan="8" valign="top"><img class="cadet" src="{{asset('user/cadet/'.$cadets->photo)}}"></td>
                              </tr>
                              
                              <tr>
                                <th width="100" valign="top">Name</th>
                                <td width="300" valign="top">: {{$cadets->name}}</td>
                              </tr>
                              <tr>
                                <th width="100" valign="top">Department</th>
                                <td width="300" valign="top">: {{$cadets->dept}}</td>
                              </tr>
                              <tr>
                                <th width="100" valign="top">Semester</th>
                                <td width="300" valign="top">: {{$cadets->semester}}</td>  
                              </tr>
                              <tr>
                                <th width="100" valign="top">Date of Birth</th>
                                <td width="300" valign="top">: {{$cadets->dob}}</td>
                              </tr>
                              <tr>
                                <th width="100" valign="top">Gender</th>
                                <td width="300" valign="top">: {{$cadets->gender}}</td>
                              </tr>
                              <tr>
                                <th width="150" valign="top">Marital Status</th>
                                <td width="300" valign="top">: {{$cadets->marital}} </td>
                              </tr>
                              <tr>
                                <th width="150" valign="top">Religion</th>
                                <td width="300" valign="top">: {{$cadets->religion}}</td>
                                  <th width="150" valign="top">Status</th>
                                <th width="180" valign="top">: {{$cadets->status}} </th>
                              </tr>
                                <tr>
                                <th width="150" valign="top">Nationality</th>
                                <td width="300" valign="top">: {{$cadets->nation}}</td>
                                  
                              </tr>
                            </table>
                            <br><br>
                            <table class="table">
                             <tr><td colspan="5"><center>
                                 <h3>Educational Information</h3></center></td>
                             </tr>    
                            <tr>
                                <th>Exam</th>
                                <th>Institute</th>
                                <th>Board</th>
                                <th>Result</th>
                                <th>Year</th>
                            </tr>

                                @foreach(json_decode($cadets->exam) as $educadet)
                              <tr>
                                <td>{{$educadet->exam}}</td>
                                <td>{{$educadet->institute}}</td>
                                <td>{{$educadet->board}}</td>
                                <td>{{$educadet->result}}</td>
                                <td>{{$educadet->year}}</td>
                            </tr>    

                        @endforeach        
                        </table>
                         <br><br>           
                            <table class="table">
                                <tr>
                                    <td colspan="5"><center><h3>Contact Information</h3></center></td>
                                </tr>
                                <tr>
                                    <th width="130" valign="top">Mobile </th>
                                    <td  width="250" valign="top">: {{$cadets->mobile}}</td>
                                    <th  width="180" valign="top">Email Address</th>
                                    <td width="250" valign="top">: {{$cadets->email}} </td>              
                                </tr>
                                <tr>
                                    <th width="130" valign="top">Facebook ID </th>
                                    <td  width="250" valign="top">: {{$cadets->fbid}}</td>             
                                </tr>
                                <tr>
                                    <th width="130" valign="top">Father's Name </th>
                                    <td  width="250" valign="top">: {{$cadets->fname}}</td>
                                    <th  width="180" valign="top">Father's Occupation </th>
                                    <td width="250" valign="top">: {{$cadets->foccu}} </td>              
                                </tr>
                                <tr>
                                    <th width="130" valign="top">Mother's Name </th>
                                    <td width="250" valign="top">: {{$cadets-> 	mname}}</td>
                                    <th width="180" valign="top">Mother's Occupation </th>
                                    <td width="250" valign="top">: {{$cadets->moccu }} </td>                                 
                                </tr>
                                
                                <tr>
                                    <th width="130" valign="top">Present Address </th>
                                    <td width="250" valign="top">: {{$cadets-> 	pre_add}}</td>
                                    <th width="180" valign="top">Parmanent Address </th>
                                    <td width="250" valign="top">: {{$cadets->par_add}} </td>   
                                </tr>
                                      
                        <br><br>
                        <table class="table">
                            <tr>
                                <td colspan="8"><center><h3><br><br>Physical Information </h3></center></td>
                            </tr>
                            
                            <tr>
                                <th width="130" valign="top">Height </th>
                                <td width="250" valign="top">: {{$cadets->height}}</td>
                                <th width="180" valign="top">Weight</th>
                                <td width="250" valign="top">: {{$cadets->weight}} </td>
                                <th width="180" valign="top">Visible Mark</th>
                                <td width="250" valign="top">: {{$cadets->visible_mark}} </td>                                
                            </tr>                            
                        </table> 
                        <br><br>
                        <table class="table">
                            <tr>
                                <td colspan="7"><center><h3>Favourite Matters </h3></center></td>
                            </tr>
                            <tr>
                                <th width="130" valign="top">Hobby </th>
                                <td width="250" valign="top">: {{$cadets->hobby}}</td>
                                <th width="180" valign="top">Study Subject</th>
                                <td width="250" valign="top">: {{$cadets->career}} </td>
                                <th width="130" valign="top">Hobby </th>
                                <td width="250" valign="top">: {{$cadets->study_subject}}</td>
                            </tr>
                        </table> 
                        <br><br>
                         <table class="table">
                             <tr><td colspan="5"><center>
                                 <h3>Games and Extracurricular Activities</h3></center></td>
                             </tr>    
                            <tr>
                                <th>Games / Extracurricular Activities</th>
                                <th>Institution (if related)</th>
                                <th>Award / Achievement (if any)</th>
                            </tr>
                            @foreach(json_decode($cadets->eca_name) as $singleEdu)
                              <tr>
                                <td>{{$singleEdu->eca_name}}</td>
                                <td>{{$singleEdu->eca_inst}}</td>
                                <td>{{$singleEdu->eca_award}}</td>
                                
                            </tr>    

                        @endforeach 
                              
                                </table>
                        <br>
                        <table class="table">
                            <tr>
                                <th colspan="5"><center><h3>Currently Involvement with other organization (if any)</h3></center></th>
                            </tr>
                            <tr>
                                <td>{{$cadets->involvement}} </td>   
                            </tr>
                        </table>
                        <br>
                        <table class="table">
                            <tr>
                                <th colspan="5"><center><h3>Previously Involvement with other organization (if any)</h3></center></th>
                            </tr>
                            <tr>
                                <td>{{$cadets->remarks}} </td>   
                            </tr>
                        </table>
                        <br><br>
                        <table class="table">
                            <tr>
                                <td colspan="5"><center><h3>Ex Cadet Information </h3></center></td>
                            </tr>
                            <tr>
                                <th width="130" valign="top">Status </th>
                                <td width="250" valign="top">: {{$cadets->ex_cdt_status}}</td>
                                @if($cadets->ex_cdt_status=='Yes')
                                <th width="180" valign="top">Cadet ID</th>
                                <td width="250" valign="top">: {{$cadets->ex_cdt_id}} </td>                                 
                            </tr>
                            <tr>
                                <th width="130" valign="top">Division</th>
                                <td width="250" valign="top">: {{$cadets->ex_cdt_div}}</td>
                                <th width="180" valign="top">Institute</th>
                                <td width="250" valign="top">: {{$cadets->ex_cdt_inst}} </td>                                 
                            </tr>
                            @endif
                        </table>
                        </div>
                            <br>
                                    <a href="{{route('puo.print-cadet-one',$cadets->id)}}">
                                        <button class="btn btn-primary btn-md"> Print</button>
                                    </a>
                                    <a href="{{route('puo.dashboard')}}">
                                        <button type="button" class="btn btn-danger">Back</button>
                                    </a>
                             
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
