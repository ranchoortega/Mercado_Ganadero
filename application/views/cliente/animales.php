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
				<div class="col-md-2 order-details">
					<div class="billing-details">
						<aside>
							<h4>Filtros</h4>
							<div class="accordion" id="accordionExample">
								<div class="accordion-item">
									<h2 class="accordion-header">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
											data-bs-target="#collapseOne" aria-expanded="false"
											aria-controls="collapseOne">
											Ubicacion
										</button>
									</h2>
									<div id="collapseOne" class="accordion-collapse collapse"
										data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<ul>
												<li>
													<a href="">Mexico</a>
												</li>
												<li>
													<a href="">Argentina</a>

												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<h2 class="accordion-header">
										<button class="accordion-button collapsed" type="button"
											data-bs-toggle="collapse" data-bs-target="#collapseTwo"
											aria-expanded="false" aria-controls="collapseTwo">
											Raza
										</button>
									</h2>
									<div id="collapseTwo" class="accordion-collapse collapse"
										data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<ul>
												<li><a href="">Charol</a></li>
												<li><a href="">Pardo</a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<h2 class="accordion-header">
										<button class="accordion-button collapsed" type="button"
											data-bs-toggle="collapse" data-bs-target="#collapseThree"
											aria-expanded="false" aria-controls="collapseThree">
											Tipo
										</button>
									</h2>
									<div id="collapseThree" class="accordion-collapse collapse"
										data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<ul>
												<li><a href="">Lote</a></li>
												<li><a href="">Ejemplar</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</aside>

					</div>
				</div>
				<div class="col-md-10 order-details">
					<div class="billing-details">
						<div class="store-filter clearfix">
							<div class="store-sort">
								<label>
									Ordenar:
									<select class="input-select">
										<option value="0">Precio mas bajo</option>
										<option value="1">Precio mas caro</option>

									</select>
								</label>


							</div>

						</div>
						<div class="row" id="cardAnimales">

							<div id="divcob">
							<div style="height: 50vh; display: flex; align-items: center; justify-content: space-evenly; flex-direction: column;">
    <svg xmlns="http://www.w3.org/2000/svg" width="251" height="154" viewBox="0 0 251 154">
        <g fill="none" fill-rule="evenodd">
            <path fill="#CCC" d="M18 151h233v2H18v-2zm-18 0h13v2H0v-2z"></path>
            <path fill="#DFDFDF" d="M152 133v8.165h-50V133H28v8.165c0 5.52 3.405 11.827 13.647 11.835l168.906-.291C228.179 152.723 226.377 133 226 133h-74z"></path>
            <path fill="#F7D032" d="M153.303 133.42l-24.278.011 24.278.018z"></path>
            <path fill="#FFF" d="M58.513 132.71h139.604V34.572l-139.604.397z"></path>
            <path fill="#BBB" d="M30 147c.735 2.575 5.553 6.276 13.283 6.276L211 153c6.737 0 12.34-3.372 13-6H30z"></path>
            <path stroke="#CCC" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M198 132H59"></path>
            <path stroke="#999" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M225 134v7.285c0 4.325-4.247 10.715-13.393 10.715H46.489"></path>
            <path stroke="#CCC" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M45 97V28a6 6 0 0 1 6-6h155a6 6 0 0 1 6 6v99"></path>
            <path stroke="#CCC" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M198 132.492V37.367c0-1.599-1.397-2.367-3-2.367l-112.35-.11-13.717.094-8.016.016c-1.041 0-1.6.524-1.603 1.567"></path>
            <path stroke="#CCC" stroke-linecap="round" stroke-width="2" d="M113.857 50.642c-7.217 3.53-13.356 9.515-17.051 17.44m-3.464 15.03c-.125 8.971 3.073 17.673 8.959 24.283a34.437 34.437 0 0 0 11.2 8.329c9.825 4.58 20.731 4.139 29.925-.271 7.325-3.513 13.564-9.546 17.302-17.563 2.58-5.533 3.67-11.371 3.436-17.045-.282-6.799-2.468-13.362-6.275-18.882a34.465 34.465 0 0 0-13.857-11.713 34.436 34.436 0 0 0-13.932-3.236c-5.63-.107-11.2 1.16-16.243 3.628"></path>
            <g>
                <path stroke="#CCC" stroke-linecap="square" stroke-width="2" d="M162.369 44.033l-9.286 10.683"></path>
                <path fill="#E6E6E6" d="M177.11 39.194l-4.262 4.902c-2.12 2.44-6.34 2.241-9.423-.438-3.083-2.68-3.866-6.831-1.746-9.27l14.488-16.667 13.418-15.436c2.118-2.436 6.339-2.239 9.422.44 3.082 2.68 3.865 6.833 1.747 9.269"></path>
                <path stroke="#CCC" stroke-linecap="round" stroke-width="2" d="M161.755 35.04c-2.12 2.438-1.657 6.312 1.032 8.649 2.689 2.337 6.589 2.257 8.71-.182l14.487-16.666 13.418-15.436"></path>
            </g>
            <path fill="#CCC" d="M126.321 96.605h4.914v5.136h-4.914v-5.136zm-5.309-28.358c2.009-2.165 4.766-3.247 8.272-3.247 3.243 0 5.84.926 7.79 2.778 1.95 1.852 2.926 4.218 2.926 7.099 0 1.744-.358 3.16-1.074 4.246-.716 1.087-2.16 2.684-4.333 4.79-1.58 1.531-2.605 2.828-3.074 3.89-.47 1.061-.704 2.63-.704 4.703h-4.395c0-2.354.28-4.25.84-5.691.559-1.44 1.785-3.09 3.678-4.95l1.976-1.951a8.174 8.174 0 0 0 1.432-1.754c.658-1.07.987-2.18.987-3.333 0-1.613-.481-3.012-1.444-4.197-.963-1.186-2.556-1.778-4.778-1.778-2.749 0-4.65 1.02-5.704 3.062-.592 1.135-.93 2.773-1.012 4.913H118c0-3.555 1.004-6.415 3.012-8.58z"></path>
        </g>
    </svg>
    <h4>No se han agregado animales</h4>
</div>
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