<div id="card-container" class='container-fluid grid-custom p-80'>
  <!-- <div class="row justify-content-md-center text-center">
    <div style="cursor: pointer;" onclick="window.location.href='#'" class="col-md-4" style="margin: 30px; padding: 8px;">
      <h1 class="font-giami title-company-card">Marrakech</h1>
      <img src="albums/travel/giami/giami_2.jpg" class="img-fluid"/>
    </div>
    <div style="cursor: pointer;" onclick="window.location.href='#'" class="col-md-4 margin-top-mobile" style="margin: 30px; padding: 8px;">
      <h1 class="font-card-company title-company-card">Gozo</h1>
      <img src="albums/travel/vigneti/uva_3.jpg" class="img-fluid"/>
    </div>
  </div> -->
  <!-- <div class="row justify-content-md-center text-center m-top-30">
    <div style="cursor: pointer;" onclick="window.location.href='#'" class="col-md-4" style="margin: 30px; padding: 8px;">
      <h1 class="font-giami title-company-card">Bergen</h1>
      <img src="albums/travel/giami/giami_2.jpg" class="img-fluid"/>
    </div>
    <div style="cursor: pointer;" onclick="window.location.href='gallery.php?type=travel&trip=corfu'" class="col-md-4 margin-top-mobile" style="margin: 30px; padding: 8px;">
      <h1 class="font-card-company title-company-card">Corfù</h1>
      <img src="albums/travel/Corfu/barchetta.jpg" class="img-fluid"/>
    </div>
  </div> -->
  <div class="row justify-content-md-center text-center m-top-30">
    <div style="cursor: pointer;" onclick="window.location.href='gallery.php?type=travel&trip=corfu'" class="col-md-4 margin-top-mobile" style="margin: 30px; padding: 8px;">
      <h1 class="font-card-company title-company-card">Corfù</h1>
      <img src="albums/travel/Corfu/barchetta.jpg" class="img-fluid"/>
    </div>
  </div>
</div>

<?php

  if ( $_GET['type'] === 'travel' && $_GET['trip'] === 'corfu' ) {
    include_once('corfu.php');
    echo "<script>$('#card-container').addClass('hidden-div');</script>";
  }

?>