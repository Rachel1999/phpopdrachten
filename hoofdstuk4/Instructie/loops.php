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
        While & For Loops
    </h1>

    <?php

        // WHILE LOOP
        $counter = 1;

        while($counter <= 10)
        {
            echo $counter . "<br>";
            $counter++;
        }

        echo "<br>";
        $test = "";
        // FOR LOOP
        for($counter = 1; $counter <= 10; $counter++)
        {
            $test .= $counter . "<br>";
            //$test = $test . $counter . "<br>";
        }

        echo $test;
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
