@echo off
setlocal enabledelayedexpansion

rem Pfade für Entitys und Controller festlegen
set "entitysPath=C:\Users\Aron Halaoui\Desktop\xampp\htdocs\Schulwebsite\Entitys"
set "controllerPath=C:\Users\Aron Halaoui\Desktop\xampp\htdocs\Schulwebsite\controller"

rem Durch die Entitys-Dateien iterieren
for %%f in ("%entitysPath%\*.*") do (
    rem Dateiname und Klassenname extrahieren
    set "filename=%%~nf"
    set "extension=%%~xf"
    set "classname=!filename:~0,1!!filename:~1!"

    rem Klassenname groß schreiben
    set "classname=!classname:~0,1!!classname:~1!"

    rem Controller-Dateiname zusammenstellen
    set "controllername=controller!classname!.php"

    echo Verarbeite Datei: %%f
    echo Dateiname: !filename!
    echo Klassenname: !classname!
    echo Controllername: !controllername!

    rem Erstellen der leeren Controller-Datei
    type nul > "%controllerPath%\!controllername!"
)

echo Alle Dateien wurden erstellt!

pause
