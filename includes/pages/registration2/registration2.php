<?php
    echo "Sessioneintrag: " . $_SESSION['usernameReg'];
?>

<form action="includes/pages/registration2/functions/registrate.php" method="post">
    <table>
        <tr>
            <td>
                <label for="firstname">Vorname: </label>
            </td>
            <td>
                <input type="text" name="firstname" id="firstname" required/>
            </td>
        </tr>
        <tr>
            <td>
                <label for="lastname">Nachname: </label>
            </td>
            <td>
                <input type="text" name="lastname" id="lastname" required/>
            </td>
        </tr>
        <tr>
            <td>
                <label for="street">Straße: </label>
            </td>
            <td>
                <input type="text" name="street" id="street" required/>
            </td>
        </tr>
        
        <tr>
            <td>
                <label for="number">Hausnummer: </label>
            </td>
            <td>
                <input type="text" name="number" id="number" required/>
            </td>
        </tr>
        <tr>
            <td>
                <label for="zip">Postleitzahl: </label>
            </td>
            <td>
                <input type="text" name="zip" id="zip" required/>
            </td>
        </tr>
        <tr>
            <td>
                <label for="phone">Telefonnummer: </label>
            </td>
            <td>
                <input type="text" name="phone" id="phone" required/>
            </td>
        </tr>
        <tr>
            <td>
                <label for="passwordReg">Passwort: </label>
            </td>
            <td>
                <input type="password" name="passwordReg" id="passwordReg" required/>
            </td>
        </tr>        
        <tr>
            <td>
                <label for="passwordReg2">Passwort bestätigen: </label>
            </td>
            <td>
                <input type="password" name="passwordReg2" id="passwordReg2" required/>
            </td>
        </tr>
        
        <tr>
            <td>
                <a href="index.php?page=registration">Zurück</a>
            </td>
            <td>
                <input type="submit" name="submit" value="Registrieren"/>
            </td>
        </tr>
    </table>
</form>
