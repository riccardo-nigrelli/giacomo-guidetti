function isEmpty(input) {
  if ( input.value.trim() == "" )
    return true;
  return false;
}

function checkObject(input) {
  if ( isEmpty(input) ) {
    borderDanger(input);
    return false;
  }
  else {
    borderSuccess(input); 
    return true;
  }
}

function checkName(input) {
  if ( isEmpty(input) ) {
    borderDanger(input);
    return false;
  }
  else {
    borderSuccess(input); 
    return true;
  }
}

function checkSurname(input) {
  if ( isEmpty(input) ) {
    borderDanger(input);
    return false;
  }
  else {
    borderSuccess(input); 
    return true;
  }
}

function checkMail(input) {

  var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-]{2,})+\.)+([a-z]{2,})+$/;
  input.value = input.value.trim();

  if (!isEmpty(input) && regex.test(input.value)) {
    borderSuccess(input);
    return true;
  }
  else {
    borderDanger(input);
    return false;
  }
}

function checkMessage(input) {
  if ( isEmpty(input) ) {
    borderDanger(input);
    return false;
  }
  else {
    borderSuccess(input); 
    return true;
  }
}

function borderSuccess(input) {
  if ( $(input).hasClass('form-control-danger') && $(input).parent().hasClass('has-danger')) {
    $(input).removeClass('form-control-danger');
    $(input).parent().removeClass('has-danger');
  }
  $(input).addClass('form-control-success');
  $(input).parent().addClass('has-success');
}

function borderDanger(input) {
  if ( $(input).hasClass('form-control-danger') && $(input).parent().hasClass('has-danger')) {
    $(input).removeClass('form-control-success')
    $(input).parent().removeClass('has-success');
  }
  $(input).addClass('form-control-danger');
  $(input).parent().addClass('has-danger');
}

function checkForm() {
  c1 = checkName(document.getElementById('name'));
  c2 = checkSurname(document.getElementById('cognome'));
  c3 = checkMail(document.getElementById('email'));
  c4 = checkObject(document.getElementById('subject'));
  c5 = checkMessage(document.getElementById('message'));
  
  return (c1 && c2 && c3 && c4 && c5);
}
