<?php
/*
     User: Rachel1999
     Date: 5-4-2020
     Time: 16:00
     File: opdracht54.php
*/
?>

<!-- Header en menu -->
<?php
include "../includes/header.php";
include "../includes/menu.php";
?>

<!-- Uitwerkingen opdracht 5-4 -->
<main id="wrapper">
    <!-- Doorrijden of niet? -->
    <h2>
        Doorrijden of niet?
    </h2>
    <hr>
    <form action="form_data54.php" method="post">
        <table>
            <!-- Komt er een ambulance aan of niet? -->
            <tr>
                <td>
                    <label>Komt er een ambulance aan?</label>
                </td>
                <td>
                    <input type="radio" name="ambulance" value="Ja" id="coming">
                    <label for="coming">Ja</label>
                    <input type="radio" name="ambulance" value="Nee" id="notComing">
                    <label for="notComing">Nee</label>
                </td>
            </tr>
            <!-- Wat is de kleur van de stoplicht? -->
            <tr>
                <td>
                    <label>Stoplicht kleur?</label>
                </td>
                <td>
                    <!-- Rood -->
                    <input type="radio" name="color" value="Rood" id="red">
                    <label for="red">Rood</label>

                    <!-- Groen -->
                    <input type="radio" name="color" value="Groen" id="green">
                    <label for="green">Groen</label>

                    <!-- Oranje -->
                    <input type="radio" name="color" value="Oranje" id="orange">
                    <label for="orange">Oranje</label>
                </td>
            </tr>
            <!-- Verzendknop -->
            <tr>
                <td>
                    <input type="submit" value="Verzend">
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
    include "../includes/footer.php";
    ?>
</main>
</body>
</html>