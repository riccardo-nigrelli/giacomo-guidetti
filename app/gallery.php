<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Gallery</title>
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

  <?php
    if ( $_GET['type'] === 'nature' )
      include_once('nature.php');
    else if ( $_GET['type'] === 'people' )
      include_once('people.php');
    else if ( $_GET['type'] === 'travel' )
      include_once('travel.php');    
    else if ( $_GET['type'] === 'street' )
      include_once('street.php');
    else if ( $_GET['type'] === 'companies' )
      include_once('companies.php');
    else return 0;
  ?>

  <?php require_once('parts/footer.php') ?>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin></script>
  <!-- <script src=''></script> -->

  <script>
    $(document).ready((e) => {
      if (/Android|iPhone/i.test(navigator.userAgent)) {
        $('a.gallery-link').removeAttr('href');
      }
    });
  </script>

  <script>
    var script = document.createElement('script');
    var script1 = document.createElement('script');
    script.type='text/javascript';
    script1.type='text/javascript';

    if(window.matchMedia("(min-width:500px)").matches) {
      script.src = 'https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js';
      script1.src = './js/gallery.min.js';
    }

    document.getElementsByTagName('head')[0].appendChild(script);
    document.getElementsByTagName('head')[0].appendChild(script1);
  </script>
</body>

</html>