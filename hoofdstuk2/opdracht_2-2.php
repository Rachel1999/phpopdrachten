<?php
/*
 User: Rachel1999
 Date: 5-2-2020
 Time: 14:38
 File: opdracht_2-2.php
*/
?>

<!-- Header en menu -->
<?php
    include "../includes/header.php";
    include "../includes/menu.php";
?>

<!-- Uitwerkingen opdracht 2-2 -->
<main id="wrapper">
    <?php
    // Losse stukken tekst in variabele
        $text1 = "Hallo";
        $text2 = " een makkelijke taal";
        $text3 = " toch zo'n makkelijke taal ";
        $text4 = " wat is ";
        $text5 = " PHP ";
        $text6 = " Nooit gedacht dat ";
        $text7 = " De installatie is best ingewikkeld";
        $text8 = " Fijn ";
        $text9 = "?";
        $text10 = ".";
        $text11 = ",";
        $text12 = "<br>";
        $text13 = " is";
        $text14 = " Vind je niet";
        $text15 = " toch";
        $text16 = " dat ";

        // Taak 2
        echo "<h2> Taak 2 </h2>";
        echo "<p>".$text1 . $text11 .  $text4 . $text5 . $text15 . $text2.$text10. $text12. $text7.$text10 . $text8 . $text15.$text9 . $text12 .$text6 . $text5 . $text3 . $text13 . $text10."</p>";

        // Taak 3
        echo "<h2> Taak 3 </h2>";
        echo "<p>".$text1 . $text11 . $text12 . $text8 . $text16 . $text5 . $text3 . $text13 . $text10 . $text12 . $text7 . $text10 . $text14 . $text9 ."</p>"
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