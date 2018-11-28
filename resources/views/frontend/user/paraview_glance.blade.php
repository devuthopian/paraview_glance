<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title', app_name())</title>

        <!-- Meta -->
        <meta name="description" content="@yield('meta_description', 'Laravel AdminPanel')">
        <meta name="author" content="@yield('meta_author', 'Viral Solani')">

		<script src="{{ URL::asset('dist/itk/WebWorkers/ImageIO.worker.js') }}"></script>
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script src="{{ URL::asset('dist/version.js') }}"></script> 
		<script src="{{ URL::asset('dist/runtime.js') }}"></script>
		<script src="{{ URL::asset('dist/vendors.js') }}"></script> 
		<script src="{{ URL::asset('dist/glance.js') }}"></script>
		<script src="{{ URL::asset('dist/glance-external-ITKReader.js') }}"></script>
		<script src="{{ URL::asset('dist/glance-external-Workbox.js') }}"></script>

	</head>
	<body>
		<div id="root-container"></div>
		<script type="text/javascript">		

			    var glance_card_title = "<?php echo  $records['glance_card_title'] ?> ";
			    var glance_card_disc = "<?php echo  $records['glance_card_disc'] ?> ";
			    var glance_open_file_text = "<?php echo  $records['glance_open_file_text'] ?> ";
			    var glance_open_file_disc = "<?php echo  $records['glance_open_file_disc'] ?> ";
			    var glance_save_state_text = "<?php echo  $records['glance_save_state_text'] ?> ";
			    var glance_screenshot_text = "<?php echo  $records['glance_screenshot_text'] ?> ";
			    var glance_sidebar_position = "<?php echo  $records['glance_sidebar_position'] ?> ";

                      </script>



		<script type="text/javascript">
		  const container         = document.querySelector('#root-container');
		  const glanceInstance    = Glance.createViewer(container);
		  glanceInstance.processURLArgs();
		</script>
	</body>
</html>