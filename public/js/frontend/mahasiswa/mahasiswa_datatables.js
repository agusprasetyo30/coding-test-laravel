let MahasiswaDatatables = {
	init: function () {
		let _url = window.location.origin;
		
		let mahasiswa_datatable = $('.mahasiswa_datatables').DataTable({
			dom: '<"top"f>rt<"bottom"pil>',
			scrollX: true,
			processing: true,
			serverSide: true,
			responsive: true,
			ordering: false,
			ajax: _url + '/datatables/mahasiswa',
			lengthMenu: [5, 10, 25, 50, 100],
			pageLength: 5,
			oLanguage: {
            sLengthMenu: "_MENU_",
			},
			language: {
            search: "Search",
            processing: '<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span>',
         },
			columnDefs: [
				{
					// targets: [0,1,2,3],
					// "className": "text-left" 
				}
			],
			columns: [
				{ data: 'nama', name: 'nama'},
				{ data: 'ttl', name: 'tempat'},
				{ data: 'hobi', name: 'hobi'},
				{ data: 'ukt', name: 'ukt'},
				{ data: 'created', name: 'created'},
				{ data: 'updated', name: 'updated' },
				{ data: 'actions', name: 'actions', orderable: false, searchable: false },
			],
			
		});

		$(".dataTables_length").addClass("mr-2");
		$('.dataTables_filter').addClass('text-left');
		$('.dataTables_paginate').addClass('float-left mt-2');
		$('.dataTables_info').addClass('float-right');
		$('.dataTables_length').addClass('float-right mt-2');
		$('.dataTables_processing').removeClass('card');
		$('.dataTables_filter input').unbind();
		$('.dataTables_filter input').bind('keyup', function (e) {
         if (e.keyCode == 13) {
            let table = $('.mahasiswa_datatables').DataTable();
            table.search(this.value).draw();
         }
		});
	}
}

jQuery(document).ready(function () {
	MahasiswaDatatables.init();
});