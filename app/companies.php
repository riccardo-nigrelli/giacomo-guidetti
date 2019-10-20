<div id="card-container" class='container-fluid grid-custom p-80'>
  <div class="row justify-content-md-center text-center">
    <div style="cursor: pointer;" onclick="window.location.href='gallery.php?type=companies&name=giami'" class="col-md-4" style="margin: 30px; padding: 8px;">
      <h1 class="font-giami title-company-card">Giami Srl</h1>
      <img src="albums/companies/giami/giami_2.jpg" class="img-fluid"/>
    </div>
    <div style="cursor: pointer;" onclick="window.location.href='gallery.php?type=companies&name=vineyards'" class="col-md-4 margin-top-mobile" style="margin: 30px; padding: 8px;">
      <h1 class="font-card-company title-company-card">Vigneti</h1>
      <img src="albums/companies/vigneti/uva_3.jpg" class="img-fluid"/>
    </div>
  </div>
</div>

<?php 

  if ( $_GET['type'] === 'companies' && $_GET['name'] === 'vineyards' ) {
    include_once('vineyards.php');
    echo "<script>$('#card-container').addClass('hidden-div');</script>";
  }
  if ( $_GET['type'] === 'companies' && $_GET['name'] === 'giami' ) {
    include_once('giami.php');
    echo "<script>$('#card-container').addClass('hidden-div');</script>";
  }

?>