<!DOCTYPE html>
<html lang="en">
<head>
	@include('admin.includes.head')
	<!-- bootstrap-wysiwyg -->
	<link href="{{ asset('assets/vendors/google-code-prettify/bin/prettify.min.css') }}" rel="stylesheet">
	<!-- Select2 -->
	<link href="{{ asset('assets/vendors/select2/dist/css/select2.min.css') }}" rel="stylesheet">
	<!-- Switchery -->
	<link href="{{ asset('assets/vendors/switchery/dist/switchery.min.css') }}" rel="stylesheet">
	<!-- starrr -->
	<link href="{{ asset('assets/vendors/starrr/dist/starrr.css') }}" rel="stylesheet">
	<!-- bootstrap-daterangepicker -->
	<link href="{{ asset('assets/vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
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
								<div class="x_title">
									@include('admin.includes.secondaryTitle')
								</div>
								<div class="x_content">
									<br />
									@yield('content')
								</div>
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
	<!-- bootstrap-progressbar -->
	<script src="{{ asset('assets/admin/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
	<!-- bootstrap-daterangepicker -->
	<script src="{{ asset('assets/admin/vendors/moment/min/moment.min.js') }}"></script>
	<script src="{{ asset('assets/admin/vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
	<!-- bootstrap-wysiwyg -->
	<script src="{{ asset('assets/admin/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js') }}"></script>
	<script src="{{ asset('assets/admin/vendors/jquery.hotkeys/jquery.hotkeys.js') }}"></script>
	<script src="{{ asset('assets/admin/vendors/google-code-prettify/src/prettify.js') }}"></script>
	<!-- jQuery Tags Input -->
	<script src="{{ asset('assets/admin/vendors/jquery.tagsinput/src/jquery.tagsinput.js') }}"></script>
	<!-- Switchery -->
	<script src="{{ asset('assets/admin/vendors/switchery/dist/switchery.min.js') }}"></script>
	<!-- Select2 -->
	<script src="{{ asset('assets/admin/vendors/select2/dist/js/select2.full.min.js') }}"></script>
	<!-- Parsley -->
	<script src="{{ asset('assets/admin/vendors/parsleyjs/dist/parsley.min.js') }}"></script>
	<!-- Autosize -->
	<script src="{{ asset('assets/admin/vendors/autosize/dist/autosize.min.js') }}"></script>
	<!-- jQuery autocomplete -->
	<script src="{{ asset('assets/admin/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js') }}"></script>
	<!-- starrr -->
	<script src="{{ asset('assets/admin/vendors/starrr/dist/starrr.js') }}"></script>

</body>
</html>
