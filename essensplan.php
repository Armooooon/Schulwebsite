<?php
require_once 'CLASS/class.php';


$directory = "FILES/essensplan/";
$fileList = array();

// Öffne Verzeichnis und lies Inhalte
if ($handle = opendir($directory)) {
    // Iteriere über jede Datei im Verzeichnis
    while (($file = readdir($handle)) !== false) {
        // Überprüfe, ob das Element ein reguläre Datei ist
        if (is_file($directory . $file)) {
            // Extrahiere den Dateinamen mit und ohne die Endung ".pdf"
            $filename_with_extension = $file;
            $filename_without_extension = pathinfo($file, PATHINFO_FILENAME);

            // Füge den Dateinamen zum Array hinzu (fileList[file], und fileList[filename])
            $fileList[] = array(
                'file' => $filename_with_extension,
                'filename' => $filename_without_extension
            );
        }
    }
    // Schließe das Verzeichnis (ganz wichtig)
    closedir($handle);
}

//view
require_once 'VIEW/essensplan.php';