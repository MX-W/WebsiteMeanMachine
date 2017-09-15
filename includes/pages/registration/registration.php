<p>Das ist die Registration</p>

<form method="POST" action="includes/pages/registration/functions/transfer.php">
    <table border="0">
        <tr>
            <td>
                <label for="usernameReg">Benutzername: </label>
            </td>
            <td>
                <input type="text" name="usernameReg" id="usernameReg"
                       required value="<?php echo trim($_SESSION['usernameReg']); ?>"/>
            </td>
        </tr>
        <tr>
            <td>
                <label for="email">Email: </label>
            </td>
            <td>
                <input type="text" name="email" id="email"
                       required value="<?php echo trim($_SESSION['email']); ?>"/>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="submit" value="Weiter">
            </td>
        </tr>
    </table>
</form>
    
<?php
    if(isset($_SESSION['usernameReg']) && isset($_SESSION['email'])) {
        $_SESSION['usernameReg'] = NULL;
        $_SESSION['email'] = NULL;
    }
?> 