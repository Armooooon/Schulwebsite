<?php Layout::Header("Essensplan"); ?>

<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="IMG/canteen.png" class="d-block w-100" alt="...">
      <div class="carousel-caption">
        <!--h5>Unsere Lehrer</h5>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p-->
      </div>
    </div>
  </div>
</div>

<div class="container headline">
    <h2>Essenversorgung</h2>
</div>
<div class="container headlineText">
    <p>Seit dem 17.10.2022 können Ihre Kinder an der Essenversorgung teilnehmen.
        Dazu finden Sie im unteren Bereich einen <b>Elternbrief des Essenanbieters</b> „lvenacker Kinnerkök", den <b>Speiseplan</b> für die Woche und die entsprechende <b>Anmeldung mit Einzugsermächtigung</b>.
Bitte melden Sie Ihre Kinder in der Ferienwoche an, so dass die Essenversorgung reibungslos stattfinden kann.
Die Essenausgabe findet im Imbisscontainer auf dem Schulhof von 11.00 Uhr bis 13.00 Uhr statt</p>
</div>

<div class="container" style="margin-bottom: 25px;">
    <?php foreach($fileList as $file): ?>
        <div class="card align-items-center" style="text-align: center; margin-right: 25px;">
          <img src="IMG/pdf_icon.png" class="card-img-top" style="width: 150px; height: 150px;" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?php echo $file['filename']; ?></h5>
            <a href="FILES/<?php echo $file['file']; ?>" download="<?php echo $file['file']; ?>" class="card-link btn btn-dark">Download</a>
          </div>
        </div>
    <?php endforeach; ?>
</div>

<?php Layout::Footer();