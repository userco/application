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
			ev.preventDefault();
			$.ajax({
				type: frm.attr('method'),
				url: frm.attr('action'),
				data: frm.serialize(),
			
				success: function (data, status) {
					window.location.href = '/thankyou/'+ name;
				},
				error: function (xhr, desc, err)
				{
					console.log(desc);
				}
			});
			
		})
	})
});
