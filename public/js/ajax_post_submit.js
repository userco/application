$( document ).ready(function() {
	$(function () {
		var frm = $('#form');
		frm.submit(function (ev) {
			var submitButton = $("input[type=submit]",this);
			ev.preventDefault();
			submitButton.attr("disabled", true);
			var email = document.getElementById('email').value;
			var name = document.getElementById('name').value;
			var city = document.getElementById('city').value;
			
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
