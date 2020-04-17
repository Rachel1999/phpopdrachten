<?php
/*
     User: Rachel1999
     Date: 7-4-2020
     Time: 06:31
     File: login.php
*/
?>

<!-- Header en menu -->
<?php
include "../includes/header.php";
include "../includes/menu.php";

// Bijbehorende script
include "script.php";

// login screen staat automatisch op true, bij opstart krijgen users dit te zien
if($showLoginScreen == true)
{

?>
<link rel="stylesheet" type="text/css" href="css/style.css">

<!-- Uitwerkingen Eindopdracht -->
<main id="wrapper">
    <form action="login.php" method="post">
        <!-- Naam discotheek -->
        <h1>
            Bergheen
        </h1>

        <!-- Omschrijving -->
        <p>
            Log in om onze adresgegevens + openingstijden te zien
        </p>
        <table>
            <!-- Bericht dat wordt getoond als de inloggegevens fout zijn of de velden niet ingevuld zijn -->
            <tr>
                <td></td>
                <td><?php echo $message; ?></td>
            </tr>
            <!-- Vul username in -->
            <tr>
                <td>
                    <label for="username">username</label>
                </td>
                <td>
                    <input type="text" name="username" id="username">
                </td>
            </tr>
            <!-- Vul password in -->
            <tr>
                <td>
                    <label for="pass">password</label>
                </td>
                <td>
                    <input type="password" name="password" id="pass">
                </td>
            </tr>
            <!-- Verzendknop -->
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Login" name="submit">
                </td>
            </tr>
        </table>
    </form>

    <p>
        <!-- Link naar hoofdpagina -->
        <a href="../index.php">Terug naar hoofdpagina</a>
    </p>
    <!-- Footer -->
    <?php
    }

    include "../includes/footer.php";
    ?>

</main>
</body>
</html>