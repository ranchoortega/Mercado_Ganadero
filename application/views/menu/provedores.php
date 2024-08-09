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
				<div class="col-md-6 order-details divLoginAndCreate">
					<!-- Billing Details -->
					<div class="billing-details divCrear">
						<div class="section-title">
							<h3 class="title">Crear cuenta</h3>
						</div>
						<div class="input-group flex-nowrap ">

							<span class="input-group-text bx bxs-user bx-sm" id="addon-wrapping"></span>
							<input type="text" class="input" placeholder="Usuario" aria-describedby="addon-wrapping"
								id="user">
						</div>
						<p class="text-danger msguser"></p>
						<div class="input-group flex-nowrap ">

							<span class="input-group-text bx bx-low-vision bx-sm" id="addon-wrapping"></span>
							<input type="password" class="input" placeholder="Contraseña"
								aria-describedby="addon-wrapping" id="password" minlength="4" maxlength="8">
						</div>
						<p class="text-danger msgpassword"></p>
						<div class="input-group flex-nowrap ">

							<span class="input-group-text bx bxs-user-detail bx-sm" id="addon-wrapping"></span>
							<input type="text" class="input" placeholder="Nombre" aria-describedby="addon-wrapping"
								id="name">
						</div>
						<p class="text-danger msgpname"></p>

						<div class="input-group flex-nowrap ">

							<span class="input-group-text bx bxs-phone-call bx-sm" id="addon-wrapping"></span>
							<input class="input" type="tel" pattern="\d{10}" maxlength="10" name="tel"
								placeholder="Teléfono" id="phone" aria-describedby="addon-wrapping">
						</div>
						<p class="text-danger msgphone"></p>
						<script>
							document.getElementById('phone').addEventListener('input', function (e) {
								var value = e.target.value;
								// Eliminar cualquier carácter no numérico
								e.target.value = value.replace(/\D/g, '').slice(0, 10);
							});
						</script>


						<div class="input-group flex-nowrap ">

							<span class="input-group-text bx bx-current-location bx-sm" id="addon-wrapping"></span>


							<label for="staticEmail2" class="visually-hidden">Email</label>
							<input type="text" readonly class="form-control-plaintext input" id="location"
								value="Ubicación">


							<button type="submit" class="btn btn-primary mb-3 btnLocation"
								style=" height: 100%; width:25%">Buscar</button>


						</div>
						<p class="text-danger msglocation"></p>
						<div class="form-group"
							style=" margin-top: -12PX; display: flex;    justify-content: space-around;">
							<a id="create" class="primary-btn order-submit">Crear cuenta</a>


						</div>
						<div class="form-group"
							style=" margin-top: -12px; display: flex;    justify-content: space-around;">

							<a class="btnViewLogin">¿Ya tienes cuenta? Haz clic aqui</a>

						</div>







					</div>
					<!-- /Billing Details -->
					<div class="billing-details divLogin">
						<div class="section-title">
							<h3 class="title">Ingresar</h3>
						</div>
						<div class="input-group flex-nowrap ">

							<span class="input-group-text bx bxs-user bx-sm" id="addon-wrapping"></span>
							<input type="text" class="input" placeholder="Usuario" aria-describedby="addon-wrapping"
								id="usuario">
						</div>
						<p class="text-danger msgploginname"></p>
						<div class="input-group flex-nowrap ">

							<span class="input-group-text bx bxs-user bx-sm" id="addon-wrapping"></span>
							<input type="password" class="input" placeholder="Contraseña"
								aria-describedby="addon-wrapping" id="contrasena" minlength="4" maxlength="8">
						</div>
						<p class="text-danger msgploginpassword"></p>
						<div class="form-group"
							style=" margin-top: -12PX; display: flex;    justify-content: space-around;">
							<a id="btnLogin" class="primary-btn order-submit">Iniciar sesion</a>


						</div>
						<div class="form-group"
							style=" margin-top: -12px; display: flex;    justify-content: space-around;">

							<a class="btnViewCreate">¿No tienes cuenta? Haz clic aqui</a>

						</div>





					</div>



				</div>

				<!-- Order Details -->
				<div class="col-md-6 order-details">
					<div class="billing-details">
						<div class="section-title">
							<h3 class="title">Informacion del animal</h3>
						</div>


						<div class="form-group">
							<input class="input" type="text" name="first-name" placeholder="Raza" id="raza"  maxlength="30">
						</div>
						<p class="text-danger msgpraza"></p>

						<div class="form-group">
							<input class="input" type="text" name="first-name" placeholder="Edad del Animal" id="edad"  maxlength="3">
						</div>
						<p class="text-danger msgpedad"></p>


						<div class="form-group">
							<select class="form-select input" aria-label="Default select example" id="genero"  >
								<option value=""selected>Genero del Animal</option>
								<option value="Macho">Macho</option>
								<option value="Hembra">Hembra</option>
							</select>
						</div>
						<p class="text-danger msgpgenero"></p>
						
						<div class="form-group order-notes">
							<textarea class="input" placeholder="Descripcion general del animal" id="descripcion"  maxlength="100"></textarea>
						<p class="text-danger msgpdescripcion"></p>
						</div>
						<div class="input-group flex-nowrap form-group">

							<span class="input-group-text bx bx-dollar bx-sm" id="addon-wrapping"></span>
							<input type="number" class="input" placeholder="Precio" aria-label="Username"
								aria-describedby="addon-wrapping" id="precio"  maxlength="11">
						</div>
						<p class="text-danger msgpprecio"></p>
						<div class="form-group">
							<input class="form-control input" type="file" id="newfile">
						</div>
						<p class="text-danger msgfile"></p>
					</div>


				</div>

				<div class="form-group" style=" margin-top: 20px; display: flex;    justify-content: space-around;">
					<a id="btnFile" class="primary-btn order-submit">Enviar</a>
				</div>
				<!-- /Order Details -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>


</div>