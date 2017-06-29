<?php
    $server = "localhost";
    $user = "root";
    $pw = "";
    $db = "mean_machine_db";

    $conn = mysqli_connect($server, $user, $pw, $db);
    if(mysqli_connect_errno())
    {
        echo "Verbindung fehlgeschlagen"."<br>".mysqli_connect_errno();
    }
?>
