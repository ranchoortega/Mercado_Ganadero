<div class="page-body">

	<nav id="navigation">
		<!-- container -->
		<div class="container viewCliente" >
			<!-- responsive-nav -->
			<div id="responsive-nav">
				<!-- NAV -->
				<ul class="main-nav nav navbar-nav">
				<li><a href="<?php echo base_url() ?>Welcome">Inicio</a></li>
					<li><a href="<?php echo base_url() ?>Cliente/Provedores">Provedores</a></li>
					<li><a href="#">Nosotros</a></li>



				</ul>
				<!-- /NAV -->
			</div>
			<!-- /responsive-nav -->
		</div>
		<!-- /container -->
	</nav>
	<!-- /NAVIGATION -->

	<!-- BREADCRUMB -->
	<div id="breadcrumb" class="section" style=" padding-top: 88px;  /* position: absolute; */ /* top: 100px; */">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-12">

					<ul class="breadcrumb-tree">
						<li><a href="<?php echo base_url() ?>Welcome">Inicio</a></li>
						<li class="active">Contacto</li>
					</ul>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /BREADCRUMB -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">

				<div class="col-md-7">
					<!-- Billing Details -->
					<div class="billing-details">
						<div class="section-title">
							<h3 class="title">Contáctanos</h3>
						</div>
						<div class="form-group">
							<input class="input" type="text" name="first-name" placeholder="Nombre">
						</div>

						<div class="form-group">
							<input class="input" type="email" name="email" placeholder="Email">
						</div>


						<div class="form-group">
							<input class="input" type="tel" name="tel" placeholder="Teléfono">
						</div>
						<div class="form-group order-notes">
							<textarea class="input" placeholder="Comentario"></textarea>
						</div>
						<div class="form-group">
							<a href="#" class="primary-btn order-submit">Enviar</a>
						</div>

					</div>
					<!-- /Billing Details -->



				</div>

				<!-- Order Details -->
				<div class="col-md-5 order-details">
					<div class="section-title text-center">
						<h3 class="title">Ubicación </h3>
					</div>
					<div class="order-summary">
					<iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d945.8556197270532!2d-98.6135523305064!3d18.50980097064036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cefb5f42ad5a47%3A0x19b5f80403ae4aa3!2sRancho%20Ortega!5e0!3m2!1ses!2smx!4v1722860485979!5m2!1ses!2smx"
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
						
						
					</div>
					<div class="payment-method">
						<div class="input-radio">
							<input type="radio" name="payment" id="payment-1">
							<label for="payment-1">
								<span></span>
								Numero telefonico
							</label>
							<div class="caption">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
									incididunt ut labore et dolore magna aliqua.</p>
							</div>
						</div>
						<div class="input-radio">
							<input type="radio" name="payment" id="payment-2">
							<label for="payment-2">
								<span></span>
								Referencia de la ubicacion.
							</label>
							<div class="caption">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
									incididunt ut labore et dolore magna aliqua.</p>
							</div>
						</div>
						<div class="input-radio">
							<input type="radio" name="payment" id="payment-3">
							<label for="payment-3">
								<span></span>
								Horarios
							</label>
							<div class="caption">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
									incididunt ut labore et dolore magna aliqua.</p>
							</div>
						</div>
					</div>
					
					
				</div>
				<!-- /Order Details -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	

</div>