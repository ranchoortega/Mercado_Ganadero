</div>
</div>

<div id="newsletter" class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-md-12">
				<div class="newsletter">


					<ul class="newsletter-follow">
						<li>
							<a href="https://www.facebook.com/profile.php?id=100065143817287"><i
									class="fa fa-facebook"></i></a>
						</li>
						<li>
							<a href="#"><i class="fab fa-instagram"></i></a>
						</li>
						<li>
							<a href="#"><i class="fab fa-tiktok"></i></a>


						</li>
						<li>
							<a href="https://m.me/inescortes398?text=Hola,%20quiero%20más%20información."><i
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
<div style="width: 100%; height: auto; display: flex; justify-content: center;">
    <img src="https://www.suganado.com/wp-content/uploads/2020/06/suganado_01.png" alt="" style="max-width: 100%; height: auto; object-fit: cover;">
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
						<h3 class="footer-title">DESARROLLADORA  ORBITEC</h3>
						<p>Soluciones para tu mundo cercano</p>
						<ul class="footer-links" style="text-align: left">
						
							<li><a href="#"><i class="fa fa-phone"></i>+52-221-435-08-30</a></li>
							<li><a href="#"><i class="fa fa-envelope-o"></i>jonathanalexanderramirezortega@email.com</a></li>
							<li><a href="<?php echo base_url('Leyes/Terminos/terminos'); ?>">Términos de Uso</a></li>
							<li><a href="<?php echo base_url('Leyes/Terminos/politica'); ?>">Política de Privacidad</a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-3 col-xs-6">
					<div class="footer" >
						<h3 class="footer-title">SERVICIOS</h3>
						<ul class="footer-links" style="text-align: left">
							<li><a href="#">APP WEB</a></li>
							<li><a href="#">APP ANDORID</a></li>
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
	const urlServer = 'http://localhost/backen_granja/api/';

</script>
<?php foreach ($estilosjs as $estilo): ?>
	<script src="<?php echo base_url() . $estilo; ?>"></script>
<?php endforeach ?>

</body>

</html>