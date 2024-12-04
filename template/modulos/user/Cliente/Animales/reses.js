const reses = new Animales("Reses");

$(document).ready(async function () {
	// Crear tarjetas
	const {
		res,
		data
	} = await reses.getAnimales();
	const {
		res: RE1,
		data: DATA1
	} = await numberAnimals("Reses");
	console.log(DATA1);

	reses.totalPage = DATA1.total;



	let cantidad = reses.verificarCantidad(DATA1)

	if (cantidad) {




		reses.data = data;
		reses.totalPages = DATA1.total;
		reses.generalItems()
	}


	//Mostrar el modal y su contenido mendiante los input radio
	$('input[name="ubicacion"]').change(function () {

		//Input

		if ($('input[name="ubicacion"]:checked').val() == 1) {
			limpiarElementos('.js-example-basic-multiple');
			$('#exampleModalLongTitle').text("Selecciona uno o varios Estados");
			$("#unestado").attr("multiple", true);
			$('.municipiosection').hide();

		} else {
			limpiarElementos('.js-example-basic-multiple');

			$("#unestado").removeAttr("multiple");
			$('#exampleModalLongTitle').text("Selecciona un Estado y uno o varios Municipios");
			$('.municipiosection').show();

		}

		//Modal
		if ($(this).is(':checked')) {
			$('#exampleModalCenter').modal('show'); // Muestra el modal
		}
	});




	$('#exampleModalCenter').on('shown.bs.modal', async function () {




		//Hacer que el selct2 se sobre ponga
		$('#unestado').select2({
			dropdownParent: $('#exampleModalCenter')
		});
		$('#estado-municipio').select2({
			dropdownParent: $('#exampleModalCenter')
		});



		//Crear el contenido del select

		const {
			res: resEstado,
			data: dataEstado
		} = await getEstados();
		console.log("eeeeeeeeeeeee");
		console.log(data);

		dataEstado.forEach(function (estado) {
			$('#mimunicipio').append(`<option value="${estado.id}">${estado.estado}</option>`);

		});
		//$("#mimunicipio").val(["0"]).trigger('change');


		dataEstado.forEach(function (estado) {
			$('#unestado').append(`<option value="${estado.id}">${estado.estado}</option>`);

		});
		console.log($("#unestado").attr("multiple"));



		$('#unestado').change(async function () {
			if ($("#unestado").attr("multiple") == undefined) {
				// Obtener el valor seleccionado
				let valorSeleccionado = $(this).val();


				const {
					res: resMunicipio,
					data: dataMunicipio
				} = await getEstado_Municipio(valorSeleccionado);
				console.log(dataMunicipio);

				$('#estado-municipio').empty();
				$('#estado-municipio').append(`<option value="null">Todos los municipios</option>`);


				dataMunicipio.forEach(function (estado) {
					$('#estado-municipio').append(`<option value="${estado.id}">${estado.municipio}</option>`);

				});
			}


		});


	});




});



$('.guardarLocation').on('click', async () => {

	console.log(
		$('#unestado').val()
	);


})
