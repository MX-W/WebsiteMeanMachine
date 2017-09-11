<?php
if(!isset($_SESSION['userid'])) {
    die('Bitte zuerst einloggen!');
}

$userid = $_SESSION['userid'];
 
echo "Hallo User: ".$userid;
?>
<section>
</section>