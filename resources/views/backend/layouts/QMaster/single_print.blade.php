<head>
    <title>CMSIBP - PUO</title>
    <link href="{{asset('/')}}backend/user/css/print-single.css" rel="stylesheet" />
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
                            <h1><b>Individual Quarter Master Information</b></h1>    
                        </div><br>
                        <div class="print_body_single">
                            <table border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                    <th>Cadet ID</th><td> : </td><td>{{$qmasters->cdt_id}}</td>
                                </tr>
                                <tr>
                                    <th>Name</th><td> : </td><td>{{$qmasters->name}}</td>
                                </tr>    
                                <tr>
                                    <th>Email</th><td> : </td><td>{{$qmasters->email}}</td>
                                </tr> 
                                                                    <tr>
                                    <th>Mobile</th><td> : </td><td>{{$qmasters->mobile}}</td>
                                </tr>
                                <tr>
                                    <th>Joining Date</th><td> : </td><td>{{$qmasters->join}}</td>
                                </tr>   
                                <tr>
                                    <th>Retirement Date </th><td> : </td><td>{{$qmasters->left}}</td>
                                </tr>   
                            </table>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

