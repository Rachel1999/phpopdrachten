<?php
/*
     User: Rachel1999
     Date: 5-4-2020
     Time: 15:41
     File: form_data53.php
*/
?>

<!-- Header en menu -->
<?php
include "../includes/header.php";
include "../includes/menu.php";

// Functions
include "includes/functions53.php";
?>

<?php
// Variabelen
    $name = $_POST['name'];
    $age = $_POST['age'];
    $township = $_POST['township'];
    $citizens = $_POST['citizens'];
    $acquaintances = $_POST['acquaintances'];
    $infected = $_POST['infected'];

// Als je mensen kent die besmet zijn ligt de kans hoger
    if ($acquaintances == "Ja")
    {
        $result = "De kans is in realiteit groter omdat je via je eigen netwerk besmet kan raken";
    }
    else
    {
        $result = "";
    }
?>

<main id="wrapper">
    <!-- Corona enquete -->
    <table>
        <tr style="background-color: mediumseagreen;">
            <td>
                Vraag
            </td>
            <td>
                Antwoord
            </td>
        </tr>
        <!-- Naam -->
        <tr>
            <td>
                Naam
            </td>
            <td>
                <?php
                    echo $name;
                ?>
            </td>
        </tr>
        <!-- Leeftijd -->
        <tr>
            <td>
                Leeftijd
            </td>
            <td>
                <?php
                    echo $age;
                ?>
            </td>
        </tr>
        <!-- Gemeente -->
        <tr>
            <td>
                Gemeente
            </td>
            <td>
                <?php
                    echo $township;
                ?>
            </td>
        </tr>
        <!-- Inwoners -->
        <tr>
            <td>
                Inwoners
            </td>
            <td>
                <?php
                    echo $citizens
                ?>
            </td>
        </tr>
        <!-- Ziekenhuisopnames -->
        <tr>
            <td>
                Aantal ziekenhuisopnames
            </td>
            <td>
                <?php
                    echo $infected
                ?>
            </td>
        </tr>
        <!-- Kenissen besmet -->
        <tr>
            <td>
                Kennissen besmet
            </td>
            <td>
                <?php
                    echo $acquaintances
                ?>
            </td>
        </tr>
        <!-- Resultaat -->
        <tr>
            <td>
                <?php
                    echo $result;
                ?>
            </td>
        </tr>
        <!-- Kans om besmet te raken -->
        <tr>
            <td>
                Kans per ontmoetingen op besmetting
            </td>
            <td>
                <?php
                    echo echoKans();
                ?>
            </td>
        </tr>
        <!-- De kans is 1 op... -->
        <tr>
            <td>
                Kans is 1 op
            </td>
            <td>
                <?php
                    echo getKans1Op();
                ?>
            </td>
        </tr>
        <!-- Oorzaken vergelijken -->
        <tr>
            <td>
                <?php
                    $kans1op = getKans1op();
                    $vergelijking = vergelijkOorzaken($kans1op);

                    echo vergelijkOorzaken($kans1op);
                ?>
            </td>
        </tr>
    </table>

    <!-- Footer -->
    <?php
        include "../includes/footer.php";
    ?>
</main>
</body>
</html>

