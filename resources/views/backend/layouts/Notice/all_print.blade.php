<head>
    <title>CMSIBP - Notice</title>
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
                            <h1><b>All Notice Information</b></h1>    
                        </div><br>
                        <div class="print_body_all">
                        <table width="100%" class="all_info" >
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Body</th>
                                    <th>Published On</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($notices as $singleNotice)
                                    <tr>
                                      <td>{{$singleNotice->id}}</td>
                                      <td>{{$singleNotice->title}}</td>
                                      <td>{{$singleNotice->body}}</td>
                                      <td>{{$singleNotice->start}}</td>
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