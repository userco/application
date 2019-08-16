$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
$( document ).ready(function() {
	$(function () {
		var frm = $('#form');
		frm.submit(function (ev) {
			var email = document.getElementById('email').value;
			var name = document.getElementById('name').value;
			var city = document.getElementById('city').value;
			
			$.ajax({
				type: frm.attr('method'),
				url: frm.attr('action'),
				data: frm.serialize(),
			
				success: function (data, status) {

				},
				error: function (xhr, desc, err)
				{
					console.log(desc);
				}
			});
			ev.preventDefault();
		})
	})
});
