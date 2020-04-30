<?php
/*
     User: Rachel1999
     Date: 29-4-2020
     Time: 13:59
     File: opdracht61.php
*/
?>

<!-- Header en menu -->
<?php
    include "../../includes/header.php";
    include "../../includes/menu.php";
?>

<!-- Uitwerkingen opdracht 6.1 -->
<main id="wrapper">
    <h1>
        Inloggen
    </h1>
    <p>
        Login met uw gegevens
    </p>

    <!-- Loginformulier -->
    <form action="checklogin.php" method="post">
        <table>
            <!-- Gebruikersnaam -->
            <tr>
                <td>
                    <label for="username">Username</label>
                </td>
                <td>
                    <input type="text" name="username" id="username">
                </td>
            </tr>
            <!-- Wachtwoord -->
            <tr>
                <td>
                    <label for="password">Password</label>
                </td>
                <td>
                    <input type="password" name="password" id="password">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Inloggen" name="submit">
                </td>
            </tr>
        </table>

    </form>

    <p>
        <!-- Link naar hoofdpagina -->
        <a href="../../index.php">Terug naar hoofdpagina</a>
    </p>

    <!-- Footer -->
    <?php
    include "../../includes/footer.php";
    ?>
</main>
</body>
</html>