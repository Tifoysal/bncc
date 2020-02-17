<head>
    <title>CMSIBP - PUO</title>
    <link href="{{asset('/')}}backend/user/css/print-all.css" rel="stylesheet" />
</head>
<div class="page-content fade-in-up">
        <div class="row">
            <div class="col-md-12">
                <div class="ibox"> 
                <div class="ibox-body">
                        <div class="print_head">
                            <img src="img/print_header.png"/>    
                        </div>
                        <div class="print_title">
                            <h1><b>All Budget Information</b></h1>    
                        </div><br>
                        <div class="print_body_all">
                        <table width="100%" class="all_info">
                            <thead>
                                        <tr>
                                        <th>SL</th>
                                        <th>Semester</th>
                                        <th>Date</th>
                                        </tr>
                                </thead>
                                 <tbody>
                                    @foreach($budgets as $key=>$singlebudget)
                                        <tr>
                                          <td>{{$key+1}}</td>
                                          <td>{{$singlebudget->semester}}</td>
                                          <td>{{$singlebudget->date}}</td>
                                        </tr>
                                           @endforeach                   
                                   </tbody>
                                </table>
                            </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>