<head>
    <title>CMSIBP - Requsition</title>
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
                            <h1><b>All Requisition Information</b></h1> 
                            <h3>Prinitng Date : {{date("d-m-y")}}</h3>
                        </div><br>
                        <div class="print_body_all">
                        <table width="100%" class="all_info">
                        
                        
                       
                            <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Requsition By</th>
                                        <th>Prduct Name</th>
                                        <th>Quantity</th>
                                        <th>Requisition For</th>
                                        <th>Tentative Return Date</th>
                                        <th>Remarks</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                 <tbody>
                                     @foreach($reqs as $key=>$singleReq)
                                        <tr>
                                          <td>{{$key+1}}</td>
                                          <td>{{($singleReq->personnel)->name}}</td>
                                          <td>{{($singleReq->product)->item}}</td>
                                          <td>{{$singleReq->qty}}</td>
                                          <td>{{$singleReq->req_for}}</td>
                                          <td>{{$singleReq->return}}</td>
                                          <td>{{$singleReq->remarks}}</td>
                                          <td>{{$singleReq->status}}</td>
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