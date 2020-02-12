<?php
/*
 User: Rachel1999
 Date: 12-2-2020
 Time: 15:00
 File: opdracht_3-1.php
*/
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>
        Opdrachten PHP
    </title>
</head>
<body>
<!-- Uitwerking PHP opdrachten -->
<header>
    <h1>
        <?php echo "Uitwerking van PHP-opdrachten"; ?>
    </h1>
</header>
<!-- Side menu -->
<aside>
    <h2>Menu</h2>
    <ul>
        <!-- Opdrachten hoofdstuk 2 -->
        <li>Hoofdstuk 2
            <ul>
                <li>
                    <a href="../hoofdstuk2/opdracht_2-1.php">Opdracht 2.1</a>
                </li>
                <li>
                    <a href="../hoofdstuk2/opdracht_2-2.php">Opdracht 2.2</a>
                </li>
            </ul>
        </li>

        <!-- Opdrachten hoofdstuk 3 -->
        <li>Hoofdstuk 3
            <ul>
                <li>
                    <a href="../hoofdstuk3/opdracht_3-1.php">Opdracht 3.1</a>
                </li>
                <li>
                    <a href="../hoofdstuk3/opdracht_3-2.php">Opdracht 3.2</a>
                </li>
                <li>
                    <a href="../hoofdstuk3/opdracht_3-3.php">Opdracht 3.3</a>
                </li>
            </ul>
        </li>

        <!-- Opdrachten hoofdstuk 4 -->
        <li>Hoofdstuk 4
            <ul>
                <li>
                    <a href="../hoofdstuk4/opdracht_4-1.php">Opdracht 4.1</a>
                </li>
                <li>
                    <a href="../hoofdstuk4/opdracht_4-2.php">Opdracht 4.2</a>
                </li>
                <li>
                    <a href="../hoofdstuk4/opdracht_4-3.php">Opdracht 4.3</a>
                </li>
                <li>
                    <a href="../hoofdstuk4/opdracht_4-4.php">Opdracht 4.4</a>
                </li>
            </ul>
        </li>

        <!-- Opdrachten hoofdstuk 5 -->
        <li>Hoofdstuk 5
            <ul>
                <li>
                    <a href="../hoofdstuk5/opdracht_5-1.php">Opdracht 5.1</a>
                </li>
                <li>
                    <a href="../hoofdstuk5/opdracht_5-2.php">Opdracht 5.2</a>
                </li>
                <li>
                    <a href="../hoofdstuk5/opdracht_5-3.php">Opdracht 5.3</a>
                </li>
                <li>
                    <a href="../hoofdstuk5/opdracht_5-4.php">Opdracht 5.4</a>
                </li>
                <li>
                    <a href="../hoofdstuk5/opdracht_5-5.php">Opdracht 5.5</a>
                </li>
            </ul>
        </li>
    </ul>
</aside>
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
    <a href="../index.php">Terug naar hoofdpagina</a>
</main>
</body>
</html>
