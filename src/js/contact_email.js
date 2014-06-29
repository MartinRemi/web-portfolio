$("#btnContactUs").click(function(e) {
	e.preventDefault();

	var param = {
		"name": $("#name").val(),
		"email": $("#email").val(),
		"subject": $("#subject").val(),
		"content": $("#message").val()
	};

	$.ajax({
		url: 'tools/sendMail.php',
		data: param,
		type: 'POST',
		dataType: 'JSON',
		success: function (data) {
			if (data.status) {
				$("#contact_container").prepend('<div class="alert alert-success" role="alert">Message sent!</div>');
			} else {
				$("#contact_container").prepend('<div class="alert alert-danger" role="alert">Message not sent! There might have been a problem.</div>');
			}
		}
	});
});