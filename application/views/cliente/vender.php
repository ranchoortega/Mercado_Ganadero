<div class="page-body">


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
						<li class="active">Proveedores</li>
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

				<!-- Order Details -->
				<div class="col-md-12 order-details">
					<div class="billing-details">
						<div class="section-title">
							<h3 class="title">Informacion del animal</h3>
						</div>
						<div class="form-group">
							<select class="form-select input" aria-label="Default select example" id="anuncio">
								<option value="" selected>Tipo de anuncio</option>
								<option value="lote">Lote</option>
								<option value="ejemplar">Ejemplar</option>
							</select>
						</div>
						<p class="text-danger msgpanuncio"></p>
						<div class="form-group">
							<select class="form-select input" aria-label="Default select example" id="tipo">
								<option value="" selected>Tipo de animal</option>
								<option value="Reses">Reses</option>
								<option value="Aves">Aves</option>
								<option value="Cerdos">Cerdos</option>
								<option value="Chivos">Chivos</option>
							</select>
						</div>
						<p class="text-danger msgtipo"></p>


						<div class="form-group">
							<input class="input" type="text" name="first-name" placeholder="Raza" id="raza"
								maxlength="30">
						</div>
						<p class="text-danger msgpraza"></p>

						<div class="form-group">
							<input class="input" type="text" name="first-name" placeholder="Edad del Animal" id="edad"
								maxlength="3">
						</div>
						<p class="text-danger msgpedad"></p>
						<div class="form-group">
							<input class="input" type="number" name="first-name" placeholder="Peso" id="peso"
								maxlength="3">
						</div>
						<p class="text-danger msgpeso"></p>


						<div class="form-group">
							<select class="form-select input" aria-label="Default select example" id="genero">
								<option value="" selected>Genero del Animal</option>
								<option value="Macho">Macho</option>
								<option value="Hembra">Hembra</option>
							</select>
						</div>
						<p class="text-danger msgpgenero"></p>
						<div class="form-group">
							<select class="form-select input" aria-label="Default select example" id="desparasitado">
								<option value="" selected>Desparasitado</option>
								<option value="Si">Si</option>
								<option value="No">No</option>
							</select>
						</div>
						<p class="text-danger msgpdesparasitado"></p>

						<div class="form-group order-notes">
							<textarea class="input" placeholder="Descripcion general del animal" id="descripcion"
								maxlength="100"></textarea>
							<p class="text-danger msgpdescripcion"></p>
						</div>
						<div class="input-group flex-nowrap form-group">

							<span class="input-group-text bx bx-dollar bx-sm" id="addon-wrapping"></span>
							<input type="number" class="input" placeholder="Precio" aria-label="Username"
								aria-describedby="addon-wrapping" id="precio" maxlength="11">
						</div>
						<p class="text-danger msgpprecio"></p>
						<div class="form-group">
							<input class="form-control input" type="file" id="newfile">
						</div>
						<p class="text-danger msgfile"></p>
						<div class="form-group"
							style=" margin-top: 20px; display: flex;    justify-content: space-around;">
							<a id="btnFile" class="primary-btn order-submit">Enviar</a>
						</div>
					</div>


				</div>

				<!-- Button trigger modal -->




				<!-- /Order Details -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>



	<!-- Modal -->



</div>