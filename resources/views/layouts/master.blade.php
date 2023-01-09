<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>@yield('title')</title>

	<link rel="stylesheet" href="{{ asset('vendor/adminlte3/plugins/fontawesome-free/css/all.min.css') }}">
	<link rel="stylesheet" href="{{ asset('vendor/adminlte3/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
	<link rel="stylesheet" href="{{ asset('vendor/adminlte3/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
	<link rel="stylesheet" href="{{ asset('vendor/adminlte3/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

	<!-- Ionicons -->
	<link rel="stylesheet" href="{{ asset('vendor/adminlte3/plugins/ionicons/css/ionicons.min.css') }}">
	<!-- Select2 -->
	<link rel="stylesheet" href="{{ asset('vendor/adminlte3/plugins/select2/css/select2.min.css') }}">
	<link rel="stylesheet" href="{{ asset('vendor/adminlte3/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
	<!-- Sweetalert2 -->
	<link rel="stylesheet" href="{{ asset('vendor/adminlte3/plugins/sweetalert2/sweetalert2.min.css') }}">
	<!-- Toastr -->
	<link rel="stylesheet" href="{{ asset('vendor/adminlte3/plugins/toastr/toastr.min.css') }}">
	<!-- Theme style -->
	<link rel="stylesheet" href="{{ asset('vendor/adminlte3/dist/css/adminlte.min.css') }}">

	<style>
		.nav-item .nav-link p{
			font-size: 14px;
		}
		body {
			font-size: 13px;
		}
		input[type=text] {
			font-size: 13px;
		}
		input[type=number] {
			font-size: 13px;
		}
		textarea, textarea.form-control {
			font-size: 13px;
		}
		select {
			font-size: 13px;
		}

		.select2-selection, .select2-selection__arrow {
			/* height: 38px !important; */
			/* height: calc(2.25rem + 2px); */
			border-color: #ced4da !important;
		}
	</style>

	@stack('css')

</head>
<body class="hold-transition sidebar-mini layout-fixed">
	<div class="wrapper">
	<!-- Content Wrapper. Contains page content -->
		<!-- Main content -->
		<div class="content">
			<div class="container">
				@yield('content')
			</div>
		</div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('vendor/adminlte3/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('vendor/adminlte3/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- DataTables -->
<script src="{{ asset('vendor/adminlte3/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/adminlte3/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('vendor/adminlte3/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('vendor/adminlte3/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('vendor/adminlte3/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('vendor/adminlte3/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<!-- Select2 -->
<script src="{{ asset('vendor/adminlte3/plugins/select2/js/select2.full.min.js') }}"></script>
<!-- Sweetalert2 -->
<script src="{{ asset('vendor/adminlte3/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
<script src="{{ asset('vendor/adminlte3/plugins/toastr/toastr.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('vendor/adminlte3/dist/js/adminlte.min.js') }}"></script>
<script src="{{ asset('js/style.js') }}"></script>
<script>
	// untuk sweetalert
	// message : untuk pesan toast/alert yang akan ditampilkan
	// alert_type : untuk type alert yang ditampilkan {info, success, warning, error}, 
	// dengan defaultnya adalah "success"
	
	@if(Session::get('message'))
		@if (Session::get("alert_type") == 'success')
			toastr.success('{{ Session::get("message") }}', 'Success')
		@endif
		
		@if (Session::get("alert_type") == 'info')
			toastr.info('{{ Session::get("message") }}', 'Info')
		@endif

		@if (Session::get("alert_type") == 'warning')
			toastr.warning('{{ Session::get("message") }}', 'Warning')
		@endif

		@if (Session::get("alert_type") == 'error')
			toastr.error('{{ Session::get("message") }}', 'Error')
		@endif
	@endif
</script>

@stack('js')

<script>
</script>
</body>
</html>
