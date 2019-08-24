<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Giacomo Guidetti - Contact</title>
  <link rel="shortcut icon" href="./images/favicon.ico">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,400italic,700italic" rel="stylesheet"
    type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css'>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
    integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link href="css/gallery.min.css" rel="stylesheet">
  <link href="css/theme.min.css" rel="stylesheet">

</head>

<body>

  <div class="container-fluid" style="padding: 0px; margin: 0px;">
    <?php require_once('parts/navbar.php') ?>
  </div>

  <div class="container-fluid" style="padding: 0px; margin: 0px;">
    <div class="row justify-content-md-center margin-portfolio-img">
      <div class="col-md-6">
        <form>
          <div class="form-row">
            <div class="form-group col-md-6">
              <input onchange="checkName(this);" type="text" class="custom-form form-control poiret-font" name="name" id="name" placeholder="Name *">
            </div>
            <div class="form-group col-md-6">
              <input onchange="checkSurname(this);" type="text" class="custom-form form-control poiret-font" name="cognome" id="cognome" placeholder="Cognome *">
            </div>
          </div>
          <div class="form-group">
            <input onchange="checkEmailFiled(this);" type="email" class="custom-form form-control poiret-font" name="email" id="email" placeholder="Email *">
          </div>
          <div class="form-group">
            <input onchange="checkObject(this);" type="text" class="custom-form form-control poiret-font" name="subject" id="subject" placeholder="Subject *">
          </div>
          <textarea onchange="checkMessage(this);" class="custom-form form-control poiret-font" name="message" id="message" placeholder="Message *" rows="5"></textarea>
          
          <small style="font-family: 'Poiret One', cursive; font-size: 10px;">All fields with * are required</small><br>
          <button id="submit" type="submit" class="btn btn-primary button-contact">SUBMIT</button>

          <div id="errorField" class="m-top-30 poiret-font alert alert-danger hidden-div">Ti preghiamo di compilare tutti i campi</div>
          <div id="successField" class="m-top-30 poiret-font alert alert-success hidden-div">Email mandata con successo, ti risponderemo il prima possibile</div>
        </form>
      </div> 
    </div>
  </div>

  <?php require_once('parts/footer.php') ?>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin>
  </script>
  <script src="./js/control-form.min.js"></script>
  <script src="./js/send-email.min.js"></script>

</body>

</html>