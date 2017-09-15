<?php
session_start();
if(isset($_POST)) {
    $_SESSION['firstname'] = $_POST['firstname'];
    $_SESSION['lastname'] = $_POST['lastname'];
    $_SESSION['street'] = $_POST['street'];
    $_SESSION['number'] = $_POST['number'];
    $_SESSION['zip'] = $_POST['zip'];
    $_SESSION['phone'] = $_POST['phone'];
    $_SESSION['password'] = $_POST['passwordReg'];
    
    include("../../../functions/connectDB.php");
    
    $query = "INSERT INTO `users` (`username`, `password`, `firstname`,"
            . " `lastname`, `email`, `street`, `number`, `zip`, `phone`) VALUES ('"
            . $_SESSION['usernameReg']. "', '"
            . $_SESSION['password']. "', '"
            . $_SESSION['firstname']. "', '"
            . $_SESSION['lastname']. "', '"
            . $_SESSION['email']. "', '"
            . $_SESSION['street']. "', '"
            . $_SESSION['number']. "', '"
            . $_SESSION['zip']. "', '"
            . $_SESSION['phone']. "')";
    
    if(!mysqli_query($conn, $query))
    {
        echo mysqli_errno($conn);
        echo mysqli_error($conn);
    }
    
    include("../../../functions/closeDB.php");
    
    header("location: ../../../../index.php?page=home");
}

