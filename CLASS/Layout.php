<?php
//Aron
class Layout
{

  /**
   * 
   * @param type $title
   */
  public static function Header($title, $cssFiles = array())
  {
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

      <title><?php echo $title; ?></title>
      <link rel="stylesheet" href="CSS/styles.css">
      <?php
      foreach ($cssFiles as $cssFile) {
        echo '<link rel="stylesheet" href="CSS/' . $cssFile . '">' . PHP_EOL;
      }
      ?>
      
    </head>

    <body>

      <!-- Slawas Navbar -->
      <header>
        <nav>
          <div class="wrapper">

            <input type="radio" name="slider" id="menu-btn">
            <input type="radio" name="slider" id="close-btn">
            <ul class="nav-links">
              <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label>
              <li><a href="http://127.0.0.1/Schulwebsite/index.php">Home</a></li>
              <li><a href="http://127.0.0.1/Schulwebsite/aktuelles.php">Aktuelles</a></li>

              <li>
                <a href="http://127.0.0.1/Schulwebsite/ueberUns.php" class="desktop-item">Unsere&nbspSchule</a>
                <input type="checkbox" id="showDrop1">
                <label for="showDrop1" class="mobile-item">Unsere&nbspSchule</label>
                <ul class="drop-menu">
                  <li><a href="">Über&nbspuns</a></li>
                  <li><a href="#">Schulstruktur</a></li>
                  <li><a href="#">Schulprogramm</a></li>
                  <li><a href="#">Hausordnung</a></li>
                </ul>
              </li>
              </li>

              <li> <a href="http://127.0.0.1/Schulwebsite/schulsozialarbeit.php" class="desktop-item">Schulsozialarbeit</a>
                <input type="checkbox" id="showDrop2">
                <label for="showDrop2" class="mobile-item">Schulsozialarbeit</label>
                <ul class="drop-menu">
                  <li><a href="">Über&nbspmich</a></li>
                  <li><a href="#">Sozialer&nbspTrainingsraum</a></li>
                  <li><a href="#">Projekte</a></li>
                </ul>

              <li> <a href="http://127.0.0.1/Schulwebsite/schulkonferenz.php" class="desktop-item">Mitwirkungsgremien</a>
                <input type="checkbox" id="showDrop3">
                <label for="showDrop3" class="mobile-item">Mitwirkungsgremien</label>
                <ul class="drop-menu">
                  <li><a href="">Schulkonferenz</a></li>
                  <li><a href="#">Elternrat</a></li>
                  <li><a href="#">Schulsprecher</a></li>
                </ul>

              <li> <a href="http://127.0.0.1/Schulwebsite/berufsorientierung.php" class="desktop-item">Berufsorentierung/Praktika</a>
                <input type="checkbox" id="showDrop4">
                <label for="showDrop4" class="mobile-item">Berufsorentierung/Praktika</label>
                <ul class="drop-menu">
                  <li><a href="">Agentur&nbspfür&nbspArbeit</a></li>
                  <li><a href="#">Praktika</a></li>
                  <li><a href="#">Messen & Co</a></li>
                </ul>

              <li> <a href="http://127.0.0.1/Schulwebsite/foerderverein.php" class="desktop-item">Föderverein</a>
                <input type="checkbox" id="showDrop5">
                <label for="showDrop5" class="mobile-item">Föderverein</label>
                <ul class="drop-menu">
                  <li><a href="">Vorstand</a></li>
                  <li><a href="#">Unterstütze&nbspProjekte</a></li>
                  <li><a href="#">Mitgliederantrag</a></li>
                </ul>

              <li> <a href="http://127.0.0.1/Schulwebsite/SchuelerEltern.php" class="desktop-item">Schüler/Eltern</a>
                <input type="checkbox" id="showDrop6">
                <label for="showDrop6" class="mobile-item">Schüler/Eltern</label>
                <ul class="drop-menu">
                  <li><a href="">Vertauens&nbspLK</a></li>
                  <li><a href="#">FAQ</a></li>
                  <li><a href="#">APPS&nbspder&nbspLernplattform</a></li>
                  <li><a href="#">Downloads</a></li>
                </ul>

              <li><a href="http://127.0.0.1/Schulwebsite/essensplan.php">Essensversorgung</a></li>
            </ul>
            <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
          </div>

          <div class="navlogo">

            <img src="./IMG/Element_1testt.png" alt="Logo" class="navlogo">
          </div>


        </nav>
      </header>
      <!-- End Navbar -->
      <?php
  }


  public static function Footer()
  {
    ?>
      <!-------- Start footer ------->
      <footer class="site-footer">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-4">
                <h6>Stellenausschreibung</h6>
            </div>

            <div class="col-md-4">
                <h6>Kontakt</h6>
            </div>

            <div class="col-md-4">
                <h6>Impressum</h6>
            </div>
        </div>
        <hr>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center" style="margin-top: 1rem;">
                <p class="copyright-text">Copyright &copy; 2024 All Rights Reserved by
                    <a href="#">WA-Nord</a>.
                </p>
            </div>
        </div>
    </div>
</footer>

  <!-------- End footer ------->

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>
<?php
  }

  public static function IMGCarousel($imgpath, $captionTitle = '', $captionText = '')
  {
    ?>
<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="IMG/<?php echo $imgpath; ?>" class="d-block w-100" alt="...">
      <div class="carousel-caption">
        <?php
        if (!empty($captionTitle)) {
          echo '<h5>' . $captionTitle . '</h5>';
        }
        if (!empty($captionText)) {
          echo '<p>' . $captionText . '</p>';
        }
        ?>
      </div>
    </div>
  </div>
</div>
<?php
  }
}