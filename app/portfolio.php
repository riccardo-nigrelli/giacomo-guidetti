<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Giacomo Guidetti | Portfolio</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="css/theme.min.css" rel="stylesheet">

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,400italic,700italic" rel="stylesheet"
        type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

</head>

<body>

    <div class="container-fluid" style="padding-bottom: 150px;">

        <?php require_once('parts/navbar.php') ?>

        <div class="row justify-content-md-center text-center"
            style="margin-top: 50px; margin-left: 50px; margin-right: 50px;">
            <div id="nature" class="margin-top-mobile col-lg-4 text-center" style="cursor: pointer;">
                <h1 style="font-size: 50px; position: absolute; color: white; z-index: 1; top: 8%; left: 50%; transform: translate(-50%, -50%);">Nature</h1>
                <img class="img-fluid" src="albums/nature/cover.jpg" alt="Cover">
            </div>
            <div id="person" class="my-auto margin-top-mobile col-lg-4 text-center">
                    <h1 style="font-size: 50px; position: absolute; color: white; z-index: 1; top: 8%; left: 50%; transform: translate(-50%, -50%);">
                        People</h1>
                    <img class="img-fluid" src="albums/people/Delpo_3.jpg" alt="Cover">
                </div>
            <div id="travel" class="margin-top-mobile col-lg-4 text-center">
                <h1 style="font-size: 50px; position: absolute; color: white; z-index: 1; top: 8%; left: 50%; transform: translate(-50%, -50%);">
                    Travel</h1>
                <img class="img-fluid" src="albums/travel/Ricky_travel.jpg" alt="Cover">
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script type = "text/javascript">
        $('#nature').on('click', () => {
            window.location.href = 'gallery.php?type=nature';
        });
        $('#person').on('click', () => {
            window.location.href = 'gallery.php?type=people';
        });
        $('#travel').on('click', () => {
            window.location.href = 'gallery.php?type=travel';
        });
    </script>

    <!-- <div class="container">
        <div class="row align-items-center" style="left: 50%; position: absolute; transform: translateX(-50%); border: 1px solid black; margin-top: 50px; padding-bottom: 50px;">        
            <div class="col-xs-4 text-center" style="margin-right: 10px; border: 1px solid black; font-size:25px; margin-right: 8px;">
                <a href="https://www.instagram.com/giacomo__guidetti/" target="_blank"><i style="color: grey;" id="instagram" class="fab fa-instagram"></i></a>
            </div>
            <div class="col-xs-4 text-center" style="margin-right: 10px; border: 1px solid black; font-size:25px; margin-right: 8px;">
                <a href="https://www.youtube.com/channel/UCgSxw-jGMHaFckdqYf5m81Q?app=desktop" target="_blank"><i style="color: grey;" id="youtube" class="fab fa-youtube"></i></a>
            </div>
            <div class="col-xs-4 text-center" style="border: 1px solid black; font-size:25px; margin-right: 8px;">
                <a href="https://www.facebook.com/giacomo.guidetti.7" target="_blank"><i style="color: grey;" id="facebook" class="fab fa-facebook"></i></a>
            </div>
        </div>
    </div> -->

</body>

</html>