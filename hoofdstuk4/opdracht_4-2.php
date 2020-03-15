<?php
/*
 User: Rachel1999
 Date: 3-3-2020
 Time: 11:03
 File: opdracht_4-2.php
*/
?>

<!-- Header en menu -->
<?php
    include "../includes/header.php";
    include "../includes/menu.php";
?>

<!-- Uitwerkingen opdracht 4-2 -->
<main id="wrapper">
    <h2>
        Opdracht 4.2
    </h2>
    <?php
        /*
         * PHP > Remco Evers
         * ASP > Martijn van Meer
         * SQL > Martijn van de Wetering
         * HTML > Ralph Gijsbrechts / Remco Evers
         * Modelleren > Ralph Gijsbrechts
         * Usability > Martijn van de Wetering
         * Rekenen > Martijn van Meer
         * Javascript > Martijn van de Wetering
         * Nederlands > Jan-Chris van den Ende
         * Engels > Sandra Mitrovic-Vejzovic
         * Loopbaan & Burgerschap > Paula de Ruijter
         */

        // Vaknaam
        $courseName =  "Engels";

        // Naam leraar
        $teacherName;

        // Condities
        switch($courseName)
        {
            // PHP
            case "PHP":
                $teacherName = "Remco Evers";
                break;

            // ASP
            case "ASP":
                $teacherName = "Martijn van Meer";
                break;

            // SQL
            case "SQL":
                $teacherName = "Martijn van de Wetering";
                break;

            // HTML
            case "HTML":
                $teacherName = "Remco Evers";
                break;

             // Modelleren
            case "Modelleren":
                $teacherName = "Ralph Gijsbrechts";
                break;

            // Rekenen
            case "Rekenen":
                $teacherName = "Martijn van Meer";
                break;

            // Javascript
            case "Javascript":
                $teacherName = "Martijn van de Wetering";
                break;

            // Nederlands
            case "Nederlands":
                $teacherName = "Jan-Chris van den Ende";
                break;

            // Engels
            case "Engels":
                $teacherName = "Sandra Mitrovic-Vejzovic";
                break;

            // Loopbaan & Burgerschap
            case "LB":
                $teacherName = "Paula de Ruijter";
                break;
        }

            echo "Voor het vak <span>" . $courseName .  "</span> heb je <span>" . $teacherName . "</span> als docent";

    ?>

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