$(document).ready(function() {

  $('#submit').click(function() {
    if ( checkForm() ) {
			var name = $('#name').val();
			var cognome = $('#cognome').val();
			var email = $('#email').val();
			var subject = $('#subject').val();
			var message = $('#message').val();

			$.post("./parts/send-email.php", {
					name: name,
					cognome: cognome,
					email: email,
					subject: subject,
					message: message,
				},
				function(data) {
					if ( data == "sent") {

					}
				}
      );
      
			$('#successField').show();
			setTimeout(function(){ $('#successField').hide(); }, 3000);
		} 
		else {
			$('#errorField').show();
			setTimeout(function(){ $('#errorField').hide(); }, 3000);
		}
  });
});