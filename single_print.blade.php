<head>
    <title>CMSIBP - Cadet</title>
    <link href="{{asset('/')}}backend/user/css/print-single.css" rel="stylesheet" />
</head>
<div class="page-content fade-in-up">
        <div class="row">
            <div class="col-md-12">
                <div class="ibox"> 
                <div class="ibox-body cadet-print">
                        <div class="print_head">
                            <img src="img/print_header.png"/>    
                        </div>
                        <div class="print_title">
                            <h1><b>Individual Cadet Information</b></h1>    
                        </div><br>
                            
                            <table class="table">
                              <tr>
                                    <td colspan="2"><center><h3>Basic Information</h3></center></td>
                              </tr>
                              <tr>
                                <th>Name</th>
                                <td>: {{$cadets->name}}</td>

                                <td rowspan="7"><img class="cadet" src="{{asset('user/cadet/'.$cadets->photo)}}"></td>
                              </tr>
                              <tr>
                                <th>Cadet ID</th>
                                <td>: {{$cadets->cdt_id}}</td>
                              </tr>
                              <tr>
                                <th>Student ID</th>
                                <td>: {{$cadets->std_id}}</td>
                              </tr>
                              <tr>
                                <th>Department</th>
                                <td>: {{$cadets->dept}}</td>
                              </tr>
                              <tr>
                                <th>Rank</th>
                                <td>: {{$cadets->rank}}</td>  
                              </tr>
                              <tr>
                                <th>Section</th>
                                <td>: {{$cadets->section}}</td>
                              </tr>
                              <tr>
                                <th>Platoon</th>
                                <td>: {{$cadets->platoon}}</td>
                              </tr>
                              <tr>
                                <th>Joining Date</th>
                                <td>: {{$cadets->join}} </td>
                              </tr>
                              <tr>
                                <th>Cadet Upto</th>
                                <td>: {{$cadets->left}}</td>
                                  <th>Status</th>
                                <td>: {{$cadets->status}} </td>
                              </tr>
                                <tr>
                                <th>Skill</th>
                                <td>: {{$cadets->skill}}</td>
                                  <th>Responsibility</th>
                                <td>: {{$cadets-> 	responsibility}} </td>
                              </tr>
                            </table>
                            <br><br>
                            <table class="table">
                                <tr>
                                    <td colspan="5"><center><h3>Personal Information</h3></center></td>
                                </tr>
                                <tr>
                                    <th>Father's Name </th>
                                    <td>: {{$cadets->fname}}</td>
                                    <th>Father's Occupation </th>
                                    <td>: {{$cadets->foccu }} </td>                                 
                                </tr>
                                <tr>
                                    <th>Mother's Name </th>
                                    <td>: {{$cadets->mname}}</td>
                                    <th>Mother's Occupation </th>
                                    <td>: {{$cadets->moccu }} </td>                                 
                                </tr>
                                <tr>
                                    <th>Date of Birth: </th>
                                    <td>: {{$cadets->dob }}</td>
                                    <th>Birth Location </th>
                                    <td>: {{$cadets->birth_locs }} </td>                                 
                                </tr>
                                <tr>
                                    <th>Blood Group </th>
                                    <td>: {{$cadets->blood_grp}}</td>
                                    <th>National ID (If any) </th>
                                    <td>: {{$cadets->nid}} </td>                                 
                                </tr>
                                <tr>
                                    <th>Religion </th>
                                    <td>: {{$cadets->religion}}</td>
                                    <th>Number of Siblings </th>
                                    <td>: {{$cadets->sibling}} </td>                                 
                                </tr>
                                <tr>
                                    <th>Marital Status </th>
                                    <td>: {{$cadets->marital}}</td>
                                    <th>Position </th>
                                    <td>: {{$cadets->position}} </td>                                 
                                </tr>     
                            </table>
                            <br> <br>
                            <table class="table">
                                <tr>
                                    <td colspan="5"><center><h3>Contact Information</h3></center></td>
                                </tr>
                                <tr>
                                    <th>Father's Mobile </th>
                                    <td>: {{$cadets->fmobile}}</td>
                                    <th>Present Address</th>
                                    <td>: {{$cadets->pre_add}} </td>                                 
                                </tr>
                                <tr>
                                    <th>Mother's Mobile </th>
                                    <td>: {{$cadets->mmobile}}</td>                             
                                </tr>
                                <tr>
                                    <th>Cadet's Mobile </th>
                                    <td>: {{$cadets->mobile}}</td>
                                    <th>Permanent Address</th>
                                    <td>: {{$cadets-> 	par_add}} </td>                                 
                                </tr>
                                <tr>
                                    <th>Cadet's Email </th>
                                    <td>: {{$cadets->email}}</td>            
                                </tr>
                                <tr>
                                    <th>Cadet's Facebook ID </th>
                                    <td>: {{$cadets->fbid}}</td>            
                                </tr>
                            </table>                
                        <br>        
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
                        <br>
                        <table class="table">
                            <tr>
                                <td colspan="5"><center><h3>Physical Information </h3></center></td>
                            </tr>
                            <tr>
                                <th>Height </th>
                                <td>: {{$cadets->height}}</td>
                                <th>Weight</th>
                                <td>: {{$cadets->weight}} </td>                                 
                            </tr>
                            <tr>
                                <th>Complexion</th>
                                <td>: {{$cadets->complexion}}</td>
                                <th>Visible Mark</th>
                                <td>: {{$cadets->visible_mark}} </td>                                 
                            </tr>
                        </table>
                        <br>
                        <table class="table">
                            <tr>
                                <td colspan="5"><center><h3>Favourite Matters </h3></center></td>
                            </tr>
                            <tr>
                                <th>Hobby </th>
                                <td>: {{$cadets->hobby}}</td>
                                <th>Study Subject</th>
                                <td>: {{$cadets->study_subject}} </td>                                 
                            </tr>
                            <tr>
                                <th>Career</th>
                                <td>: {{$cadets->career}}</td>
                                <th>Person</th>
                                <td>: {{$cadets->person}} </td>                                 
                            </tr>
                        </table> 
                        <br>
                        <table class="table">
                            <tr>
                                <td colspan="5"><center><h3>Games and Extracurricular Activities</h3></center></td>
                            </tr>
                            <tr>
                                <th>Games / Extracurricular Activities</th>
                                <th>Institution (if related)</th>
                                <th>Award / Achievement (if any)</th>                              
                            </tr>
                            <tr>
                                <td>{{$cadets->eca_name}} </td>
                                <td>{{$cadets->eca_institute}} </td>
                                <td>{{$cadets->eca_award}} </td>                              
                            </tr>
                        </table>
                        <br>
                        <table class="table">
                            <tr>
                                <th colspan="5"><center><h3>Involvement with other organization (if any)</h3></center></th>
                            </tr>
                            <tr>
                                <td>{{$cadets->involvement}} </td>   
                            </tr>
                        </table>
                        <br>
                        <table class="table">
                            <tr>
                                <th colspan="5"><center><h3>Remarks / Additional Information</h3></center></th>
                            </tr>
                            <tr>
                                <td>{{$cadets->remarks}} </td>   
                            </tr>
                        </table>
                    </div></div></div></div></div>


<style>
table,th,td {
  border: 1px solid black;
  border-collapse: collapse;
text-align: left;
}
</style>