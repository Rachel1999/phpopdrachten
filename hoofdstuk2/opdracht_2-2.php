<?php
/*
 User: Rachel1999
 Date: 5-2-2020
 Time: 14:38
 File: opdracht_2-2.php
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
</main>
</body>
</html>