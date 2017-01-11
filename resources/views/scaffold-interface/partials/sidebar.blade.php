
			<aside class="main-sidebar">
				<!-- sidebar: style can be found in sidebar.less -->
				<section class="sidebar">
					<!-- search form -->
					<form action="#" method="get" class="sidebar-form">
						<div class="input-group">
							<input type="text" name="q" class="form-control" placeholder="Search...">
							<span class="input-group-btn">
								<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
								</button>
							</span>
						</div>
					</form>
					<!-- /.search form -->
					<!-- sidebar menu: : style can be found in sidebar.less -->
					<ul class="sidebar-menu">
						<li class="header">MAIN NAVIGATION</li>
						<li class="active treeview">
							<a href="{{url('dashboard')}}">
								<i class="fa fa-dashboard"></i> <span>Analytics</span></i>
							</a>
						</li>
						{{--@if(Auth::user()->hasRole('KTA Admin'))--}}

						{{--<li class="header">KTA Administrator</li>--}}
						{{--<li class="treeview"><a href="{{url('/transporter')}}"><i class="fa fa-users"></i> <span>Transporters</span></a></li>--}}
						{{--<li class="treeview"><a href="{{url('/driver')}}"><i class="fa fa-users"></i> <span>Drivers</span></a></li>--}}
						{{--@endif--}}
						{{--@if(Auth::user()->hasRole('School Admin'))--}}

						{{--<li class="header">School Administrator</li>--}}
						{{--<li class="treeview"><a href="{{url('/course')}}"><i class="fa fa-users"></i> <span>Courses</span></a></li>--}}
						{{--<li class="treeview"><a href="{{url('/student')}}"><i class="fa fa-users"></i> <span>Students</span></a></li>--}}
						{{--@endif--}}
						{{--@if(Auth::user()->hasRole('Super Admin'))--}}

						{{--<li class="header">Super Administrator</li>--}}
						{{--<li class="treeview"><a href="{{url('/users')}}"><i class="fa fa-users"></i> <span>Users</span></a></li>--}}
						{{--<li class="treeview"><a href="{{url('/roles')}}"><i class="fa fa-user-plus"></i> <span>Role</span></a></li>--}}
						{{--<li class="treeview"><a href="{{url('/permissions')}}"><i class="fa fa-key"></i> <span>Permissions</span></a></li>--}}
					    {{--@endif--}}
					</ul>
				</section>
				<!-- /.sidebar -->
			</aside>