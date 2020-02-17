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
                            <h1><b>Individual Personnel Information</b></h1>    
                        </div><br>
                        <div class="print_body_single">
                            <table border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <th width="100" valign="top">BNCC ID</th>
                                <td width="100" valign="top">: {{$puos->puo_id}}</td>
                                <td width="180" rowspan="8" valign="top"><img class="puo" src="{{asset('user/puo/'.$puos->photo)}}"></td>
                              </tr>
                              <tr>
                                <th width="100" valign="top">Name</th>
                                <td width="180" valign="top">: {{$puos->name}}</td>
                              </tr>
                              <tr>
                                <th width="100" valign="top">Rank</th>
                                <td width="180" valign="top">: {{$puos->rank}}</td>
                              </tr>
                              <tr>
                                <th width="100" valign="top">Mobile</th>
                                <td width="180" valign="top">: {{$puos->mobile}}</td>
                              </tr>
                              <tr>
                                <th width="100" valign="top">Email</th>
                                <td width="180" valign="top">: {{$puos->email}}</td>
                              </tr>
                              <tr>
                                <th width="100" valign="top">Joining Date</th>
                                <td width="180" valign="top">: {{$puos->join}} </td>
                              </tr>
                              <tr>
                                <th width="100" valign="top">Retirement Date</th>
                                <td width="180" valign="top">: {{$puos->left}}</td>
                              </tr>
                            </table>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

