@extends('backend.master')
@section('content')
    <div class="page-heading">
        <h1 class="page-title">PUO Information Management</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{route('puo.dashboard')}}"><i class="la la-home font-20"></i></a>
                </li>
            </ol>
    </div>
    <div class="page-content fade-in-up">
        <div class="row">
            <div class="col-md-12">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title"> 
                            <h3>Add New Cadet Attendance</h3>
                        </div>
                        <div class="col-lg-offset-6">
                            <a href="{{route('puo.print-cadet-all-att-blank')}}">
                            <button class="btn btn-info btn-md">
                            Print Blank Sheet</button>
                            </a>
                        </div>
                    </div>
                    <form action="{{route('puo.add-cadet-attendance')}}" method="POST" role="form">
                        @csrf
                        <div class="ibox-body">
                            <div class="row">
                                <div class="col-lg-6 form-group">
                                    <label>Attendance Date</label>
                                    <input class="form-control" type="date" name="date" autofocus required>
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label>Class Type</label>
                                        <select name="type" class="form-control" required>
                                            <option value="">Please Select</option>
                                            <option value="Theorotical">Theorotical</option>
                                            <option value="Practical">Practical</option>
                                    </select>                            
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Cadet ID</th>
                                            <th>Cadet Name</th>
                                            <th>Rank</th>
                                            <th>Attendance Status</th>
                                        </tr>
                                    </thead>
                                     <tbody>
                                        @foreach($cadets as $key=>$singleCadet)
                                            <tr>
                                              <td>{{$key+1}}</td>
                                                <td>
                                                <input type="hidden" value="{{($singleCadet->id)}}" name="user_id[]">{{($singleCadet->cdt_id)}}
                                                </td>
                                              <td>{{($singleCadet->name)}}</td>
                                              <td>{{($singleCadet->rank)}}</td>
                                              <td>
                                                <select name="status[]" class="form-control" required>
                                                    <option value="">Please Select</option>
                                                    <option value="Present">Present</option>
                                                    <option value="Absent">Absent</option>
                                                  </select>   
                                                </td>
                                            </tr>
                                           @endforeach
                                   </tbody>
                            </table>
                            <div class="row">
                                <div class="form-group col-lg-4">
                                    <button class="btn btn-info" type="submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop