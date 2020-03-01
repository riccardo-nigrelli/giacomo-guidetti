<div id="card-container" class='container-fluid grid-custom p-80'>

  <div class="row justify-content-md-center text-center m-top-30">
    <div style="cursor: pointer;" onclick="window.location.href='gallery.php?type=travel&trip=corfu'" class="col-md-4 margin-top-mobile" style="margin: 30px; padding: 8px;">
      <h1 class="font-card-company title-company-card">Corfù</h1>
      <img src="albums/travel/Corfu/barchetta.jpg" class="img-fluid"/>
    </div>
    <div style="cursor: pointer;" onclick="window.location.href='gallery.php?type=travel&trip=gozo'" class="col-md-4 margin-top-mobile" style="margin: 30px; padding: 8px;">
      <h1 class="font-card-company title-company-card">Gozo</h1>
      <img src="albums/travel/Gozo/rocce.jpg" class="img-fluid"/>
    </div>
  </div>
  
  <div class="row justify-content-md-center text-center m-top-30">
    <div style="cursor: pointer;" onclick="window.location.href='gallery.php?type=travel&trip=bergen'" class="col-md-4 margin-top-mobile" style="margin: 30px; padding: 8px;">
      <h1 class="font-card-company title-company-card">bergen</h1>
      <img src="albums/travel/Bergen/aurora.jpg" class="img-fluid"/>
    </div>
    <div style="cursor: pointer;" onclick="window.location.href='gallery.php?type=travel&trip=marrakech'" class="col-md-4 margin-top-mobile" style="margin: 30px; padding: 8px;">
      <h1 class="font-card-company title-company-card">Marrakech</h1>
      <img src="albums/travel/Marrakech/tetti.jpg" class="img-fluid"/>
    </div>
  </div>
  <!-- <div class="row justify-content-md-center text-center m-top-30">
    <div style="cursor: pointer;" onclick="window.location.href='gallery.php?type=travel&trip=corfu'" class="col-md-4 margin-top-mobile" style="margin: 30px; padding: 8px;">
      <h1 class="font-card-company title-company-card">Corfù</h1>
      <img src="albums/travel/Corfu/barchetta.jpg" class="img-fluid"/>
    </div>
  </div> -->
</div>

<?php

  if ( $_GET['type'] === 'travel' && $_GET['trip'] === 'corfu' ) {
    include_once('corfu.php');
    echo "<script>$('#card-container').addClass('hidden-div');</script>";
  }
  
  if ( $_GET['type'] === 'travel' && $_GET['trip'] === 'gozo' ) {
    include_once('gozo.php');
    echo "<script>$('#card-container').addClass('hidden-div');</script>";
  }
  
  if ( $_GET['type'] === 'travel' && $_GET['trip'] === 'marrakech' ) {
    include_once('marrakech.php');
    echo "<script>$('#card-container').addClass('hidden-div');</script>";
  }
  
  if ( $_GET['type'] === 'travel' && $_GET['trip'] === 'bergen' ) {
    include_once('bergen.php');
    echo "<script>$('#card-container').addClass('hidden-div');</script>";
  }

?>