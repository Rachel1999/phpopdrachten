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
        Date functie met if else
    </h1>
    <?php
        // Het is belangrijk om in te stellen in welke TimeZone je server zit
        date_default_timezone_set ("Europe/Amsterdam");

        //
        // strtotime(tomorrow);

        // Dag, maand en jaar
        echo date("d-m-Y H:i") . "<br>";

        // Je kan er ook een variabele van maken
        echo $day = date("l");

        // Een conditie pakken voor een date()
        if($day == "Monday")
        {
            echo "<br> Het is vandaag de eerste dag van de week";
        }
        elseif($day == "Dinsdag")
        {
            echo "<br> Het is vandaag " .$day;
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
