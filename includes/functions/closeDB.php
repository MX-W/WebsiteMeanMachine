<?php
    if(mysqli_close($conn)) {
        return true;
    }
    else
    {
        die("Fehler beim Schließen der Datenbank");
    }
?>