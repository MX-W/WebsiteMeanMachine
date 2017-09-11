<?php
    if (!empty($_POST["q"])) {
        
        include("connectDB.php");
        
        $usernameGET = $_POST["q"];
        
        $usernameGET = strtolower($usernameGET);
        
        $getUsersQuery = "select username from users";
        $allUsers = mysqli_query($conn, $getUsersQuery) 
                or die("SQL-Anweisung fehlgeschlagen");
        
        while ( $row = mysqli_fetch_row($allUsers) )
        {
            if(strcmp($row[0], $usernameGET) == 0)
            {
                echo $usernameGET;
            }
        }
        
        include("closeDB.php");
    
    }

