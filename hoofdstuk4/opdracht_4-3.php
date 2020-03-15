<?php
/*
 User: Rachel1999
 Date: 4-3-2020
 Time: 13:31
 File: opdracht_4-3.php
*/
?>

<!-- Header en menu -->
<?php
    include "../includes/header.php";
    include "../includes/menu.php";
?>

<!-- Uitwerkingen opdracht 4-3 -->
<main id="wrapper">
    <h1>
        Opdracht 4.3 - For & While loops
    </h1>

    <?php
        include "includes/script.php";

        // TAAK 2
        echo "<h2> Taak 2 - While loop </h2>";
        echo $task2;

        // TAAK 3
        echo "<h2> Taak 3 - For loop </h2>";
        echo $task3;

        // TAAK 4
        echo "<h2> Taak 4 - Iteratie while loop </h2>";
        echo $task4;

        // TAAK 5
        echo "<h2> Taak 5 - Iteratie for loop </h2>";
        echo "<table> " . $task5 . "</table>";

        // TAAK 6
        echo "<h2> Taak 6 - Jaartal while loop </h2>";
        echo $task6;

        // TAAK 7
        echo "<h2> Taak 7 - Jaartal for loop </h2>";
        echo $task7;
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
