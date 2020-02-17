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
                            <h1><b>NOTICE</b></h1>    
                        </div><br>
                        <div class="print_body_single">
                            <table class="notice">
                                <tr>
                                    <th>Date of Publication : {{$notices->start}}</th>
                                </tr>
                                <tr>
                                    <td style="text-align:center;"><h2>{{$notices->title}}</h2></td>
                                </tr> 
                                <tr>
                                    <td>{{$notices->body}}</td>
                                </tr>   
                            </table>
                            <div class="notice">
                                <br><br><br><br>
                                <p>___________________________</p>
                                <h4>Autorized by<br>
                                M.M. Rakibul Hasan<br>
                                Professor Under Office<br>
                                IUBAT BNCC Platoon</h4>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
