<!DOCTYPE html>
<html lang="en">
  <head>
@include('Meta.css_meta')
  </head>

<body class="layout-top-nav dark-skin theme-primary">
	
<div class="wrapper">
  {{-- <div id="loader"></div> --}}
	
@include('aside')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	 @yield('dashboard')
  </div>
  <!-- /.content-wrapper -->
@include('footer')

  <!-- Control Sidebar -->
 
  <!-- /.control-sidebar -->
  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
  
</div>
<!-- ./wrapper -->
	
	<!-- ./side demo panel -->
	
	<!-- Sidebar -->
		
	
	
	<!-- Page Content overlay -->
	
@include('Meta.meta_js')
	
</body>
</html>
