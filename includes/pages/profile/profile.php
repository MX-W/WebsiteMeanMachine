<?php
if(!isset($_SESSION['userid'])) {
    echo('<div class="row">Bitte zuerst einloggen oder registrieren!</div>');
    
    echo('<div class="row"><a class="link" onclick="showLogin()">zum Login</a></div>');
}else {
    $userid = $_SESSION['userid'];
    
    include("includes/functions/connectDB.php");
    
    $query = "select * from users where user_id=" . $_SESSION['userid'];
    
    $result = mysqli_query($conn, $query);
    $userData = mysqli_fetch_assoc($result);    
?>

<h1>Hallo <?php print $userData['username'] ?> </h1>

<p>Das ist Ihr Profil. <br/> Sie können hier sehen welche Daten von Ihnen abgespeichert wurden.</p>

<p>Vorname: <?php print $userData['firstname'] ?></p>
<p>Nachname: <?php print $userData['lastname'] ?></p>
<p>E-Mail: <?php print $userData['email'] ?></p>
<p>Straße: <?php print $userData['street'] ?></p>
<p>Hausnummer: <?php print $userData['number'] ?></p>
<p>Postleitzahl: <?php print $userData['zip'] ?></p>
<p>Telefonnummer: <?php print $userData['phone'] ?></p>

<a class="link" href="includes/pages/profile/functions/logout.php">Abmelden</a>
    
<?php
    include("includes/functions/closeDB.php");
}
?>


<section>
</section>