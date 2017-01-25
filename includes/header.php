
<header>


<!--    <div class="login_container">-->
<div class="login_container">
        <form class="login_box" action="" method="post" type="text/plain" id="login_form">
            <label for="benutzername">Benutzername:</label>
            <input type="text" name="benutzername" id="benutzername">
            <label for="passwort">Passwort:</label>
            <input type="password" name="passwort" id="passwort">
            <input type="submit" value="Send" id="send">
            <div class="clear"></div>
        </form>
</div>

        <a href="index.php">
            <img id="logo" src="<?php echo $projectDir . "img/logo.png"; ?>" alt="Logo">
        </a>
        
<!--        <form action="" method="post" type="text/plain" id="login_form">
            <label for="benutzername">Benutzername:</label>
            <input type="text" name="benutzername" id="benutzername">
            <label for="passwort">Passwort:</label>
            <input type="password" name="passwort" id="passwort">
            <div class="clear"></div>
        </form>-->

<!--    </div>-->




    <!--Hier spaeter Ausgabe von evtl. zwoschengespeicherten Mitteilungen einfuegen-->
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><div class="line"></div><a href="index.php?page=band">The Band</a>
                <ul>
                    <li><a href="index.php?page=andi">Andi</a></li>
                    <li><a href="index.php?page=daniel">Daniel</a></li>
                    <li><a href="index.php?page=max">Max</a></li>
                    <li><a href="index.php?page=timo">Timo</a></li>
                </ul>
            </li>
            <li><div class="line"></div><a href="index.php?page=music">Music</a>
                <ul>
                    <li><a href="index.php?page=youtube">Youtube</a></li>
                    <li><a href="index.php?page=soundcloud">Soundcloud</a></li>
                    <li><a href="index.php?page=spotify">Spotify</a></li>
                </ul>
            </li>
            <li><div class="line"></div><a href="index.php?page=media">Media</a>
                <ul>
                    <li><a href="index.php?page=photos">Photos</a></li>
                    <li><a href="index.php?page=video">Video</a></li>
                </ul>
            </li>
            <li><div class="line"></div><a href="index.php?page=tourdates">Tourdates</a></li>
            <li><div class="line"></div><a href="index.php?page=shop">Shop</a></li>
            <li><div class="line"></div><a href="index.php?page=contact">Contact</a></li>
        </ul>

    </nav>


    
</header>