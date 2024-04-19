<?php Layout::Header("Kontakt"); ?>
<?php require "php/functions.php"?>

<img class="LandingpagePicture" src="IMG/classroom.jpg" alt="Classroom-picture">

<!-------Start Aktuelles------->
<div class="container">
  <div class="aktuelles-container">
    <img src="../IMG/teacher.jpg">
      
  </div>
  <div class="aktuelles-container">
  <?php
$titel = getAktuelles(); // Call the function and assign its return value to $titel
foreach($titel as $item){
 ?>
    
    <a href="titel.php?category=<?php echo urlencode($item['title'])?>">
      <?php echo ucfirst($item['title'])?>
    </a>

  <?php
}
?>
      <h2>Aktuelle Veranstalltungen</h2>
      <p>Rate mal.. Ja! Hier sind aktuelle Veranstaltungen! WoopWoop!</p>
  </div>
</div>
<!-------End Aktuelles------->

<?php Layout::Footer();