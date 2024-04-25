<?php 
    // Header des Layouts einbinden
    Layout::Header("foerderverein");
?>

<div class="container" style="display: block;">
    <div class="maintextsu">
        <h1>Unser Förderverein</h1>
        <div class="textsu">
            <p>Sehr geehrte Eltern,</p>
            <p>werden Sie Mitglied unseres Fördervereins! Den Förderverein gibt es bereits seit dem 28.02.1997 (Datum der Gründungsversammlung). Mit einem mitgliederstarken Förderverein können wir unsere Schule, und damit unsere Kinder, noch besser unterstützen. Anträge auf Mitgliedschaft gibt es in der Schule! Der Jahresbeitrag beträgt nur 7,00 €. Sie möchten uns als Sponsor unterstützen? Eine vom Finanzamt anerkannte Spendenbescheinigung gibt es sofort.</p>
        </div>
        <section id="Vorstand">
            <h2>Vorstand des Fördervereins</h2>
            <table class="rounded-border">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Funktion</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Vorstandsmitglieder auflisten -->
                    <tr>
                        <td>K. Kavelmann</td>
                        <td>Vorsitzende</td>
                    </tr>
                    <tr>
                        <td>F. Reppin</td>
                        <td>stellv. Vorsitzender</td>
                    </tr>
                    <tr>
                        <td>A. Fingerloos</td>
                        <td>Schriftführer</td>
                    </tr>
                    <tr>
                        <td>A. Garling</td>
                        <td>Kassenwart</td>
                    </tr>
                    <tr>
                        <td>K. Weißhoff</td>
                        <td>1. Kassenprüfer</td>
                    </tr>
                    <tr>
                        <td>R. Wiese</td>
                        <td>2. Kassenprüfer</td>
                    </tr>
                    <tr>
                        <td>S. Becker</td>
                        <td>1. Beisitzer</td>
                    </tr>
                    <tr>
                        <td>L. Paß-Schober</td>
                        <td>2. Beisitzer</td>
                    </tr>
                    <!-- Weitere Vorstandsmitglieder hier einfügen -->
                </tbody>
            </table>
        </section>
        <div class="text">
            <!-- Dank an Sponsoren -->
            <p>Wir bedanken uns ganz herzlich bei unseren Sponsoren - ganz besonders bei der Firma Kroos.</p>
            <!-- Projekte und Unterstützungen auflisten -->
            <p>Im Jahr 2022 wurde das Projekt "Footballcamp" vom Förderverein unterstützt.</p>
            <p>2023: - Finanzierung des Apfelprojekts in Klasse 3</p>
            <h2>Mitglieder</h2>
            <div class="container text-center">
                <div class="row">
                    <div class="col">
                        <h4>Antrag</h4>
                        <p>Falls Sie Mitglied werden möchten, können Sie hier den Antrag</a> herunterladen.</p>
                        <!-- Button für den Antrag -->
                        <button class="accent-button" onclick="window.open('link_zum_antrag', '_blank')">Antrag herunterladen</button>
                    </div>
                    <div class="col">
                        <h4>Satzung</h4>
                        <p>Sie können auch die <a href="link_zur_satzung">Satzung</a> des Fördervereins einsehen.</p>
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
