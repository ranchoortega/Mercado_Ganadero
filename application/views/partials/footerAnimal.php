</div>
</div>
<nav aria-label="Page navigation example" style="display: flex;	justify-content: space-evenly;">
  <ul class="pagination justify-content-center" id="pagesNav">

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
<footer id="footer" style="
  margin-left: 0px;">
  <!-- top footer -->
  <div class="section">
    <!-- container -->
    <div class="container">
      <!-- row -->
      <div class="row">
        <div class="col-md-3 col-xs-6">
          <div class="footer">
            <h3 class="footer-title">DESARROLLADORA</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
              ut.</p>
            <ul class="footer-links">
              <li><a href="#"><i class="fa fa-map-marker"></i>1734 Stonecoal Road</a></li>
              <li><a href="#"><i class="fa fa-phone"></i>+021-95-51-84</a></li>
              <li><a href="#"><i class="fa fa-envelope-o"></i>email@email.com</a></li>
            </ul>
          </div>
        </div>

        <div class="col-md-3 col-xs-6">
          <div class="footer">
            <h3 class="footer-title">Service</h3>
            <ul class="footer-links">
              <li><a href="#">My Account</a></li>
              <li><a href="#">View Cart</a></li>
              <li><a href="#">Wishlist</a></li>
              <li><a href="#">Track My Order</a></li>
              <li><a href="#">Help</a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  <!-- /top footer -->

  <!-- bottom footer -->
  <div id="bottom-footer" class="section">
    <div class="container">
      <!-- row -->
      <div class="row">
        <div class="col-md-12 text-center">
          <span class="copyright">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;
            <script>document.write(new Date().getFullYear());</script> All rights reserved | This template
            is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com"
              target="_blank">Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </span>
        </div>
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  
  <!-- /bottom footer -->
</footer>
<script>
  var base_url = "<?php echo base_url(); ?>";
  const urlServer = 'http://localhost/backend_granja/api/';

</script>
<?php foreach ($estilosjs as $estilo): ?>
  <script src="<?php echo base_url() . $estilo; ?>"></script>
<?php endforeach ?>

</body>

</html>