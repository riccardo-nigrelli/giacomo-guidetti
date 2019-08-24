$(document).ready(function() {
  $('#submit').click(function() {
    if (checkAllField()) {
			var name = $('#name').val();
			var cognome = $('#cognome').val();
			var email = $('#email').val();
			var subject = $('#subject').val();
			var message = $('#message').val();

			// $.post("./parts/send-email.php", {
			// 		name: name,
			// 		cognome: cognome,
			// 		email: email,
			// 		subject: subject,
			// 		message: message,
			// 	},
			// 	function (data) {
      //   }
      // );
      
      $('#successField').show(0).delay(5000).hide(0);
		} else $('#errorField').show(0).delay(5000).hide(0);
    
  });
});