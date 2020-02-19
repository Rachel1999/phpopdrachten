<?php
/*
 User: Rachel1999
 Date: 17-2-2020
 Time: 11:07
 File: if_else.php
*/
?>

<!-- Header en menu -->
<?php
    include "../../includes/header.php";
    include "../../includes/menu.php";
?>
<!-- Instructie -->
<main id="wrapper">
    <h2> Instructie </h2>
    <?php
        $profession = "ICT'ers"; // String
        $year = 2019; // Integer
        $percentage = 17.1; // Float
        $subject = ["internet", "computers","software"]; // Array
        $skills = false; // Boolean

    //  if ($skills == true && $year == 2019)
        if ($skills == true || $year == 2019)
        {
            echo "Skills is true";
        }

        else
        {
            echo "Skills is false";
        }


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
