<div class="page-body">

	<nav id="navigation">
		<!-- container -->
		<div class="container viewCliente">
			<!-- responsive-nav -->
			<div id="responsive-nav">
				<!-- NAV -->
				<ul class="main-nav nav navbar-nav">
					<li class="active"><a href="#">Inicio</a></li>
					<li><a href="<?php echo base_url() ?>Cliente/Contacto">Contacto</a></li>
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
	<div id="breadcrumb" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-12">

					<ul class="breadcrumb-tree">
						<li><a href="<?php echo base_url() ?>Welcome">Inicio</a></li>
						<li class="active">Provedores</li>
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

				<div class="col-md-6 order-details">
					<!-- Billing Details -->
					<div class="billing-details">
						<div class="section-title">
							<h3 class="title">Contáctanos</h3>
						</div>
						<div class="input-group flex-nowrap form-group">

							<span class="input-group-text bx bxs-user bx-sm" id="addon-wrapping"></span>
							<input type="number" class="input" placeholder="Teléfono" 
								aria-describedby="addon-wrapping">
						</div>
						<div class="input-group flex-nowrap form-group">

							<span class="input-group-text bx bxs-phone-call bx-sm" id="addon-wrapping"></span>
							<input type="number" class="input" placeholder="Teléfono" 
								aria-describedby="addon-wrapping">
						</div>
						
						<div class="input-group flex-nowrap form-group">

							<span class="input-group-text bx bx-current-location bx-sm" id="addon-wrapping"></span>
							<input type="number" class="input" placeholder="Ubicacion"
								aria-describedby="addon-wrapping">
						</div>



					</div>
					<!-- /Billing Details -->



				</div>

				<!-- Order Details -->
				<div class="col-md-6 order-details">
					<div class="billing-details">
						<div class="section-title">
							<h3 class="title">Informacion del animal</h3>
						</div>


						<div class="form-group">
							<input class="input" type="text" name="first-name" placeholder="Raza">
						</div>
						<div class="form-group">
							<input class="input" type="text" name="first-name" placeholder="Edad del Animal">
						</div>

						<div class="form-group">
							<select class="form-select" aria-label="Default select example">
								<option selected>Genero del Animal</option>
								<option value="1">Macho</option>
								<option value="2">Hembra</option>
							</select>
						</div>
						<div class="form-group">
							<input class="form-control" type="file" id="formFile">
						</div>
						<div class="form-group order-notes">
							<textarea class="input" placeholder="Descripcion general del animal"></textarea>
						</div>
						<div class="input-group flex-nowrap form-group">

							<span class="input-group-text bx bx-dollar bx-sm" id="addon-wrapping"></span>
							<input type="number" class="input" placeholder="Precio" aria-label="Username"
								aria-describedby="addon-wrapping">
						</div>


					</div>


				</div>

				<div class="form-group" style=" margin-top: 20px; display: flex;    justify-content: space-around;">
					<a href="#" class="primary-btn order-submit">Enviar</a>
				</div>
				<!-- /Order Details -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>


</div>