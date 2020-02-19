<?php
/*
 User: Rachel1999
 Date: 12-2-2020
 Time: 15:00
 File: opdracht_3-1.php
*/
?>

<!-- Header en menu -->
<?php
    include "../includes/header.php";
    include "../includes/menu.php";
?>

<!-- Uitwerkingen opdracht 3-1 -->
<main id="wrapper">
    <h2> Opdracht 3.1</h2>

    <!-- Variabelen elfstedentocht -->
    <?php
    $evenement = "Elfstedentocht";
    $evenementFries = "Alvestedetocht";
    $kilometer = 200;
    $type = "schaatstocht";
    $soort = "natuurijs";
    $organisator = "Koninklijke Vereniging De Friesche Elf Steden";
    $hoofdstadFriesland = "Leeuwaarden";
    $provincie = "Friesland";
    $aantalVerreden = 15;
    $opgericht = 1909;
    $aantalGehouden = 1;

    $verhaal = "De " . $evenement . " (Fries: " . $evenementFries . ") is een " . $kilometer . " kilometer lange " . $type . " over " . $soort . " die wordt georganiseerd door de " . $organisator . ". " .$hoofdstadFriesland . ", de hoofdstad van " . $provincie . ", is start- en aankomstplaats. De " . $evenement . " is inmiddels " . $aantalVerreden . " maal verreden  en werd voor het eerst in " . $opgericht . " gereden  en wordt maximaal " .$aantalGehouden . " keer per winter gehouden.";

    // Complete verhaal
    echo "<p>" . $verhaal . "</p>";
    ?>

    <p>
        <!-- link naar hoofdpagina -->
        <a href="../index.php">Terug naar hoofdpagina</a>
    </p>

    <!-- Footer -->
    <?php
        include "../includes/footer.php";
    ?>
</main>
</body>
</html>
