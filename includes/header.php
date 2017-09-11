<!DOCTYPE html>

<header class="header">
    
    <!-- Navigation bar -->
    <nav class="nav">
        <ul class="mainMenuList col-12">
            <li class="mainMenuItem"><a href="index.php" onclick="beActive(event.target)">Home</a></li>
            <li class="mainMenuItem"><a href="index.php?page=band" onclick="beActive(event.target)">The Band</a>
                <ul class="dropButton">
                    <li class="subMenuItem"><a href="index.php?page=andi">Andi</a></li>
                    <li class="subMenuItem"><a href="index.php?page=daniel">Daniel</a></li>
                    <li class="subMenuItem"><a href="index.php?page=max">Max</a></li>
                    <li class="subMenuItem"><a href="index.php?page=timo">Timo</a></li>
                </ul>
            </li>
            <li class="mainMenuItem"><a href="index.php?page=music" onclick="beActive(event.target)">Music</a>
                <ul class="dropButton">
                    <li class="subMenuItem"><a href="index.php?page=youtube">Youtube</a></li>
                    <li class="subMenuItem"><a href="index.php?page=soundcloud">Soundcloud</a></li>
                    <li class="subMenuItem"><a href="index.php?page=spotify">Spotify</a></li>
                </ul>
            </li>
            <li class="mainMenuItem"><a href="index.php?page=media" onclick="beActive(event.target)">Media</a>
                <ul class="dropButton">
                    <li class="subMenuItem"><a href="index.php?page=photos">Photos</a></li>
                    <li class="subMenuItem"><a href="index.php?page=video">Video</a></li>
                </ul>
            </li>
            <li class="mainMenuItem"><a href="index.php?page=tourdates" onclick="beActive(event.target)">Tourdates</a></li>
            <li class="mainMenuItem"><a href="index.php?page=shop" onclick="beActive(event.target)">Shop</a></li>
            <li class="mainMenuItem"><a href="index.php?page=contact" onclick="beActive(event.target)">Contact</a></li>
            <li class="mainMenuItem lastRegularItem"><a href="index.php?page=profile">Profile</a></li>
            <li class="mainMenuItem" id="tooltipContainer"><a onclick="showLogin()">Login</a>
                
            <!-- Login form -->
                <form method="POST" id="loginForm" action="includes/functions/login.php">
                    <table>
                        <tr>
                            <td>
                                <label for="username">Benutzername:</label>
                            </td>
                            <td>
                                <input type="text" name="username" id="username">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="password">Passwort:</label>
                            </td>
                            <td>
                                <input type="password" name="password" id="password">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="submit" value="Anmelden" id="send">
                            </td>
                            <td>
                                <a id="registration" href="index.php?page=registration">Registrieren</a>
                            </td>
                        </tr>
                    </table>
                </form>
            </li>
        </ul>
    </nav>
</header>
