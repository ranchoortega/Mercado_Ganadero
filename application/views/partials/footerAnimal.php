</div>
</div>
<nav aria-label="Page navigation example" style="display: flex;	justify-content: space-evenly;" >
		<ul class="pagination justify-content-center" id = "pagesNav">
		<li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Antes</a></li>
    <li class="page-item" value="1"><a class="page-link" href="#">1</a></li>
		
			
		</ul>
	</nav>

<div id="newsletter" class="section">
  <!-- container -->
  <div class="container">
    <!-- row -->
    <div class="row">
      <div class="col-md-12">
        <div class="newsletter">


          <ul class="newsletter-follow">
            <li>
              <a href="https://www.facebook.com/profile.php?id=100065143817287"><i class="fa fa-facebook"></i></a>
            </li>
            <li>
              <a href="#"><i class="fab fa-instagram"></i></a>
            </li>
            <li>
              <a href="#"><i class="fab fa-tiktok"></i></a>


            </li>
            <li>
              <a href="https://m.me/alexortega234?text=Hola,%20quiero%20más%20información."><i
                  class="fab fa-facebook-messenger"></i></a>

            </li>
          </ul>
        </div>
      </div>
    </div>
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