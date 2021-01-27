$(document).ready(function () {
	$('.del-btn').click(function (event) {
		event.preventDefault();

		var delUrl = $(this).attr('href');

		Swal.fire({
			title: 'Do you want to delete this?',
			showCancelButton: true,
			confirmButtonText: `Yes delete`,
			confirmButtonColor: '#d14529',
		}).then((result) => {
			/* Read more about isConfirmed, isDenied below */
			if (result.isConfirmed) {
				Swal.fire('Deleted!', '', 'success');
				window.location = delUrl;
			}
		});
	});
});
