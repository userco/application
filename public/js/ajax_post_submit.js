$( document ).ready(function() {
	$(function () {
		var frm = $('#form');
		frm.submit(function (ev) {
			ev.preventDefault();
			$.ajax({
				type: frm.attr('method'),
				url: frm.attr('action'),
				data: frm.serialize(),
				success: function (data) {
					alert('ok');
				}
			});
		})
	})
});