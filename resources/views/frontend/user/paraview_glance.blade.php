<script src="{{ URL::asset('dist/itk/WebWorkers/ImageIO.worker.js') }}"></script>

 <script src="{{ URL::asset('dist/version.js') }}"></script> 
<script src="{{ URL::asset('dist/runtime.js') }}"></script>
<script src="{{ URL::asset('dist/vendors.js') }}"></script> 
<script src="{{ URL::asset('dist/glance.js') }}"></script>
<script src="{{ URL::asset('dist/glance-external-ITKReader.js') }}"></script>
<script src="{{ URL::asset('dist/glance-external-Workbox.js') }}"></script>

<div id="root-container"></div>
<script type="text/javascript">
  const container = document.querySelector('#root-container');
  const glanceInstance = Glance.createViewer(container);
  glanceInstance.processURLArgs();
</script>

