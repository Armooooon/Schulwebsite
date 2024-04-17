<?php

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
            <link rel="stylesheet" href="CSS/bootstrap.css">
            <link rel="stylesheet" href="CSS/bootstrap.min.css">
            <link rel="stylesheet" href="JS/bootstrap.js">
        </head>
        <body>

            <!-- Start Navbar -->
            <nav class="navbar navbar-expand-lg navbar-dark">
              <a class="navbar-brand" href="#">
                  <img src="dein_logo.png" alt="Logo">
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                      <li class="nav-item active">
                          <a class="nav-link" href="index.php">Startseite</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#">Über uns</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#">Dienstleistungen</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="kontakt.php">Kontakt</a>
                      </li>
                  </ul>
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
                  <li><a href="http://scanfcode.com/category/c-language/">Schulsekretariat: Frau Weißhoff</a></li>
                  <li><a href="http://scanfcode.com/category/front-end-development/">Telefon: 03998/27110</a></li>
                  <li><a href="http://scanfcode.com/category/back-end-development/">Telefax: 03998/271115</a></li>
                  <li><a href="http://scanfcode.com/category/java-programming-language/">E-Mail: pestalozzischule@demmin.de</a></li>
                  <li><a href="http://scanfcode.com/category/android/">Schulleitung: Frau Dr. M. Brüchner</a></li>
                  <li><a href="http://scanfcode.com/category/templates/">Sprechzeiten: Montag bis Freitag von 07:00 Uhr bis 13:00 Uhr</a></li>
                </ul>
              </div>

              <div class="col-xs-6 col-md-3">
                <h6>Adresse</h6>
                <ul class="footer-links">
                  <li><a href="http://scanfcode.com/about/">Schützenstraße 9</a></li>
                  <li><a href="http://scanfcode.com/contact/">17109 Demmin</a></li>
                  <li><a href="http://scanfcode.com/contribute-at-scanfcode/"></a></li>
                  <li><a href="http://scanfcode.com/privacy-policy/"></a></li>
                  <li><a href="http://scanfcode.com/sitemap/"></a></li>
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
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      </body>
      </html>  
        <?php
    }
}