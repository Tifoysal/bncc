<!-- START SIDEBAR-->
        <nav class="page-sidebar" id="sidebar">
            <div id="sidebar-collapse">
                <div class="admin-block d-flex">
                    <div>
                        <img src="{{asset('/')}}backend/user/img/admin-avatar.png" width="45px" />
<!--                        <img src="{{asset('/user/puo').'/'.auth()->user()->photo}}"/>-->
                    </div>
                    <div class="admin-info">
                        <div class="font-strong">{{auth()->user()->name}}</div><small>{{auth()->user()->role}}</small></div>
                </div>
                <ul class="side-menu metismenu">
                    <li>
                        <a class="active" href="{{route('puo.dashboard')}}"><i class="sidebar-item-icon fa fa-th-large"></i>
                            <span class="nav-label">Dashboard</span>
                        </a>
                    </li>
                    <li class="heading">MENUS</li>
                    @if(auth()->user()->role=='PUO')
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-user"></i>
                            <span class="nav-label">PUO/Stuff</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="{{route('puo.create-puo')}}">Add New Personnel</a>
                            </li>
                            <li>
                                <a href="{{route('puo.list-puo')}}">Manage Personnel</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-user"></i>
                            <span class="nav-label">Cadet</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="{{route('puo.create-cadet')}}">Add New Cadet</a>
                            </li>
                            <li>
                                <a href="{{route('puo.list-cadet')}}">Manage Cadet</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-user"></i>
                            <span class="nav-label">Quarter Master</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="{{route('puo.create-qmaster')}}">Add New Q. Master</a>
                            </li>
                            <li>
                                <a href="{{route('puo.list-qmaster')}}">Manage Q. Master</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-edit"></i>
                            <span class="nav-label">Attendance</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="{{route('puo.create-cadet-attendance')}}">Add Cadet Attendance</a>
                            </li>
                            <li>
                                <a href="{{route('puo.list-cadet-attendance')}}">Manage Cadet Att</a>
                            </li>
                            <li>
                                <a href="{{route('puo.create-personnel-attendance')}}">Add Stuff/PUO Att</a>
                            </li>
                            <li>
                                <a href="{{route('puo.list-personnel-attendance')}}">Manage Stuff</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-file"></i>
                            <span class="nav-label">Course Materials</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="{{route('puo.create-cmaterial')}}">Add New File</a>
                            </li>
                            <li>
                                <a href="{{route('puo.list-cmaterial')}}">Manage File</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-clipboard"></i>
                            <span class="nav-label">Notice</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="{{route('puo.create-notice')}}">Add New Notice</a>
                            </li>
                            <li>
                                <a href="{{route('puo.list-notice')}}">Manage Notice</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-sign-out"></i>
                            <span class="nav-label">Leave</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="{{route('puo.list-leave')}}">Manage Leave</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-cubes"></i>
                            <span class="nav-label">Store</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="{{route('puo.create-product')}}">Add New Product</a>
                            </li>
                            <li>
                                <a href="{{route('puo.list-product')}}">Manage Product</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-check"></i>
                            <span class="nav-label">Requisition</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">                            
                            <li>
                                <a href="{{route('cdt.create-req')}}">Add New Requisition</a>
                            </li>
                            <li>
                                <a href="{{route('puo.list-req-own',auth()->user()->id)}}">Manage Requisition</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class="sidebar-item-icon fa fa-list"></i>
                            <span class="nav-label">Budget Planning</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">                            
                            <li>
                                <a href="{{route('puo.create-budget')}}">Add New Budget</a>
                            </li>
                            <li>
                                <a href="{{route('puo.list-budget')}}">Manage Budget</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-crosshairs"></i>
                            <span class="nav-label">Recruitment</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">     
                            <li>
                                <a href="{{route('puo.list-settings')}}">Recruitment Settings</a>
                            </li>
                            <li>
                                <a href="{{route('puo.list-application')}}">Manage Recruitment</a>
                            </li>
                        </ul>
                    </li>
                    @endif
                    @if(auth()->user()->role=='QMaster')
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-align-justify"></i>
                            <span class="nav-label">Store</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="{{route('puo.create-product')}}">Add New Product</a>
                            </li>
                            <li>
                                <a href="{{route('puo.list-product')}}">Manage Product</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-check"></i>
                            <span class="nav-label">Requisition</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">                            
                            <li>
                                <a href="{{route('cdt.create-req')}}">Add New Requisition</a>
                            </li>
                            <li>
                                <a href="{{route('puo.list-req')}}">Manage Requisition</a>
                            </li>
                        </ul>
                    </li>   
                    @endif
                    @if(auth()->user()->role=='Cadet')                    
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-file"></i>
                            <span class="nav-label">Course Materials</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="{{route('puo.list-cmaterial')}}">Download File</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-clipboard"></i>
                            <span class="nav-label">Notice</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="{{route('puo.list-notice')}}">View Notice</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-sign-out"></i>
                            <span class="nav-label">Leave</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="{{route('cdt.create-leave')}}">Add New Leave</a>
                            </li>
                            <li>
                                <a href="{{route('cdt.list-leave-cadet',auth()->user()->id)}}">Manage Leave</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-check"></i>
                            <span class="nav-label">Requisition</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">                            
                            <li>
                                <a href="{{route('cdt.create-req')}}">Add New Requisition</a>
                            </li>
                            <li>
                                <a href="{{route('puo.list-req-own',auth()->user()->id)}}">Manage Requisition</a>
                            </li>
                        </ul>
                    </li>   
                    @endif
                </ul>
            </div>
        </nav>
        <!-- END SIDEBAR-->