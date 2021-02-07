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

	$(function () {
		tinymce.init({
			selector: 'textarea#editor',
			theme: 'modern',
			height: 300,
			plugins: [
				'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
				'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
				'save table contextmenu directionality emoticons template paste textcolor',
			],
			toolbar:
				'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons',
			//external_filemanager_path: base_url + '/filemanager/',
			//filemanager_title: 'Responsive Filemanager',
			// external_plugins: {
			// 	filemanager: base_url + '/filemanager/plugin.min.js',
			// },
		});
	});
});
