<?php
// Header des Layouts einbinden
Layout::Header("foerderverein");
?>
<!-- steven hat gekocht -->
<div class="container">
  <div class="main-text-container">
    <h1 class="ueberschriftSU">Unser Förderverein</h1>
    <div class="main-text">
      <p class="textSU">Sehr geehrte Eltern,</p>
      <p class="textSU">Werden Sie Mitglied unseres Fördervereins! Den Förderverein gibt es bereits seit dem 28.02.1997 (Datum der Gründungsversammlung). Mit einem mitgliederstarken Förderverein können wir unsere Schule, und damit unsere Kinder, noch besser unterstützen. Anträge auf Mitgliedschaft gibt es in der Schule! Der Jahresbeitrag beträgt nur 7,00 €. Sie möchten uns als Sponsor unterstützen? Eine vom Finanzamt anerkannte Spendenbescheinigung gibt es sofort.</p>
    </div>
    <section id="vorstand">
      <h1 class="ueberschriftSU">Vorstand des Fördervereins</h1>
      <table class="rounded-border">
        <thead>
          <tr>
            <th class="tabelleSU">Name</th>
            <th class="tabelleSU">Funktion</th>
          </tr>
        </thead>
        <tbody>
          <!-- Vorstandsmitglieder auflisten -->
          <tr class="tabelleinhalt1SU">
            <td class="tabelleninhalt2SU">K. Kavelmann</td>
            <td class="tabelleninhalt2SU">Vorsitzende</td>
          </tr>
          <tr class="tabelleinhalt1SU">
            <td class="tabelleninhalt2SU">F. Reppin</td>
            <td class="tabelleninhalt2SU">stellv. Vorsitzender</td>
          </tr>
          <tr class="tabelleinhalt1SU">
            <td class="tabelleninhalt2SU">A. Fingerloos</td>
            <td class="tabelleninhalt2SU">Schriftführer</td>
          </tr>
          <tr class="tabelleinhalt1SU">
            <td class="tabelleninhalt2SU">A. Garling</td>
            <td class="tabelleninhalt2SU">Kassenwart</td>
          </tr>
          <tr class="tabelleinhalt1SU">
            <td class="tabelleninhalt2SU">K. Weißhoff</td>
            <td class="tabelleninhalt2SU">1. Kassenprüfer</td>
          </tr>
          <tr class="tabelleinhalt1SU">
            <td class="tabelleninhalt2SU">R. Wiese</td>
            <td class="tabelleninhalt2SU">2. Kassenprüfer</td>
          </tr>
          <tr class="tabelleinhalt1SU">
            <td class="tabelleninhalt2SU">S. Becker</td>
            <td class="tabelleninhalt2SU">1. Beisitzer</td>
          </tr>
          <tr class="tabelleinhalt1SU">
            <td class="tabelleninhalt2SU">L. Paß-Schober</td>
            <td class="tabelleninhalt2SU">2. Beisitzer</td>
          </tr>
          <!-- Weitere Vorstandsmitglieder hier einfügen -->
        </tbody>
      </table>
    </section>
    <div class="additional-text">
      <!-- Dank an Sponsoren -->
      <p class="textSU">Wir bedanken uns ganz herzlich bei unseren Sponsoren - ganz besonders bei der Firma Kroos.</p>
      <!-- Projekte und Unterstützungen auflisten -->
      <p class="textSU">Im Jahr 2022 wurde das Projekt "Footballcamp" vom Förderverein unterstützt.</p>
      <p class="textSU">2023: - Finanzierung des Apfelprojekts in Klasse 3</p>
      <h1 class="ueberschriftSU"> Mitglied </h1>
      <div class="member-info-container text-center">
        <div class="row">
          <div class="col">
            <h1 class="ueberschriftSU"> Mitglied </h1>
            <p class="textSU">Falls Sie Mitglied werden möchten, können Sie hier den Antrag</a> herunterladen.</p>
          </div>
          <div class="col">
            <h1 class="ueberschriftSU"> Satzung </h1>
            <p class="textSU">Sie können auch die Satzung des Fördervereins einsehen.</p>
          </div>
          <!-- Button für die Satzung -->
          <!-- Samir Abdul  -->
          <div class="pizza d-flex justify-content-around">
            <button class="accent-button" onclick="window.open('link_zum_antrag', '_blank')">Antrag herunterladen</button>
            <button class="accent-button" onclick="window.open('link_zum_antrag', '_blank')">Satzung einsehen</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
// Footer des Layouts einbinden
Layout::Footer();
?>