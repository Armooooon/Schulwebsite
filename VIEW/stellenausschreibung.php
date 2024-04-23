<?php Layout::Header("stellenausschreibung"); ?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stellenausschreibungen - Pestalozzi-Schule Demmin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            color: #343a40;
        }
        header {
            text-align: center;
            background-color: #343a40;
            color: #fff;
            padding: 100px 0;
        }
        main {
            padding: 20px;
            max-width: 800px;
            margin: 0 auto;
        }
        article {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        h1, h2 {
            color: #343a40;
            margin-top: 0;
        }
        p, ul {
            margin-bottom: 10px;
        }
        footer {
            background-color: #343a40;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }
        @media only screen and (max-width: 600px) {
            header h1 {
                font-size: 24px;
            }
            main {
                padding: 10px;
            }
            article {
                margin-bottom: 20px;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Stellenausschreibungen</h1>
    </header>
    <main>
        <article>
            <h2>Lehrer/in für Mathematik</h2>
            <p>Die Pestalozzi-Schule in Demmin sucht eine/n qualifizierte/n Lehrer/in für Mathematik.</p>
            <p><strong>Anforderungen:</strong></p>
            <ul>
                <li>Abgeschlossenes Studium in Mathematik oder vergleichbare Qualifikation</li>
                <li>Erfahrung im Unterrichten von Mathematik in der Sekundarstufe</li>
                <li>Engagement und Freude am Umgang mit Schülern</li>
            </ul>
            <p><strong>Bewerbungsfrist:</strong> 30. April 2024</p>
            <p><strong>Bewerbungen an:</strong> <a href="mailto:bewerbung@pestalozzi-demmin.de">bewerbung@pestalozzi-demmin.de</a></p>
        </article>
        
        <article>
            <h2>Sozialpädagoge/in</h2>
            <p>Die Pestalozzi-Schule in Demmin sucht eine/n Sozialpädagoge/in zur Unterstützung des Schulteams.</p>
            <p><strong>Anforderungen:</strong></p>
            <ul>
                <li>Abgeschlossenes Studium im Bereich Sozialpädagogik oder vergleichbare Qualifikation</li>
                <li>Erfahrung in der Arbeit mit Jugendlichen</li>
                <li>Teamfähigkeit und Kommunikationsstärke</li>
            </ul>
            <p><strong>Bewerbungsfrist:</strong> 15. Mai 2024</p>
            <p><strong>Bewerbungen an:</strong> <a href="mailto:bewerbung@pestalozzi-demmin.de">bewerbung@pestalozzi-demmin.de</a></p>
        </article>
    </main>
    <footer>
        <p><strong>Kontakt:</strong> <a href="tel:+49000000000" style="color: #fff;">0000-000000</a> | <strong>Email:</strong> <a href="mailto:info@pestalozzi-demmin.de" style="color: #fff;">info@pestalozzi-demmin.de</a></p>
    </footer>
</body>
</html>

<?php Layout::Footer(); ?>
