const reses = new Animales("Reses");

$(document).ready(async function () {


	$('input[name="ubicacion"]').change(function () {
		if ($(this).is(':checked')) {
			$('#exampleModalCenter').modal('show'); // Muestra el modal
		}
	});



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

	let i = false;

	let cantidad = reses.verificarCantidad(DATA1)

	if (cantidad) {

		console.log(i);


		reses.data = data;
		reses.totalPages = DATA1.total;
		reses.generalItems()
	}


	$('#exampleModalCenter').on('shown.bs.modal', async function () {

		if ($('input[name="ubicacion"]:checked').val() == 1) {
			$('.municipiosection').toggle();
			
		}
		else{

		}




		$('#unestado').select2({
			dropdownParent: $('#exampleModalCenter')
		});
		$('#estado-municipio').select2({
			dropdownParent: $('#exampleModalCenter')
		});

		const {
			res: resEstado,
			data: dataEstado
		} = await getEstados();
		console.log("eeeeeeeeeeeee");
		console.log(data);
		$('#mimunicipio').append(`<option value="0">Todos los estados</option>`);
		dataEstado.forEach(function (estado) {
			$('#mimunicipio').append(`<option value="${estado.id}">${estado.estado}</option>`);

		});
		$("#mimunicipio").val(["0"]).trigger('change');

		$('#unestado').append(`<option value="null">Todos los estados</option>`);
		dataEstado.forEach(function (estado) {
			$('#unestado').append(`<option value="${estado.id}">${estado.estado}</option>`);

		});

		$('#unestado').change(async function () {
			// Obtener el valor seleccionado
			let valorSeleccionado = $(this).val();


			const {
				res,
				data
			} = await getEstado_Municipio(valorSeleccionado);
			console.log(data);

			$('#estado-municipio').empty();
			$('#estado-municipio').append(`<option value="null">Todos los municipios</option>`);


			data.forEach(function (estado) {
				$('#estado-municipio').append(`<option value="${estado.id}">${estado.municipio}</option>`);

			});


		});
	});




});
