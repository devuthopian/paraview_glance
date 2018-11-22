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
		  const container         = document.querySelector('#root-container');
		  const glanceInstance    = Glance.createViewer(container);
		  glanceInstance.processURLArgs();
		  
		</script>
	</body>
</html>