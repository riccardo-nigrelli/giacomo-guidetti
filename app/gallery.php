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
    else if ( $_GET['type'] === 'people' ) {
      echo "
        <section class='gallery-section' style='padding-bottom: 500px;'>
          <div class='container-fluid grid-custom p-80'>
            <div class='row'>

              <div style='padding: 4px;' class='text-center col-md-4'>
                <a href='./albums/people/Piralla_1.jpg' class='gallery-link'>
                  <img style='padding-bottom: 8px;' src='./albums/people/Piralla_1.jpg' alt='' class='gallery-image img-fluid'>
                </a>
                <a href='./albums/people/Piralla_1.jpg' class='gallery-link'>
                  <img style='padding-bottom: 8px;' src='./albums/people/IT.jpg' alt='' class='gallery-image img-fluid'>
                </a>
                <a href='./albums/people/Piralla_1.jpg' class='gallery-link'>
                  <img style='padding-bottom: 8px;' src='./albums/people/Chiara.jpg' alt='' class='gallery-image img-fluid'>
                </a>
                <a href='./albums/people/Piralla_1.jpg' class='gallery-link'>
                  <img style='padding-bottom: 8px;' src='./albums/people/Camilla_2.jpg' alt='' class='gallery-image img-fluid'>
                </a>
                <a href='./albums/people/Luca_viale.jpg' class='gallery-link'>
                  <img style='padding-bottom: 8px;' src='./albums/people/Bellissimo.jpg' alt='' class='gallery-image img-fluid'>
                </a>
                <a href='./albums/people/Luca_viale.jpg' class='gallery-link'>
                  <img style='padding-bottom: 8px;' src='./albums/people/Band_2.jpg' alt='' class='gallery-image img-fluid'>
                </a>

              </div>

              <div style='padding: 4px;' class='text-center col-md-4'>
                <a href='./albums/people/Camilla_1.jpg' class='gallery-link'>
                  <img style='padding-bottom: 8px;' src='./albums/people/Camilla_1.jpg' alt='' class='gallery-image img-fluid'>
                </a>
                <a href='./albums/people/Camilla_1.jpg' class='gallery-link'>
                  <img style='padding-bottom: 8px;' src='./albums/people/Delpo_ak47.jpg' alt='' class='gallery-image img-fluid'>
                </a>
                <a href='./albums/people/Camilla_1.jpg' class='gallery-link'>
                  <img style='padding-bottom: 8px;' src='./albums/people/Dalia_1.jpg' alt='' class='gallery-image img-fluid'>
                </a>
                <a href='./albums/people/Camilla_1.jpg' class='gallery-link'>
                  <img style='padding-bottom: 8px;' src='./albums/people/Band_1.jpg' alt='' class='gallery-image img-fluid'>
                </a>
                <a href='./albums/people/Camilla_1.jpg' class='gallery-link'>
                  <img style='padding-bottom: 8px;' src='./albums/people/Giovanni_montagna.jpg' alt='' class='gallery-image img-fluid'>
                </a>
                <a href='./albums/people/Piralla_1.jpg' class='gallery-link'>
                  <img style='padding-bottom: 8px;' src='./albums/people/Delpo_3.jpg' alt='' class='gallery-image img-fluid'>
                </a>
                <a href='./albums/people/Piralla_1.jpg' class='gallery-link'>
                  <img style='padding-bottom: 8px;' src='./albums/people/Veronica_1.jpg' alt='' class='gallery-image img-fluid'>
                </a>
                <a href='./albums/people/Piralla_1.jpg' class='gallery-link'>
                  <img style='padding-bottom: 8px;' src='./albums/people/Delpo_4.jpg' alt='' class='gallery-image img-fluid'>
                </a>
              </div>

              <div style='padding: 4px;' class='text-center col-md-4'>
                <a href='./albums/people/Luca_viale.jpg' class='gallery-link'>
                  <img style='padding-bottom: 8px;' src='./albums/people/Luca_viale.jpg' alt='' class='gallery-image img-fluid'>
                </a>
                <a href='./albums/people/Luca_viale.jpg' class='gallery-link'>
                  <img style='padding-bottom: 8px;' src='./albums/people/Veronica_2.jpg' alt='' class='gallery-image img-fluid'>
                </a>
                <a href='./albums/people/Luca_viale.jpg' class='gallery-link'>
                  <img style='padding-bottom: 8px;' src='./albums/people/Cosplayer_1.jpg' alt='' class='gallery-image img-fluid'>
                </a>
                <a href='./albums/people/Luca_viale.jpg' class='gallery-link'>
                  <img style='padding-bottom: 8px;' src='./albums/people/Delpo_2.jpg' alt='' class='gallery-image img-fluid'>
                </a>
                <a href='./albums/people/Camilla_1.jpg' class='gallery-link'>
                  <img style='padding-bottom: 8px;' src='./albums/people/Piralla_2.jpg' alt='' class='gallery-image img-fluid'>
                </a>
                <a href='./albums/people/Camilla_1.jpg' class='gallery-link'>
                  <img style='padding-bottom: 8px;' src='./albums/people/Cosplayer_2.png' alt='' class='gallery-image img-fluid'>
                </a>

              </div>
            </div>
          </div>
        </section>
      ";
    }
    else if ( $_GET['type'] === 'travel' ) {
      
    }
    else if ( $_GET['type'] === 'street' ) {
      
    }
    else if ( $_GET['type'] === 'companies' ) {
      
    }
    else return 0;
  ?>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js'></script>

  <script>
    $(document).ready((e) => {
      if (/Android|iPhone/i.test(navigator.userAgent)) {
        $('a').attr('href', '');
      }
    });
  </script>

  <script src="./js/gallery.min.js"></script>
</body>

</html>