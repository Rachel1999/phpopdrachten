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
            echo "<p>" . $uur ." &copy; " . $year . " " . $name . "</p";
        ?>
</footer>
