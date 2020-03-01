<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Photo gallery">
  <meta name="author" content="Riccardo Nigrelli">
  <meta name="robots" content="index, follow">
  <meta name="keywords" content="Photography, Photos, Photographer, Giacomo photography, Giacomo guidetti, 
		Giacomo guidetti photography, Guidetti photography, Giacomo pictures, Pictures, Nature, People, Travel, 
		Nature photography, People photography, Travel photography, Fotografia, Foto, Fotografo, 
		Fotografie di Giacomo, Fotografie di Giacomo Guidetti, Foto di Giacomo Guidetti, Foto di Giacomo
		Natura, Ritratti, Viaggi, Foto della natura, Fotografie di viaggi">
  <title>Gallery</title>
  <link rel="shortcut icon" href="./images/favicon.ico">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,400italic,700italic" rel="stylesheet"
    type="text/css">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css'>
  <link href="css/gallery.min.css" rel="stylesheet">
  <link href="css/theme.min.css" rel="stylesheet">
  
</head>

<body>

  <div class="container-fluid" style="padding: 0px; margin: 0px;">
    <?php require_once('parts/navbar.php') ?>
  </div>

  <section class='gallery-section' style='padding-bottom: 500px;'>
    <div class='container-fluid grid-custom p-80'>
      <div class='row'>

        <div style='padding: 4px;' class='text-center col-md-4'>
          <a href='./albums/travel/Gozo/mare.jpg' class='gallery-link'>
            <figure class='gallery-image'>
              <img src='./albums/travel/Gozo/mare.jpg' alt='' class='gallery-image img-fluid'>
            </figure>
          </a>

          <a href='./albums/travel/Gozo/Fuoco.jpg' class='gallery-link'>
            <figure style="margin-top: 8px;" class='gallery-image'>
              <img src='./albums/travel/Gozo/Fuoco.jpg' alt='' class='gallery-image img-fluid'>
            </figure>
          </a>

          <a href='./albums/travel/Gozo/geddo.jpg' class='gallery-link'>
            <figure style="margin-top: 8px;" class='gallery-image'>
              <img src='./albums/travel/Gozo/geddo.jpg' alt='' class='gallery-image img-fluid'>
            </figure>
          </a>

        </div>

        <div style='padding: 4px;' class='text-center col-md-4'>
          <a href='./albums/travel/Gozo/rocce.jpg' class='gallery-link'>
            <figure class='gallery-image'>
              <img src='./albums/travel/Gozo/rocce.jpg' alt='' class='gallery-image img-fluid'>
            </figure>
          </a>
        
          <a href='./albums/travel/Gozo/scogliera.jpg' class='gallery-link'>
            <figure style='margin-top: 8px;' class='gallery-image'>
              <img src='./albums/travel/Gozo/scogliera.jpg' alt='' class='gallery-image img-fluid'>
            </figure>
          </a>

          <a href='./albums/travel/Gozo/scogliera_2.jpg' class='gallery-link'>
            <figure style="margin-top: 8px;" class='gallery-image'>
              <img src='./albums/travel/Gozo/scogliera_2.jpg' alt='' class='gallery-image img-fluid'>
            </figure>
          </a>
        </div>
        
        <div style='padding: 4px;' class='text-center col-md-4'>
          <a href='./albums/travel/Gozo/fiore.jpg' class='gallery-link'>
            <figure class='gallery-image'>
              <img src='./albums/travel/Gozo/fiore.jpg' alt='' class='gallery-image img-fluid'>
            </figure>
          </a>

          <a href='./albums/travel/Gozo/gatto.jpg' class='gallery-link'>
            <figure style="margin-top: 8px;" class='gallery-image'>
              <img src='./albums/travel/Gozo/gatto.jpg' alt='' class='gallery-image img-fluid'>
            </figure>
          </a>
        </div>
      </div>
    </div>
  </section>

  <?php require_once('parts/footer.php') ?>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
  
  <script src='https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js'></script>
  <script src='./js/gallery.min.js'></script>
  

  <script>
    $(document).ready((e) => {
      if (/Android|iPhone/i.test(navigator.userAgent)) {
        $('a.gallery-link').removeAttr('href');
      }
    });
  </script>
  
</body>

</html>