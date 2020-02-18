<?php
/*
 User: Rachel1999
 Date: 11-2-2020
 Time: 12:37
 File: opdracht_3-2.php
*/
?>

<!-- Header en menu -->
<?php
    include "../includes/header.php";
    include "../includes/menu.php";
?>
<!-- Uitwerkingen opdracht 3-2 -->
<main id="wrapper">

    <!-- Deel 1 van opdracht 3-2 -->
    <h2>
        Deel 1: Doorrijden of stoppen bij stoplicht?
    </h2>
    <?php
        // Stoplicht groen
        $trafficLightColor = "groen";
        // Ambulance onderweg
        $ambulanceComing = true;
        // Wel of niet rijden
        $driveOn = true;

        if($driveOn == true && $ambulanceComing == false && $trafficLightColor == "groen")
        {
            echo "U mag doorrijden";
        }
        else
        {
            echo "U moet stoppen";
        }
    ?>

    <!-- Deel 2 van opdracht 3-2-->
    <h2>
        Deel 2: Vanaf welke leeftijd mag je drinken in verschillende landen?
    </h2>
    <?php
        // Naam van het land waar je woont
        $countryName = "Nederland";
        // Huidige leeftijd
        $currentAge = 20;

        // Zwakke alcohol
        if($currentAge == 16 && $countryName == "België" || $currentAge == 18 && $countryName == "Zweden")
        {
            echo "Je woont in " . $countryName . " en bent " . $currentAge . " jaar. <br>";
            echo "Je mag hier zwakke alcohol drinken";
        }

        // Zware drank
        elseif($currentAge >= 17 && $countryName == "Cyprus" || $currentAge >= 18 && $countryName == "Nederland" || $currentAge >= 18 && $countryName == "Bulgarije" || $currentAge >= 18 && $countryName == "België" || $currentAge >= 20 && $countryName == "Zweden")
        {
            echo "Je woont in " . $countryName . " en bent " . $currentAge . " jaar. <br>";
            echo "Je mag alle drank drinken";
        }

        // Te jong voor alcohol
        elseif($currentAge < 16)
        {
            echo "Je bent te jong voor alcohol";
        }

        // Onbekende input
        else
        {
            echo "Kan data niet ophalen";
        }
    ?>
    <br><br>
    <a href="../index.php">Terug naar hoofdpagina</a>
</main>
</body>
</html>