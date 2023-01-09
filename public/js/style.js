toastr.options = {
	"closeButton": true,
	"debug": false,
	"newestOnTop": true,
	"progressBar": false,
	"positionClass": "toast-top-right",
	"preventDuplicates": false,
	"onclick": null,
	"showDuration": "300",
	"hideDuration": "1000",
	"timeOut": "3000",
	"extendedTimeOut": "1000",
	"showEasing": "swing",
	"hideEasing": "linear",
	"showMethod": "fadeIn",
	"hideMethod": "fadeOut"
}

let errorHandler = (response) => {

	let message = '';

	if (!('errors' in response)) {
		message = response.message;
	} else {
		errors = response.errors;

		loop = 0;
		$.each(errors, function (index, value) {

			if (!loop) {
			message = value[0]
			}

			loop++;
		})
	}

	toastr.error(message, 'Invalid', {
		timeOut: 2000
	});
}