<head>
    <title>CMSIBP - Store</title>
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
                            <h1><b>All Product Information</b></h1>    
                        </div><br>
                        <div class="print_body_all">
                        <table width="100%" class="all_info">
                                  <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Product Name</th>
                                        <th>Category</th>
                                        <th>Quantity</th>
                                        <th>Damages</th>
                                        <th>Usable</th>
                                        <th>Remarks</th>
                                        <th>Last Updated</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                 <tbody>
                                    @foreach($products as $singleProduct)
                                        <tr>
                                          <td>{{$singleProduct->id}}</td>
                                          <td>{{$singleProduct->item}}</td>
                                          <td>{{$singleProduct->category}}</td>
                                          <td>{{$singleProduct->qty}}</td>
                                          <td>{{$singleProduct->damage}}</td>
                                          <td>{{($singleProduct->qty)-($singleProduct->damage)}}</td>
                                          <td>{{$singleProduct->remarks}}</td>
                                          <td>{{$singleProduct->updated_at}}</td>
                                          <td>{{$singleProduct->status}}</td>
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