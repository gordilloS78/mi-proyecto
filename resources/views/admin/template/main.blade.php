<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('title','default') | Panel de Administración </title>
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
		
	
</head>
<body>
	@include('admin.template.partions.nav')
	<section class = "col-md-4">
		
		 @yield('content')
	</section>
	<script src="{{ asset('plugins/jquery/js/jquery-3.3.1.js') }}"></script>
	<script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>

</body>
</html>