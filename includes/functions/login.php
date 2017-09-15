<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

include("connectDB.php");
$getUserQuery = "SELECT user_id, password FROM users WHERE username='" . $username . "' AND password='". $password . "'";
$currentUserArray = mysqli_query($conn, $getUserQuery)
or die("SQL-Anweisung fehlgeschlagen" . mysqli_error($conn));

$currentUser = mysqli_fetch_array($currentUserArray);

include("closeDB.php");

if ($currentUser !== false && strcmp($password, $currentUser['password']) == 0) {
    echo ($currentUser["user_id"]);
    $userID = $currentUser['user_id'];
    $_SESSION['userid'] = $userID;
    
    header('Location: ../../index.php?page=profile');
}else {
    
}
