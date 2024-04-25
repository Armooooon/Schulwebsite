@echo off
setlocal enabledelayedexpansion

rem Pfade zu den Entity + Controller klassen
set "entitysPath=C:\Users\Aron Halaoui\Desktop\xampp\htdocs\Schulwebsite\Entitys"
set "controllerPath=C:\Users\Aron Halaoui\Desktop\xampp\htdocs\Schulwebsite\controller"

rem Schleife, die durch jede Entityklasse geht
for %%f in ("%entitysPath%\*.*") do (
    
    set "filename=%%~nf"
    set "extension=%%~xf"
    set "classname=!filename:~0,1!!filename:~1!"

    
    set "classname=!classname:~0,1!!classname:~1!"

   
    set "controllername=controller!classname!.php"

    echo Verarbeite Datei: %%f
    echo Dateiname: !filename!
    echo Klassenname: !classname!
    echo Controllername: !controllername!

    
    type nul > "%controllerPath%\!controllername!"
)

echo Alle Dateien wurden erstellt!

pause
