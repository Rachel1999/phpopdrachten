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
    <form action="" method="post">
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

    // Als ambulance bestaat
    if(isset($_POST['ambulance']))
    {
        $ambulanceComing = $_POST['ambulance'];
    }
    else
    {
        $ambulanceComing = "";
    }

    // Als color bestaat
    if(isset($_POST['color']))
    {
        $trafficLightColor = $_POST['color'];
    }
    else
    {
        $trafficLightColor = "";
    };


    // Doorrijden of stoppen?
    if($ambulanceComing == "Nee" && $trafficLightColor == "Groen")
    {
        echo "<p> Stoplicht staat op " . $trafficLightColor . " en er komt geen ambulance aan</p>";
        echo "<p style='color: green'> U mag doorrijden </p>";
    }
    elseif($ambulanceComing == "Ja" && $trafficLightColor == "Rood" || $trafficLightColor == "Oranje")
    {
        echo "<p> Stoplicht staat op " . $trafficLightColor . " en er komt een ambulance aan</p>";
        echo "<p style='color: red'> U moet stoppen </p>";
    }
    else
    {
        echo "Of stopkleur is onbekend of het is onbekend of de ambulance komt";
    }

    include "../includes/footer.php";
    ?>
</main>
</body>
</html>