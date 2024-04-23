<?php
//Aron
class Layout {

    /**
     * 
     * @param type $title
     */
    public static function Header($title, $cssFiles = array()) {
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title><?php echo $title; ?></title>
            <link rel="stylesheet" href="CSS/styles.css">
             <?php
                foreach ($cssFiles as $cssFile) {
                    echo '<link rel="stylesheet" href="CSS/' . $cssFile . '">' . PHP_EOL;
                }
            ?>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        </head>
        <body>

            <!-- Start Navbar -->
            <nav>
      <div class="wrapper">
    
        <input type="radio" name="slider" id="menu-btn">
        <input type="radio" name="slider" id="close-btn">
        <ul class="nav-links">
          <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label>
          <li><a href="#">Home</a></li>
          <li><a href="#">Aktuelles</a></li>
        
          <li>
            <a href="#" class="desktop-item">Unsere&nbspSchule</a>
            <input type="checkbox" id="showDrop1">
            <label for="showDrop1" class="mobile-item">Unsere&nbspSchule</label>
            <ul class="drop-menu">
              <li><a href="#">Über&nbspuns</a></li>
              <li><a href="#">Schulstruktur</a></li>
              <li><a href="#">Schulprogramm</a></li>
              <li><a href="#">Hausordnung</a></li>
            </ul>
          </li> </li>
     
       <li> <a href="#" class="desktop-item">Schulsozialarbeit</a>
            <input type="checkbox" id="showDrop2">
            <label for="showDrop2" class="mobile-item">Schulsozialarbeit</label>
            <ul class="drop-menu">
              <li><a href="#">Über&nbspmich</a></li>
              <li><a href="#">Sozialer&nbspTrainingsraum</a></li>
              <li><a href="#">Projekte</a></li>
            </ul>

            <li> <a href="#" class="desktop-item">Mitwirkungsgremien</a>
              <input type="checkbox" id="showDrop3">
              <label for="showDrop3" class="mobile-item">Mitwirkungsgremien</label>
              <ul class="drop-menu">
                <li><a href="#">Schulkonferenz</a></li>
                <li><a href="#">Elternrat</a></li>
                <li><a href="#">Schulsprecher</a></li>
              </ul>

              <li> <a href="#" class="desktop-item">Berufsorentierung/Praktika</a>
                <input type="checkbox" id="showDrop4">
                <label for="showDrop4" class="mobile-item">Berufsorentierung/Praktika</label>
                <ul class="drop-menu">
                  <li><a href="#">Agentur&nbspfür&nbspArbeit</a></li>
                  <li><a href="#">Praktika</a></li>
                  <li><a href="#">Messen & Co</a></li>
                </ul>

                <li> <a href="#" class="desktop-item">Föderverein</a>
                  <input type="checkbox" id="showDrop5">
                  <label for="showDrop5" class="mobile-item">Föderverein</label>
                  <ul class="drop-menu">
                    <li><a href="#">Vorstand</a></li>
                    <li><a href="#">Unterstütze&nbspProjekte</a></li>
                    <li><a href="#">Mitgliederantrag</a></li>
                  </ul>

                  <li> <a href="#" class="desktop-item">Schüler/Eltern</a>
                    <input type="checkbox" id="showDrop6">
                    <label for="showDrop6" class="mobile-item">Schüler/Eltern</label>
                    <ul class="drop-menu">
                      <li><a href="#">Vertauens&nbspLK</a></li>
                      <li><a href="#">FAQ</a></li>
                      <li><a href="#">APPS&nbspder&nbspLernplattform</a></li>
                      <li><a href="#">Downloads</a></li>
                    </ul>

                      <li><a href="#">Essensversorgung</a></li>
        </ul>
        <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
      </div> 

      <div class="navlogo">
       
        <img src="../IMG/Element_1testt.png" alt="Logo" class="navlogo">
  </div>


    </nav>
    
          <!-- End Navbar -->
        <?php
    }
    

    public static function Footer() {
        ?>
        <!-------- Start footer ------->
        <footer class="site-footer">
          <div class="container">
            <div class="row">
              <div class="col-sm-12 col-md-6">
                <h6>Urheberrecht</h6>
                <p class="text-justify">Texte, Bilder, Grafiken und Fotos sowie die Gestaltung dieser Internetseiten unterliegen dem Urheberrecht. Sie dürfen von Ihnen nur zum privaten und sonstigen eigenen Gebrauch im Rahmen des § 53 Urheberrechtsgesetz (UrhG) ohne jede Änderung vervielfältigt werden. Eine Verbreitung von Kopien (analog oder digital) oder Auszügen ist nur mit schriftlicher Genehmigung zulässig. Der Nachdruck und die Auswertung von Pressemitteilungen und Reden sind mit Quellenangabe gestattet. Texte, Bilder, Grafiken und sonstige Materialien können ganz oder teilweise dem Urheberrecht Dritter unterliegen. Die Inhalte Dritter sind als solche kenntlich gemacht und dürfen ohne Einwilligung des Rechteinhabers nicht vervielfältigt, öffentlich zugänglich gemacht oder öffentlich wiedergegeben werden.</p>
              </div>

              <div class="col-xs-6 col-md-3">
                <h6>Kontakt</h6>
                <ul class="footer-links">
                  <li>Schulsekretariat: Frau Weißhoff</li>
                  <li>Telefon: 03998/27110</a></li>
                  <li>Telefax: 03998/271115</a></li>
                  <li>E-Mail: pestalozzischule@demmin.de</a></li>
                  <li>Schulleitung: Frau Dr. M. Brüchner</a></li>
                  <li>Sprechzeiten: Montag bis Freitag von 07:00 Uhr bis 13:00 Uhr</a></li>
                </ul>
              </div>

              <div class="col-xs-6 col-md-3">
                <h6>Adresse</h6>
                <ul class="footer-links">
                  <li>Schützenstraße 9</li>
                  <li>17109 Demmin</li>
                  
                  
                  
                </ul>
              </div>
            </div>
            <hr>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-sm-6 col-xs-12">
                <p class="copyright-text">Copyright &copy; 2024 All Rights Reserved by 
             <a href="#">WA-Nord</a>.
                </p>
              </div> 
                </ul>
              </div>
            </div>
          </div>
      </footer>
      <!-------- End footer ------->

      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
      </body>
      </html>  
        <?php
    }
    
    public static function IMGCarousel($imgpath, $captionTitle = '', $captionText = '') {
      ?>
      <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="IMG/<?php echo $imgpath; ?>" class="d-block w-100" alt="...">
            <div class="carousel-caption">
                <?php
                    if (!empty($captionTitle)) {
                        echo '<h5>'.$captionTitle.'</h5>';
                    }
                    if (!empty($captionText)) {
                        echo '<p>'.$captionText.'</p>';
                    }
                ?>
            </div>
          </div>
        </div>
      </div>
      <?php
    }
}