<?php
/*
     User: Rachel1999
     Date: 22-3-2020
     Time: 17:01
     File: uitschrijving.php
*/
?>

<!-- Header en menu -->
<?php
include "../../includes/header.php";
include "../../includes/menu.php";
?>

<!-- Gegevens omzetten in variabel -->
<?php
$message = $_GET['bericht'];


if (isset($_GET["succesklas"]))
{
    $succesklas = "JA";
}
else
{
    $succesklas = "NEE";
}


if (isset($_GET["verwijderen"]))
{
    $verwijderen = "JA";

}
else
{
    $verwijderen = "NEE";
}

?>
<main id="wrapper">
    <!-- Formulier gegevens Kees Kroket -->
    <h1>
        Uitschrijformulier KW1C
    </h1>

    <table>
        <tr>
            <td>
                Voor en achternaam
            </td>
            <td>
                <?php
                    echo $_GET['volledigeNaam'];
                ?>
            </td>
        </tr>
        <tr>
            <td>
                Studentnummer
            </td>
            <td>
                <?php
                    echo $_GET['studentnummer'];
                ?>
            </td>
        </tr>
        <tr>
            <td>
                Datum van uitschrijving
            </td>
            <td>
                <?php
                    echo $_GET['datum'];
                ?>
            </td>
        </tr>
        <tr>
            <td>
                Reden van uitschrijving
            </td>
            <td>
                <?php
                    echo $_GET['reden'];
                ?>
            </td>
        </tr>
        <tr>
            <td>
                Leerjaar
            </td>
            <td>
                <?php
                    echo $_GET['leerjaar'];;
                ?>
            </td>
        </tr>
        <tr>
            <td>
                Aanmelden bij succesklas:
            </td>
            <td>
                <?php
                    echo $succesklas;
                ?>
            </td>
        </tr>
        <tr>
            <td>
                Verwijderen gegevens:
            </td>
            <td>
                <?php
                    echo $verwijderen;
                ?>
            </td>
        </tr>
        <tr>
            <td>
                Reden van uitschrijving
            </td>
            <td>
                <?php
                    echo $_GET['bericht'];
                ?>
            </td>
        </tr>

    </table>



    <p>
        <!-- Link naar hoofdpagina -->
        <a href="../index.php">Terug naar hoofdpagina</a>
    </p>

    <?php
    include "../../includes/footer.php";
    ?>
</main>
</body>
</html>