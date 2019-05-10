<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Binh Duong University Dashboard</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

	<link rel="icon" href="{{ asset('public/upload/imgFavicon/'.$infoGet['cnttInfoFavicon']) }}" type="image/x-icon" />
	<link rel="stylesheet" href="{{ asset('public/assets/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="{{ asset('public/assets/bower_components/font-awesome/css/font-awesome.min.css') }}">
	<!-- Ionicons -->
	<link rel="stylesheet" href="{{ asset('public/assets/bower_components/Ionicons/css/ionicons.min.css') }}">
	<!-- Theme style -->
	<link rel="stylesheet" href="{{ asset('public/assets/dist/css/AdminLTE.min.css') }}">
	<link rel="stylesheet" href="{{ asset('public/assets/dist/css/skins/skin-blue.min.css') }}">

	<!-- Google Font -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
	@yield('cssExtend')

</head>

<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">

		<!-- Main Header -->
		<header class="main-header">
		
			<!-- Logo -->
			<a href="#" class="logo">
			<!-- mini logo for sidebar mini 50x50 pixels -->
			<span class="logo-mini"><b>BDU</b></span>
			<!-- logo for regular state and mobile devices -->
			{{--<span class="logo-lg"><b>BDU</b>Uni</span> --}}
			<img src="{{asset('public/upload/imgLogo/'.$infoGet['cnttInfoLogo01'])}}" class="user-image" alt="Logo" style="width: 150px;">

			</a>
		
			<!-- Header Navbar -->
			<nav class="navbar navbar-static-top" role="navigation">
			<!-- Sidebar toggle button-->
			<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
				<span class="sr-only">Toggle navigation</span>
			</a>
			<!-- Navbar Right Menu -->
			<div class="navbar-custom-menu">
				<ul class="nav navbar-nav">	
					<li>
						<a href="{{ route('client.page_home') }}" target="blank">
						<i class="fa fa-globe" aria-hidden="true"></i>
						<span class="hidden-xs">Xem Website</span>
						</a>
					</li>		
					<!-- User Account Menu -->
					<li class="dropdown user user-menu">
						<!-- Menu Toggle Button -->
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<!-- The user image in the navbar-->
						<img src=" {{ asset('public/upload/imgUserAvatar/'. Auth::user()->cnttUserImage) }} " class="user-image" alt="User Image">
						<!-- hidden-xs hides the username on small devices so only the image appears. -->
						<span class="hidden-xs">{{ Auth::user()->cnttUserFirstName .' '. Auth::user()->cnttUserLastName }}</span>
						</a>
						<ul class="dropdown-menu">
						<!-- The user image in the menu -->
						<li class="user-header">
							<img src="{{ asset('public/upload/imgUserAvatar/'. Auth::user()->cnttUserImage) }}" class="img-circle" alt="User Image">
			
							<p>
							{{ Auth::user()->cnttUserFirstName .' '. Auth::user()->cnttUserLastName }}
							<small>Member since {{ Auth::user()->created_at }}</small>
							</p>
						</li>
						<!-- Menu Footer-->
						<li class="user-footer">
							<div class="pull-left">
							<a href="{{route('admin.user.edit',['id' => Auth::id() ]) }}" class="btn btn-default btn-flat">Profile</a>
							</div>
							<div class="pull-right">
							<a href="{{route('admin.logout.process')}}" class="btn btn-default btn-flat">Sign out</a>
							</div>
						</li>
						</ul>
					</li>
				</ul>
			</div>
			</nav>
		</header>
		<!-- Left side column. contains the logo and sidebar -->
		<aside class="main-sidebar">
		
			<!-- sidebar: style can be found in sidebar.less -->
			<section class="sidebar">
		
			<!-- Sidebar user panel (optional) -->
			<div class="user-panel">
				<div class="pull-left image">
					<img src="{{asset('public/upload/imgUserAvatar/'.Auth::user()->cnttUserImage)}}" class="img-circle" alt="User Image" style="width: 75px;height: 50px;">
				</div>
				<div class="pull-left info">
					<p>Chào {{ Auth::user()->cnttUserLastName }}</p>
					{{-- <p>Chào {{$user_data['cnttUserLastName']}}</p> --}}
					<!-- Status -->
					<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
				</div>
			</div>
		
			<!-- Sidebar Menu -->
			<ul class="sidebar-menu" data-widget="tree">
				<li class="header">THANH ĐIỀU HƯỚNG</li>
				<!-- Optionally, you can add icons to the links -->
				<li class="active"><a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i> <span>Tổng Quan</span></a></li>
				<li><a href="{{ route('admin.news.list') }}"><i class="fa fa-pencil"></i> <span>Bài Viết</span></a></li>
				<li><a href="{{ route('admin.cate.list') }}"><i class="fa fa-list"></i> <span>Danh mục</span></a></li>
				<li><a href="{{ route('admin.user.list') }}"><i class="fa fa-user"></i> <span>Người dùng</span></a></li>
				<li><a href="{{ route('admin.contact.list') }}"><i class="fa fa-life-ring"></i> <span>Liên hệ</span></a></li>
				<li class="treeview">
					<a href="#"><i class="fa fa-book"></i> <span>Quản lý</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right"></i>
						</span>
					</a>
				<ul class="treeview-menu">
					<li><a href="{{ route('admin.info.edit',['id' => 1]) }}"><i class="fa fa-circle-o"></i>Website</a></li>
					<li><a href="{{ route('admin.comm.list') }}"><i class="fa fa-circle-o"></i>Mạng xã hội</a></li>
					<li><a href="{{ route('admin.slider.list') }}"><i class="fa fa-circle-o"></i>Slider</a></li>
					<li><a href="{{ route('admin.lecturer.list') }}"><i class="fa fa-circle-o"></i>Giảng viên</a></li>
					<li><a href="{{ route('admin.major.list') }}"><i class="fa fa-circle-o"></i>Đào tạo</a></li>
					<li><a href="{{ route('admin.cooperate.list') }}"><i class="fa fa-circle-o"></i>Liên doanh</a></li>
					<li><a href="#"><i class="fa fa-circle-o"></i>Phản hồi</a></li>
				</ul>
				</li>
			</ul>
			<!-- /.sidebar-menu -->
			</section>
			<!-- /.sidebar -->
		</aside>
	
		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">

			@include('cntt_admin/mod_message/error')
			@include('cntt_admin/mod_message/message') 
			@yield('content')
			
		</div>
		<!-- /.content-wrapper -->

		<!-- Main Footer -->
		<footer class="main-footer">
		<!-- To the right -->
		<div class="pull-right hidden-xs">
		Designed by AdminLTE
		</div>
		<!-- Default to the left -->
		<strong>Copyright &copy; 2019 <a href="https://www.bdu.edu.vn/">Binh Duong University</a>.</strong> All rights reserved.
		</footer>

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Create the tabs -->
			<ul class="nav nav-tabs nav-justified control-sidebar-tabs">
				<li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
				<li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
			</ul>
			<!-- Tab panes -->
			<div class="tab-content">
				<!-- Home tab content -->
				<div class="tab-pane active" id="control-sidebar-home-tab">
					<h3 class="control-sidebar-heading">Recent Activity</h3>
					<ul class="control-sidebar-menu">
					<li>
						<a href="javascript:;">
						<i class="menu-icon fa fa-birthday-cake bg-red"></i>

						<div class="menu-info">
							<h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

							<p>Will be 23 on April 24th</p>
						</div>
						</a>
					</li>
					</ul>
					<!-- /.control-sidebar-menu -->

					<h3 class="control-sidebar-heading">Tasks Progress</h3>
					<ul class="control-sidebar-menu">
					<li>
						<a href="javascript:;">
						<h4 class="control-sidebar-subheading">
							Custom Template Design
							<span class="pull-right-container">
								<span class="label label-danger pull-right">70%</span>
							</span>
						</h4>

						<div class="progress progress-xxs">
							<div class="progress-bar progress-bar-danger" style="width: 70%"></div>
						</div>
						</a>
					</li>
					</ul>
					<!-- /.control-sidebar-menu -->

				</div>
				<!-- /.tab-pane -->
				<!-- Stats tab content -->
				<div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
				<!-- /.tab-pane -->
				<!-- Settings tab content -->
				<div class="tab-pane" id="control-sidebar-settings-tab">
					<form method="post">
					<h3 class="control-sidebar-heading">General Settings</h3>

					<div class="form-group">
						<label class="control-sidebar-subheading">
						Report panel usage
						<input type="checkbox" class="pull-right" checked>
						</label>

						<p>
						Some information about this general settings option
						</p>
					</div>
					<!-- /.form-group -->
					</form>
				</div>
				<!-- /.tab-pane -->
			</div>
		</aside>
		<!-- /.control-sidebar -->
		<!-- Add the sidebar's background. This div must be placed
		immediately after the control sidebar -->
		<div class="control-sidebar-bg"></div>
	</div>
	<!-- ./wrapper -->

	<!-- REQUIRED JS SCRIPTS -->
	<!-- jQuery 3 -->
	<script src="{{ asset('public/assets/bower_components/jquery/dist/jquery.min.js') }}"></script>
	<!-- Bootstrap 3.3.7 -->
	<script src="{{ asset('public/assets/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
	<!-- AdminLTE App -->
	<script src="{{ asset('public/assets/dist/js/adminlte.min.js') }}"></script>
	<!-- More javascript -->
	<script src="{{ asset('public/assets/dist/js/myjs.js') }}"></script>
	@yield('jsExtend')
	
</body>
</html>