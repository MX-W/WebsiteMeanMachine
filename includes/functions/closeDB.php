<?php
    if(mysqli_close($conn)) {
        echo "Verbindung getrennt";
    }
    else
    {
        die("Fehler beim Schließen der Datenbank");
    }
?>