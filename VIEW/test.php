<?php
// Instanziierung des Adresse-Controllers mit der PDO-Verbindung
$controlleradresse = new controlleradresse(db::$pdo);

// Abrufen aller Adressen
$adressen = $controlleradresse->getAllAdressen();
?>

<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adressen</title>
  <!-- Hier könntest du CSS-Verknüpfungen für das Styling der Tabelle einfügen -->
  <!-- Beispiel: <link rel="stylesheet" href="styles.css"> -->
</head>

<body>

  <h1>Adressen</h1>

  <!-- HTML-Tabelle zur Anzeige der Daten -->
  <table>
    <tr>
      <th>ID</th>
      <th>Straße</th>
      <th>PLZ</th>
      <th>Ort</th>
    </tr>

    <!-- Durchlaufen der Adressdaten und Anzeigen in der Tabelle -->
    <?php foreach ($adressen as $adresse) : ?>
      <tr>
        <td><?php echo $adresse['idadresse']; ?></td>
        <td><?php echo $adresse['strasse']; ?></td>
        <td><?php echo $adresse['plz']; ?></td>
        <td><?php echo $adresse['ort']; ?></td>
      </tr>
    <?php endforeach; ?>
  </table>

</body>

</html>