<!DOCTYPE html>
<html lang="en">
<head>
@include('scaffold-interface.partials.header')
</head>
	<body class="hold-transition skin-blue sidebar-mini">
		<div class="wrapper">

        @include('scaffold-interface.partials.nav')
        @include('scaffold-interface.partials.sidebar')
			<div class="content-wrapper">
				@yield('content')
			</div>
		</div>
        @include('scaffold-interface.partials.footer')
	</body>
</html>
