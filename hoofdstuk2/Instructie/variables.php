<?php
/*
 User: Rachel1999
 Date: 12-2-2020
 Time: 14:39
 File: if_else.php
*/
?>

<?php
    include "../../includes/header.php";
    include "../../includes/menu.php";
?>

<!-- Uitwerkingen Instructie -->
<main id="wrapper">
    <h2>Instructie Hoofdstuk 2</h2>
    <?php
        //String
        $name = "Rachel";

        // Boolean
        $iceCream = true;

        // Integer (number)
        $age = 20;

        // Float - altijd met een punt, geen komma
        $decimal = 1.91;

        // Toon tekst
        echo "<p>" . $name . " is " . $age . " jaar oud. </p>";
    ?>

    <p>
        <!-- link naar hoofdpagina -->
        <a href="../../index.php">Terug naar hoofdpagina</a>
    </p>

    <!-- Footer -->
    <?php
        include "../../includes/footer.php";
    ?>

</main>
</body>
</html>
