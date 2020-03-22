<?php
/*
     User: Rachel1999
     Date: 22-3-2020
     Time: 17:01
     File: form_data.php
*/
?>

<!-- Header en menu -->
<?php
    include "../../includes/header.php";
    include "../../includes/menu.php";
?>

<!-- Gegevens omzetten in variabel -->
<?php
    $companyName = $_POST['bedrijfsnaam'];
    $firstName = $_POST['voornaam'];
    $lastName = $_POST['achternaam'];
    $phoneNumber = $_POST['telefoon'];
    $email = $_POST['email'];
    $message = $_POST['bericht'];
?>
<main id="wrapper">
    <!-- Formulier gegevens Kees Kroket -->
    <h1>
        Gegevens
    </h1>
    <table id="keesKroketTable">
        <!-- Bedrijfsnaam -->
        <tr>
            <td>
                Bedrijfsnaam
            </td>
            <td>
                <?php
                    echo $companyName
                ?>
            </td>
        </tr>
        <!-- Voornaam -->
        <tr>
            <td>
                Voornaam
            </td>
            <td>
                <?php
                    echo $firstName
                ?>
            </td>
        </tr>
        <!-- Achternaam -->
        <tr>
            <td>
                Achternaam
            </td>
            <td>
                <?php
                    echo $lastName
                ?>
            </td>
        </tr>
        <!-- Telefoon -->
        <tr>
            <td>
                Telefoon
            </td>
            <td>
                <?php
                echo $phoneNumber
                ?>
            </td>
        </tr>
        <!-- Email -->
        <tr>
            <td>
                E-mail
            </td>
            <td>
                <?php
                    echo $email
                ?>
            </td>
        </tr>
        <!-- Persoonlijk bericht -->
        <tr>
            <td>
                Bericht
            </td>
            <td>
                <?php
                    echo $message
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