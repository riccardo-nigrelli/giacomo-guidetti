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
            <a id="home" class="<?php echo ($_SERVER['REQUEST_URI'] === "/") ? "nav-link-active" : "nav-link" ?>" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a id="challenges" class="<?php echo ($_SERVER['REQUEST_URI'] === "/portfolio.php") ? "nav-link-active" : "nav-link" ?>" href="portfolio.php">Portfolio</a>
          </li>
          <li class="nav-item">
            <a id="questions" class="<?php echo ($_SERVER['REQUEST_URI'] === "/#") ? "nav-link-active" : "nav-link" ?>" href="#">About</a>
          </li>
          <li class="nav-item mm-r-15">
            <a id="questions" class="<?php echo ($_SERVER['REQUEST_URI'] === "/#") ? "nav-link-active" : "nav-link" ?>" href="#" style="padding-right: 0px;">Contact</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</div>