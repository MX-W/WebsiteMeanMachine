<?php
    include("includes/functions/connectDB.php");
    
    $getUsersQuery = "select * from users";
    $allUsers = mysqli_query($conn, $getUsersQuery) 
            or die("SQL-Anweisung fehlgeschlagen");
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

