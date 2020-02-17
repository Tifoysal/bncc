<!-- START HEADER-->
        <header class="header">
            <div class="page-brand">
                <a class="link" href="{{route('puo.dashboard')}}">
                    <span class="brand">CMS
                        <span class="brand-tip">IBP</span>
                    </span>
                    <span class="brand-mini">IB</span>
                </a>
            </div>
            <div class="flexbox flex-1">
                <!-- START TOP-LEFT TOOLBAR-->
                <ul class="nav navbar-toolbar">
                    <li>
                        <a class="nav-link sidebar-toggler js-sidebar-toggler"><i class="ti-menu"></i></a>
                    </li>                    
                </ul>
                <h4>Cadet Management System for IUBAT BNCC Platoon</h4>
                <!-- END TOP-LEFT TOOLBAR-->
                <!-- START TOP-RIGHT TOOLBAR-->
                <ul class="nav navbar-toolbar">
                    
<!-- NOTIFICATION STARTS FROM HERE

                    <li class="dropdown dropdown-notification">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell-o rel"><span class="notify-signal"></span></i></a>
                        <ul class="dropdown-menu dropdown-menu-right dropdown-menu-media">
                            <li class="dropdown-menu-header">
                                <div>
                                    <span><strong>5 New</strong> Notifications</span>
                                    <a class="pull-right" href="javascript:;">view all</a>
                                </div>
                            </li>
                            <li class="list-group list-group-divider scroller" data-height="240px" data-color="#71808f">
                                <div>
                                    <a class="list-group-item">
                                        <div class="media">
                                            <div class="media-img">
                                                <span class="badge badge-success badge-big"><i class="fa fa-check"></i></span>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-13">4 task compiled</div><small class="text-muted">22 mins</small></div>
                                        </div>
                                    </a>
                                    <a class="list-group-item">
                                        <div class="media">
                                            <div class="media-img">
                                                <span class="badge badge-default badge-big"><i class="fa fa-shopping-basket"></i></span>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-13">You have 12 new orders</div><small class="text-muted">40 mins</small></div>
                                        </div>
                                    </a>
                                    <a class="list-group-item">
                                        <div class="media">
                                            <div class="media-img">
                                                <span class="badge badge-danger badge-big"><i class="fa fa-bolt"></i></span>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-13">Server #7 rebooted</div><small class="text-muted">2 hrs</small></div>
                                        </div>
                                    </a>
                                    <a class="list-group-item">
                                        <div class="media">
                                            <div class="media-img">
                                                <span class="badge badge-success badge-big"><i class="fa fa-user"></i></span>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-13">New user registered</div><small class="text-muted">2 hrs</small></div>
                                        </div>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
-->
                    <li class="dropdown dropdown-user">
                        <a class="nav-link dropdown-toggle link" data-toggle="dropdown">
                            <img src="{{asset('/')}}backend/user/img/admin-avatar.png" />
                            <span></span>{{auth()->user()->name}}<i class="fa fa-angle-down m-l-5"></i></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            @if(auth()->user()->role=='PUO')
                                <a class="dropdown-item" href="{{route('puo.update-view-puo',auth()->user()->id)}}"><i class="fa fa-user"></i>Profile</a>
                            @endif
                            @if(auth()->user()->role=='QMaster')
                                <a class="dropdown-item" href="{{route('puo.view-single-qmaster',auth()->user()->id)}}"><i class="fa fa-user"></i>Profile</a>
                                <li class="dropdown-divider"></li>
                                <a class="dropdown-item" href="{{route('puo.update-qmaster-password',auth()->user()->id)}}"><i class="fa fa-key"></i>Update Password</a>
                            @endif
                            @if(auth()->user()->role=='Cadet')
                                <a class="dropdown-item" href="{{route('puo.update-view-cadet-own-info',auth()->user()->id)}}"><i class="fa fa-user"></i>Profile</a>
                            <li class="dropdown-divider"></li>
                                <a class="dropdown-item" href="{{route('puo.update-cadet-password',auth()->user()->id)}}"><i class="fa fa-key"></i>Update Password</a>
                            @endif
<!--
                            <a class="dropdown-item" href="profile.html"><i class="fa fa-cog"></i>Settings</a>
                            <a class="dropdown-item" href="javascript:;"><i class="fa fa-support"></i>Support</a>
-->
                            <li class="dropdown-divider"></li>
                            <a class="dropdown-item" href="{{route('logout')}}"><i class="fa fa-power-off"></i>Logout</a>
                        </ul>
                    </li>
                </ul>
                <!-- END TOP-RIGHT TOOLBAR-->
            </div>
        </header>
        <!-- END HEADER-->

