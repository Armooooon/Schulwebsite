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
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        </head>
        <body>

            <!-- Start Navbar -->
            <nav class="navbar navbar-expand-lg navbar-dark">
              <a class="navbar-brand" href="index.php">
                  <img src="dein_logo.png" alt="Logo">
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav">
                      <!--li class="nav-item active">
                          <a class="nav-link" href="index.php">Startseite</a>
                      </li-->
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Schule
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="lehrkraefte.php">Lehrkräfte</a></li>
                          <li><a class="dropdown-item" href="klassen.php">Klassen</a></li>
                          <li><a class="dropdown-item" href="stundenplan.php">Stundenplan</a></li>
                          <li><a class="dropdown-item" href="essensplan.php">Essensplan</a></li>
                        </ul>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Biografie
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="schulgeschichte.php">Schulgeschichte</a></li>
                        </ul>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Aktuelles
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="aktuelles.php">Aktuelle Nachrichten, Ankündigungen und Ereignisse der Schule</a></li>
                        </ul>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Produktives
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="lernen.php">Lernen</a></li>
                          <li><a class="dropdown-item" href="10br.php">10 BR</a></li>
                          <li><a class="dropdown-item" href="schulsozialarbeit.php">Schulsozialarbeit</a></li>
                        </ul>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Eltern
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="foerderverein.php">Förderverein</a></li>
                        </ul>
                      </li>
                      <!--li class="nav-item">
                          <a class="nav-link" href="#">Dienstleistungen</a>
                      </li-->
                      <li class="nav-item">
                          <a class="nav-link" href="kontakt.php">Kontakt</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="impressum.php">Impressum</a>
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
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
      </body>
      </html>  
        <?php
    }
}