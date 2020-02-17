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
                            <h1><b>All Course Materials Information</b></h1>    
                        </div><br>
                        <div class="print_body_all">
                        <table width="100%" class="all_info">
                            <thead>
                                        <tr>
                                        <th>ID</th>
                                        <th>File Name</th>
                                        <th>File Type</th>
                                        <th>Uploaded On</th>
                                        <th>Remarks</th>>
                                    </tr>
                                </thead>
                                 <tbody>
                                    @foreach($cmaterials as $singleCmaterial)
                                        <tr>
                                          <td>{{$singleCmaterial->id}}</td>
                                          <td>{{$singleCmaterial->name}}</td>
                                          <td>{{$singleCmaterial->type}}</td>
                                          <td>{{$singleCmaterial->created_at}}</td>
                                          <td>{{$singleCmaterial->remarks}}</td>
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