<?php
    session_start();

    if(isset($_POST['usernameReg'])) {
        $_SESSION['usernameReg'] = $_POST['usernameReg'];
        $_SESSION['email'] = $_POST['email'];
         
    }
    
    header( 'location: ../../../../index.php?page=registration2');

