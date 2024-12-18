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
										<div class="accordion-body">
											<!--
											<select class="js-example-basic-multiple col-sm-12" id="mimunicipio" multiple>
												

											</select>
-->

											<input class="" type="radio" name="ubicacion" value="1">Por Estado
											<p><input class="" type="radio" name="ubicacion" value="2">Por Municipio</p>


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

				<div class="modal fade" id="exampleModalCenter" role="dialog" aria-labelledby="exampleModalCenterTitle"
					aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLongTitle">Selecciona la ubicacion</h5>

								<button type="button" class="btn-close" data-bs-dismiss="modal"
									aria-label="Close"></button>
							</div>
							<div class="modal-body">
								
								<div class="row">
							
									<div class="col-md-6">
										<div class="mb-4">
											<label class="form-label">Selecciona tu estado</label>

											<select class="js-example-basic-multiple col-sm-12" id="unestado">


											</select>
											<p class="text-danger msgpmimunicipio"></p>

											

										</div>
									</div>
									<div class="col-md-6 municipiosection">
										<div class="mb-4">
											<label class="form-label">Primero seleccione un Estado</label>
											<select class="js-example-basic-multiple col-sm-12" id="estado-municipio"
												multiple></select>
											<p class="text-danger msgpestado-municipio"></p>

										</div>
									</div>

								</div>

								<!-- Define una altura adecuada para el mapa -->

							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
								<button type="button" class="btn btn-primary guardarLocation">Guardar
									cambios</button>

							</div>
						</div>
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