<?php
/*
     User: Rachel1999
     Date: 24-3-2020
     Time: 10:46
     File: opdracht53.php
*/
?>

<!-- Header en menu -->
<?php
include "../includes/header.php";
include "../includes/menu.php";

// Functions
include "includes/functions53.php";
?>

<!-- Uitwerkingen opdracht 5-3 -->
<main id="wrapper">
    <!-- Corona enquete -->
    <h1>
        Taak 1 - opdracht53.php
    </h1>
    <h2>
        Corona Enquete:
    </h2>
    <hr>
    <!-- Formulier corona enquete -->
    <form action="form_data53.php" method="post">
        <table>
            <!-- Naam -->
            <tr>
                <td>
                    <label for="name">Wat is je naam:</label>
                </td>
                <td>
                    <input type="text" name="name" id="name">
                </td>
            </tr>
            <!-- Leeftijd -->
            <tr>
                <td>
                    <label for="age">Wat is je leeftijd:</label>
                </td>
                <td>
                    <input type="number" name="age" id="age">
                </td>
            </tr>
            <!-- In welke gemeente woon je -->
            <tr>
                <td>
                    <label for="township">Gemeente</label>
                </td>
                <td>
                    <select name="township" id="township">
                        <option>Den Bosch</option>
                        <option>Drunen</option>
                        <option>Vlijmen</option>
                        <option>Waalwijk</option>
                    </select>
                </td>
            </tr>
            <!-- Aantal inwoners in je gemeente -->
            <tr>
                <td>
                    <label for="citizens">Aantal inwoners gemeente</label>
                </td>
                <td>
                    <input type="text" name="citizens" id="inhabitants">
                </td>
            </tr>
            <!-- Mensen die je kent die besmet zijn -->
            <tr>
                <td>
                    <label>Ken je mensen die besmet zijn in jouw woonplaats?</label>
                </td>
                <td>
                    <input type="radio" name="acquaintances" value="Ja">
                    <label>Ja</label><br>

                    <input type="radio" name="acquaintances" value="Nee">
                    <label>Nee</label><br>
                </td>
            </tr>
            <!-- Aantal ziekenhuisopnames in je gemeente -->
            <tr>
                <td>
                    <label for="infected">Aantal ziekenhuisopnames in je gemeente? *</label>
                </td>
                <td>
                    <input type="text" name="infected" id="infected" required>
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