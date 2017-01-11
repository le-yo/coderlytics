
			<header class="main-header">
            				<!-- Logo -->
            				<a href="{{url('home')}}" class="logo">
            					<!-- mini logo for sidebar mini 50x50 pixels -->
            					<span class="logo-mini"><b>S</b>IN</span>
            					<!-- logo for regular state and mobile devices -->
            					{{--@if(Auth::user()->hasAnyRole(\Spatie\Permission\Models\Role::all()))--}}
            					{{--<span class="logo-lg"><b>{{Auth::user()->roles->first()->name}}</b></span>--}}
            					{{--<span class="logo-lg"><b>user</b></span>--}}
            					{{--@else--}}
            					<span class="logo-lg"><b>Welcome</b></span>
            					{{--@endif--}}
            				</a>
            				<!-- Header Navbar: style can be found in header.less -->
            				<nav class="navbar navbar-static-top">
            					<!-- Sidebar toggle button-->
            					<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            						<span class="sr-only">Toggle navigation</span>
            					</a>
            					<div class="navbar-custom-menu">
            						<ul class="nav navbar-nav">
            							<!-- Notification Navbar List-->
            							<li class="dropdown notifications-menu">
            								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
            									<i class="fa fa-bell-o"></i>
            									<span class="label notification-label">new</span>
            								</a>
            								<ul class="dropdown-menu">
            									<li class="header">Your notifications</li>
            									<li>
            										<!-- inner menu: contains the actual data -->
            										<ul class="menu notification-menu">
            										</ul>
            									</li>
            									<li class="footer"><a href="#">View all</a></li>
            								</ul>
            							</li>
            							<!-- END notification navbar list-->
            							<li class="dropdown user user-menu">
            								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
            									<img src="http://ahloman.net/wp-content/uploads/2013/06/user.jpg" class="user-image" alt="User Image">
            									{{--<span class="hidden-xs">{{Auth::user()->name}}</span>--}}
            								</a>
            								<ul class="dropdown-menu">
            									<!-- User image -->
            									<li class="user-header">
            										<img src="http://ahloman.net/wp-content/uploads/2013/06/user.jpg" class="img-circle" alt="User Image">
            										<p>
            											{{--{{Auth::user()->name}}--}}
            										</p>
            									</li>
            									<!-- Menu Footer-->
            									<li class="user-footer">
            										<div class="pull-right">
            											<a href="{{url('logout')}}" class="btn btn-default btn-flat"
            												onclick="event.preventDefault();
            											document.getElementById('logout-form').submit();">Sign out</a>
            											<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
            												{{ csrf_field() }}
            											</form>
            										</div>
            									</li>
            								</ul>
            							</li>
            						</ul>
            					</div>
            				</nav>
            			</header>