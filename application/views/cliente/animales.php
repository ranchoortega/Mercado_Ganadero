<style>
	.breadcrumb-item {
		flex: 1;
		/* Todos los elementos se repartirán de manera uniforme */
		text-align: center;
		padding: 10px;
		white-space: nowrap;
		/* Evita que el texto se corte en varias líneas */
	}

	.breadcrumb-item a {
		text-decoration: none;
		color: inherit;
	}

	.breadcrumb-item::before {
		content: none !important;
		/* Asegura que se aplique este estilo sobre cualquier otro */
		padding-right: 0 !important;
	}

	.select2-container--default .select2-selection--single {
		border: none;
		/* Elimina el borde */
		outline: none;
		/* Elimina el contorno */
		background-color: transparent;
		/* Fondo transparente */
		box-shadow: none;
		/* Evita cualquier sombra de borde */
	}

	.select2-container--default .select2-selection--single:focus {
		outline: none;
		/* Asegura que no haya contorno al enfocar */
		box-shadow: none;
		/* Evita cualquier sombra al enfocar */
	}

	.select2-container--default .select2-selection--single .select2-selection__arrow {
		display: none;
		/* Elimina la flecha desplegable si lo deseas */
	}



	/* Opcionalmente, puedes ajustar la fuente o el espaciado en pantallas más pequeñas */
	@media (max-width: 576px) {
		.breadcrumb-item {
			padding: 5px;
			/* Reduce el espaciado en pantallas muy pequeñas */
		}
	}
</style>
<div class="page-body">

	<div id="breadcrumb" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-12 d-flex justify-content-between flex-nowrap">
					<div class="breadcrumb-item">
						<a href="<?php echo base_url() ?>Welcome"><i class="icofont-home icofont-2x"></i></a>
					</div>
					<div class="breadcrumb-item" id="iconReses">
						<a href="<?php echo base_url() ?>Cliente/Animales/Reses"><i
								class="icofont-cow icofont-2x"></i></a>
					</div>
					<div class="breadcrumb-item" id="iconChivos">
						<a href="<?php echo base_url() ?>Cliente/Animales/Chivos"><i
								class="icofont-giraffe-head-1 icofont-2x"></i></a>
					</div>
					<div class="breadcrumb-item" id="iconCerdos">
						<a href="<?php echo base_url() ?>Cliente/Animales/Cerdos"><i
								class="icofont-pig-face icofont-2x"></i></a>
					</div>
					<div class="breadcrumb-item" id="iconAves">
						<a href="<?php echo base_url() ?>Cliente/Animales/Aves"><i
								class="icofont-rooster icofont-2x"></i></a>
					</div>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>


	<!-- SECTION -->
	<div class="section" style="  background-color: rgba(243, 244, 246); ">


		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-2">
					<div class="billing-details">
						<aside>
							<h4>Filtros</h4>
							<div class="accordion" id="accordionExample">
								<div class="accordion-item">
									<h2 class="accordion-header">
										<button class="accordion-button collapsed" type="button"
											data-bs-toggle="collapse" data-bs-target="#collapseOne"
											aria-expanded="false" aria-controls="collapseOne">
											Ubicacion por estados
										</button>
									</h2>
									<div id="collapseOne" class="accordion-collapse collapse"
										data-bs-parent="#accordionExample">
										<div class="">
											<select class="js-example-basic-multiple col-sm-12" id="mimunicipio" multiple>
												

											</select>
										
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<h2 class="accordion-header">
										<button class="accordion-button collapsed" type="button"
											data-bs-toggle="collapse" data-bs-target="#collapseTwo"
											aria-expanded="false" aria-controls="collapseTwo">
											Ubicacion por municipios
										</button>
									</h2>
									<div id="collapseTwo" class="accordion-collapse collapse"
										data-bs-parent="#accordionExample">
										<div class="">
											<select class="js-example-basic-multiple col-sm-12" id="unestado">
												

											</select>
											<select class="js-example-basic-multiple col-sm-12"
											id="estado-municipio" multiple ></select>
										</div>
									</div>
								</div>
							
							</div>
						</aside>

					</div>
				</div>
				<div class="col-md-10 order-details">
					<div class="billing-details">
					
						<div class="row" id="cardAnimales">

							<div id="divcob">

							</div>

							<!-- product -->


							<!-- /product -->
						</div>
						<nav aria-label="Page navigation example" style="display: flex;	justify-content: space-evenly;">
							<ul class="pagination justify-content-center" id="pagesNav">




							</ul>
						</nav>
					</div>
				</div>


				<!-- ASIDE -->

				<!-- /ASIDE -->

				<!-- STORE -->


				<!-- /STORE -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->



</div>