<?php
/*
 User: Rachel1999
 Date:
 Time:
 File: Dates.php
*/
?>

<!-- Header en menu -->
<?php
include "../../includes/header.php";
include "../../includes/menu.php";
?>

<!-- Uitwerkingen instructie-->
<main id="wrapper">
    <h1>
        Switch
    </h1>

    <?php
        $day = date("l");

        // Je gaat de variabele $day controleren
        switch($day)
        {
            case "Monday":
                echo "Het is vandaag maandag";
                break;
            case "Tuesday":
                echo "Het is vandaag dinsdag";
                break;
            default:
                echo "Onbekende dag";
                break;
        }
    ?>

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
