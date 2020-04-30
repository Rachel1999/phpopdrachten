<?php
// Opdracht 6.1
// session_start();
if (isset($_SESSION['username']))
{
    $bezoeker = $_SESSION['username']. "&nbsp;<a href='/phpopdrachten/hoofdstuk6/opdracht6.1/loguit.php'>Loguit</a>";
}
else
{
    $bezoeker = "onbekende bezoeker". "&nbsp;<a href='/phpopdrachten/hoofdstuk6/opdracht6.1/opdracht61.php'>Login</a>";
}
//echo $bezoeker;
//print vervolgens ook de $bezoeker zodat je de volgende visuele weergave in de pagina ziet
// Dit heb ik onderaan in de footer gezet

?>

<footer>
        <?php

            include "variabelen.php";

            // Time
            date_default_timezone_set ("Europe/Amsterdam");
            $uur = date("H");

            // Bericht aan de hand van het uur
            if ($uur >= 0 && $uur < 5)
            {
                $uur = "Goedennacht";
            }
            elseif ($uur >= 5 && $uur < 12)
            {
                $uur = "Goedenochtend";
            }

            elseif ($uur >= 12 && $uur < 17)
            {
                $uur = "Goedenmiddag";
            }

            elseif ($uur >= 17 && $uur < 24)
            {
                $uur = "Goedenavond";
            }

            // Tekst in footer
            echo "<p>" . $uur ." &copy; " . $year . " " . $bezoeker . "</p>";

        ?>
</footer>
