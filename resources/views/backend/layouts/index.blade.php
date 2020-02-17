@extends('backend.master')

@section('content')

<!-- START PAGE CONTENT-->
            <div class="page-content fade-in-up">
                 @if(Session::has('message'))
                    <div class="alert alert-success">{{ Session::get('message') }}</div>
                @endif

                @if(auth()->user()->role=='PUO')
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="ibox bg-success color-white widget-stat">
                            <div class="ibox-body">
                                <a href="{{route('puo.list-puo')}}">
                                    <h2 class="m-b-5 font-strong">{{count($puo)}}</h2>
                                    <div class="m-b-6">PUO Information</div><i class="ti-user widget-stat-icon"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="ibox bg-info color-white widget-stat">
                            <div class="ibox-body">
                                <a href="{{route('puo.list-cadet')}}">
                                    <h2 class="m-b-5 font-strong">{{count($cadet)}}</h2>
                                    <div class="m-b-6">Cadets Information</div><i class="ti-user widget-stat-icon"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="ibox bg-danger color-white widget-stat">
                            <div class="ibox-body">
                                <a href="{{route('puo.list-qmaster')}}">
                                    <h2 class="m-b-5 font-strong">{{count($qmaster)}}</h2>
                                    <div class="m-b-6">Quarter Master Details</div><i class="ti-user widget-stat-icon"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="ibox bg-warning color-white widget-stat">
                            <div class="ibox-body">
                                <a href="{{route('puo.list-cadet-attendance')}}">
                                    <h2 class="m-b-5 font-strong">{{count($attendance)}}</h2>
                                    <div class="m-b-6">Attendance Information</div><i class="fa fa-edit widget-stat-icon"></i>
                                </a>
                            </div>
                        </div>
                    </div>  
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="ibox bg-success color-white widget-stat">
                            <div class="ibox-body">
                                <a href="{{route('puo.list-cmaterial')}}">
                                    <h2 class="m-b-5 font-strong">{{count($cmaterial)}}</h2>
                                    <div class="m-b-6">Course Materials</div><i class="ti-file widget-stat-icon"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="ibox bg-info color-white widget-stat">
                            <div class="ibox-body">
                                <a href="{{route('puo.list-notice')}}">
                                    <h2 class="m-b-5 font-strong">{{count($notice)}}</h2>
                                    <div class="m-b-6">Notice Information</div><i class="ti-clipboard widget-stat-icon"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="ibox bg-danger color-white widget-stat">
                            <div class="ibox-body">
                                <a href="{{route('puo.list-leave')}}">
                                    <h2 class="m-b-5 font-strong">{{count($leave)}}</h2>
                                    <div class="m-b-6">Leave Applications</div><i class="fa fa-sign-out widget-stat-icon"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="ibox bg-warning color-white widget-stat">
                            <div class="ibox-body">
                                <a href="{{route('puo.list-product')}}">
                                    <h2 class="m-b-5 font-strong">{{count($product)}}</h2>
                                    <div class="m-b-6">Store Information</div><i class="fa fa-cubes widget-stat-icon"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="ibox bg-success color-white widget-stat">
                            <div class="ibox-body">
                                <a href="{{route('puo.list-req-own',auth()->user()->id)}}">
                                    <h2 class="m-b-5 font-strong">{{count($req)}}</h2>
                                    <div class="m-b-6">Requistion Applications</div><i class="fa fa-check widget-stat-icon"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="ibox bg-info color-white widget-stat">
                            <div class="ibox-body">
                                <a href="{{route('puo.list-budget')}}">
                                    <h2 class="m-b-5 font-strong">{{count($budget)}}</h2>
                                    <div class="m-b-6">Budget Planning</div><i class="fa fa-list widget-stat-icon"></i>
                                </a>
                            </div>
                        </div>
                    </div>
<!--
                    <div class="col-lg-3 col-md-6">
                        <div class="ibox bg-info color-white widget-stat">
                            <div class="ibox-body">
                                <a href="{{route('puo.list-notice')}}">
                                    <h2 class="m-b-5 font-strong">{{count($notice)}}</h2>
                                    <div class="m-b-6">Notice Information</div><i class="ti-clipboard widget-stat-icon"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="ibox bg-danger color-white widget-stat">
                            <div class="ibox-body">
                                <a href="{{route('puo.list-leave')}}">
                                    <h2 class="m-b-5 font-strong">{{count($leave)}}</h2>
                                    <div class="m-b-6">Leave Applications</div><i class="fa fa-sign-out widget-stat-icon"></i>
                                </a>
                            </div>
                        </div>
                    </div>
-->
                    <div class="col-lg-3 col-md-6">
                        <div class="ibox bg-warning color-white widget-stat">
                            <div class="ibox-body">
                                <a href="{{route('puo.list-application')}}">
                                    <h2 class="m-b-5 font-strong">{{count($recruitment)}}</h2>
                                    <div class="m-b-6">Recruitment Information</div><i class="fa fa-crosshairs widget-stat-icon"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                
                @if(auth()->user()->role=='QMaster')
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="ibox bg-success color-white widget-stat">
                            <div class="ibox-body">
                                <a href="{{route('puo.list-product')}}">
                                    <h2 class="m-b-5 font-strong">{{count($product)}}</h2>
                                    <div class="m-b-6">Store Information</div><i class="fa fa-align-justify widget-stat-icon"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="ibox bg-warning color-white widget-stat">
                            <div class="ibox-body">
                                <a href="{{route('puo.list-req')}}">
                                    <h2 class="m-b-5 font-strong">{{count($req)}}</h2>
                                    <div class="m-b-6">Requistion Applications</div><i class="fa fa-check widget-stat-icon"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                
                @if(auth()->user()->role=='Cadet')
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="ibox bg-success color-white widget-stat">
                            <div class="ibox-body">
                                <a href="{{route('puo.list-cmaterial')}}">
                                    <h2 class="m-b-5 font-strong">{{count($cmaterial)}}</h2>
                                    <div class="m-b-6">Course Materials</div><i class="ti-file widget-stat-icon"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="ibox bg-info color-white widget-stat">
                            <div class="ibox-body">
                                <a href="{{route('puo.list-notice')}}">
                                    <h2 class="m-b-5 font-strong">{{count($notice)}}</h2>
                                    <div class="m-b-6">Notice Information</div><i class="ti-clipboard widget-stat-icon"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="ibox bg-danger color-white widget-stat">
                            <div class="ibox-body">
                                <a href="{{route('cdt.list-leave-cadet',auth()->user()->id)}}">
                                    <h2 class="m-b-5 font-strong">{{count($leave)}}</h2>
                                    <div class="m-b-6">Leave Applications</div><i class="fa fa-sign-out widget-stat-icon"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="ibox bg-warning color-white widget-stat">
                            <div class="ibox-body">
                                <a href="{{route('puo.list-req-own',auth()->user()->id)}}">
                                    <h2 class="m-b-5 font-strong">{{count($req)}}</h2>
                                    <div class="m-b-6">Requistion Applications</div><i class="fa fa-check widget-stat-icon"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
@stop