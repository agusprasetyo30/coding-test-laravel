$('.modal-footer').on('click', '.add_mahasiswa', function (event) {
	let nama = $('#nama').val()
	let tempat = $('#tempat').val()
	let tanggal_lahir = $('#tanggal_lahir').val()
	let hobi = $('#hobi').val()
	let ukt = $('#ukt').val()

	$.ajax({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		},
		type: 'post',
		url: '/mahasiswa',
		data: {
			_token: $('input[name=_token]').val(),
			nama: nama,
			tempat: tempat,
			tanggal_lahir: tanggal_lahir,
			hobi: hobi,
			ukt: ukt,
		},
		success: function (data) {			
			toastr.success('Add data success', 'Success')

			$('#modal_mahasiswa').modal('hide');

			// let table = $('.jobsheet_activity_datatable').DataTable();
			// table.ajax.reload(null, false);
			console.log(data);
		}
	})
});