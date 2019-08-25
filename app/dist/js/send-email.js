$(document).ready(function() {
	$('#submit').on('click', function() {
    if ( checkForm() ) {
			var name = $('#name').val();
			var surname = $('#surname').val();
			var email = $('#email').val();
			var subject = $('#subject').val();
			var message = $('#message').val();

			$.post("./parts/send-email.php", {
					name: name,
					surname: surname,
					email: email,
					subject: subject,
					message: message,
				},
				function(data) {
					if ( data == "sent") {
						$('#successField').show();
						setTimeout(function(){ $('#successField').hide(); }, 5000);
						$("#formEmail")[0].reset();

						$('div.has-success').removeClass('has-success');
						$('input.form-control-success').removeClass('form-control-success');
					}
					else {
						$('#errorSendField').show();
						setTimeout(function(){ $('#errorSendField').hide(); }, 5000);			
					}
				}
      );
		} 
		else {
			$('#errorField').show();
			setTimeout(function(){ $('#errorField').hide(); }, 5000);
		}
  }); 
});