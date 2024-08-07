</div>
</div>
<div id="newsletter" class="section">
  <!-- container -->
  <div class="container">
    <!-- row -->

    <!-- /row -->
  </div>
  <!-- /container -->
</div>
<script>
  var base_url = "<?php echo base_url(); ?>";
  const urlServer = 'http://localhost/backend_granja/api/';


</script>
<?php foreach ($estilosjs as $estilo): ?>
  <script src="<?php echo base_url() . $estilo; ?>"></script>
<?php endforeach ?>

</body>

</html>