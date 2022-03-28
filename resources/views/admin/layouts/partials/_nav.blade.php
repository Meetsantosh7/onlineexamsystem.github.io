<nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="top-left-part">
                    <!-- Logo -->
                    {{-- <a class="logo" href="{{route('admin')}}">
                        <img src="{{asset(STATIC_DIR.'backend/plugins/images/cracksee.png')}}" width="20%">
                    </a> --}}
                </div>
                
                <ul class="nav navbar-top-links navbar-right pull-right">
                    
                    <li class="dropdown">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="{{asset(STATIC_DIR.'backend/plugins/images/users/varun.jpg')}}" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">{{Auth::user()->name}}</b><span class="caret"></span> </a>
                        <ul class="dropdown-menu dropdown-user animated flipInY">
                            <li>
                                <div class="dw-user-box">
                                    <div class="u-img"><img src="{{asset(STATIC_DIR.'backend/plugins/images/users/varun.jpg')}}" alt="user" /></div>
                                    <div class="u-text">
                                        <h4>{{Auth::user()->name}}</h4>
                                        <p class="text-muted">{{Auth::user()->email}}</p><a href="#" class="btn btn-rounded btn-danger btn-sm">View Profile</a></div>
                                </div>
                            </li>
                            <li role="separator" class="divider"></li>
                            
                            <li class="text-center">
                                <form action="{{route('logout')}}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-primary btn-outline text-center"> <i class="fa fa-power-off"></i> Logout</button>
                                    
                                </form></li>
                        <!-- /.dropdown-user -->
                                
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                    <!-- /.dropdown -->
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>