$( document ).ready(function() {
	$(function () {
		var frm = $('#form');
		frm.submit(function (ev) {
			var submitButton = $("input[type=submit]",this);
			var email = document.getElementById('email').value;
			var name = document.getElementById('name').value;
			var city = document.getElementById('city').value;
			ev.preventDefault();
			if (email == "" || name == "" || city == "" || email.indexOf("@") == -1 ) {
				return;
			}else{
				submitButton.attr("disabled", true);
				$.ajax({
					type: frm.attr('method'),
					url: frm.attr('action'),
					data: frm.serialize(),
					success: function (data, status) {
						window.location.href = '/thankyou/'+name;
					},
					error: function (xhr, desc, err)
					{
						console.log(desc);
					}
				});
			}
		})
	})
});
