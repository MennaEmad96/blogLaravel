<!DOCTYPE html>
<html lang="en">
<head>
	@include('admin.includes.head')
    <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <!-- Datatables -->
    <link href="{{ asset('assets/admin/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }}" rel="stylesheet">
</head>

<body class="nav-md">
	<div class="container body">
		<div class="main_container">
			<div class="col-md-3 left_col">
				@include('admin.includes.sideBar')
			</div>

			<!-- top navigation -->
			<div class="top_nav">
                @include('admin.includes.topNav')
			</div>
			<!-- /top navigation -->

			<!-- page content -->
			<div class="right_col" role="main">
				<div class="">
				<div class="page-title">
					@include('admin.includes.search')
				</div>
				<div class="clearfix"></div>
				<div class="row">
					<div class="col-md-12 col-sm-12 ">
					<div class="x_panel">
						@yield('content')
					</div>
					</div>
				</div>
				</div>
			</div>
			<!-- /page content -->

			<!-- footer content -->
			<footer>
				@include('admin.includes.contentFooter')
			</footer>
			<!-- /footer content -->
		</div>
	</div>
    
    <!-- assets -->
	@include('admin.includes.assets')
    <!-- Datatables -->
    <script src="{{ asset('assets/admin/vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/datatables.net-scroller/js/dataTables.scroller.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/jszip/dist/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendors/pdfmake/build/vfs_fonts.js') }}"></script>

	@include('sweetalert::alert')

</body>
</html>
