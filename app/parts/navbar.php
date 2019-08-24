<div class="row justify-content-md-center text-center" style="margin-top: 50px; margin-left: 50px; margin-right: 50px;">
  <div class="col-12">
    <nav class="navbar navbar-expand-md" style="padding: 0px">
      <a href="/" class="mobile-centering navbar-brand">
        <h2 class="font-cinzel" style="color: grey;">Giacomo Guidetti</h2>
      </a>
      <button class="mobile-centering text-center navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar7">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="mobile-centering navbar-collapse collapse" id="navbar7" style="padding: 0px">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a id="home" class="<?php echo ($_SERVER['REQUEST_URI'] === "/") ? "nav-link-active font-link-menu" : "nav-link font-link-menu" ?>" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a id="portfolio" class="<?php echo ($_SERVER['REQUEST_URI'] === "/portfolio.php") ? "nav-link-active font-link-menu" : "nav-link font-link-menu" ?>" href="portfolio.php">Portfolio</a>
          </li>
          <li class="nav-item">
            <a id="about" class="<?php echo ($_SERVER['REQUEST_URI'] === "/about.php") ? "nav-link-active font-link-menu" : "nav-link font-link-menu" ?>" href="about.php">About</a>
          </li>
          <li class="nav-item mm-r-15">
            <a id="contact" class="<?php echo ($_SERVER['REQUEST_URI'] === "/contact.php") ? "nav-link-active font-link-menu" : "nav-link font-link-menu" ?>" href="contact.php" style="padding-right: 0px;">Contact</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</div>