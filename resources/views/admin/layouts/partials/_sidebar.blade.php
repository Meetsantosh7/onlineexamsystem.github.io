<div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-menu hidden-xs"></i><i class="ti-close visible-xs"></i></span> <span class="hide-menu">Navigation</span></h3> </div>
                <ul class="nav" id="side-menu">
                    <li class="user-pro">
                        <a href="#" class="waves-effect"><img src="{{asset(STATIC_DIR.'backend/plugins/images/users/varun.jpg')}}" alt="user-img" class="img-circle"> <span class="hide-menu"> {{Auth::user()->name}}<span class="fa arrow"></span></span>
                        </a>
                        <ul class="nav nav-second-level collapse" aria-expanded="false" style="height: 0px;">
                            <li><a href="javascript:void(0)"><i class="ti-user"></i> <span class="hide-menu">My Profile</span></a></li>
                            <li><a href="javascript:void(0)"><i class="ti-wallet"></i> <span class="hide-menu">My Balance</span></a></li>
                            <li><a href="javascript:void(0)"><i class="ti-email"></i> <span class="hide-menu">Inbox</span></a></li>
                            <li><a href="javascript:void(0)"><i class="ti-settings"></i> <span class="hide-menu">Account Setting</span></a></li>
                            <li><a href="javascript:void(0)"><i class="fa fa-power-off"></i> <span class="hide-menu">Logout</span></a></li>
                        </ul>
                    </li>
            
                        <ul class="nav nav-second-level">
                            @can('isAdmin')
                            <li> <a href="{{ route('admin/schedule_exam')}}"><i  class="mdi mdi-calendar-clock"></i><span class="hide-menu"> Schedule Exam</span></a>
                                
                            </li>
                            @endcan
                            @can('isAdmin')
                            <li> <a href="{{ route('admin/question_management')}}"><i class="mdi mdi-file-word"></i><span class="hide-menu"> Question Management</span></a> </li>
                            @endcan

                            @can('isAdmin')
                            <li> <a href="{{ route('admin/question_module')}}"><i class="mdi mdi-plus-box"></i><span class="hide-menu"> Question Module</span></a> </li>
                            @endcan

                            @can('isAdmin')
                            <li> <a href="{{ route('admin/user_management')}}"><i class="mdi mdi-account-multiple"></i><span class="hide-menu"> Teacher Management</span></a> </li>
                            @endcan
                          
                            
                           
                                   
                                </ul>
                            </li>
                            
                        </li>

                        </ul>

                       

                    
                </ul>
            </div>
        </div>