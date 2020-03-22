<?php
/*
     User: Rachel1999
     Date: 22-3-2020
     Time: 17:01
     File: opdracht_5-1.php
*/
?>

<!-- Header en menu -->
<?php
include "../includes/header.php";
include "../includes/menu.php";
?>

<!-- Uitwerkingen opdracht 4-1 -->
<main id="wrapper">
    <!-- Kees Kroket -->
    <h1>
        Restaria Kees Kroket
    </h1>

    <!-- Gegevens Restaria Kees Kroket -->
    <p>
        Visstraat 12 <br>
        5211 DN 's-Hertogenbosch <br>
        076 613 6720 <br>
        info@restariakeeskroket.nl
    </p>

    <!-- Formulier Kees Kroket -->
    <form action="includes/form_data.php" method="post">
        <!-- Bedrijfsnaam -->
        <label for="companyName">Bedrijfsnaam</label> <br>
        <input type="text" name="bedrijfsnaam" id="companyName"> <br><br>

        <!-- Voornaam -->
        <label for="firstName">Voornaam</label> <br>
        <input type="text" name="voornaam" id="firstName"> <br><br>

        <!-- Achternaam -->
        <label for="lastName">Achternaam</label> <br>
        <input type="text" name="achternaam" id="lastName"> <br><br>

        <!-- Telefoon -->
        <label for="phoneNumber">Telefoon</label> <br>
        <input type="number" name="telefoon" id="phoneNumber"> <br><br>

        <!-- Email -->
        <label for="email">E-mail</label> <br>
        <input type="email" name="email" id="email"> <br><br>

        <!-- Bericht -->
        <label for="">Bericht</label> <br>
        <textarea name="bericht" rows="15" cols="60"></textarea> <br><br>

        <!-- Verstuurknop -->
        <input type="submit" value="Versturen">
    </form>

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