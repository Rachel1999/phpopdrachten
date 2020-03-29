<?php
/*
     User: Rachel1999
     Date: 24-3-2020
     Time: 10:46
     File: opdracht_5-2.php
*/
?>

<!-- Header en menu -->
<?php
include "../includes/header.php";
include "../includes/menu.php";
?>

<!-- Uitwerkingen opdracht 5-2 -->
<main id="wrapper">
    <!-- Uitschrijfformulier van KW1C -->
    <h1>
        Uitschrijformulier KW1C
    </h1>
    <hr>
    <form action="includes/uitschrijving.php" method="get">
        <table>
            <!-- Voornaam en achternaam -->
            <tr>
                <td>
                    <label for="fullname">Voornaam en achternaam</label>
                </td>
                <td>
                    <input type="text" name="volledigeNaam" id="fullname" required>
                </td>
            </tr>
            <!-- Studentnummer -->
            <tr>
                <td>
                    <label for="studentnumber">Studentnummer</label>
                </td>
                <td>
                    <input type="number" name="studentnummer" id="studentnumber" required>
                </td>
            </tr>
            <!-- Datum waarop leerling uitschrijft -->
            <tr>
                <td>
                    <label for="date">Datum van uitschrijving</label>
                </td>
                <td>
                    <input type="date" name="datum" id="date" required>
                </td>
            </tr>
            <!-- De reden van uitschrijving -->
            <tr>
                <td>
                    <label for="reason">Reden van uitschrijving</label>
                </td>
                <td>
                    <select name="reden" id="reason">
                        <option>Verkeerde keuze</option>
                        <option>Moeilijkheidsgraad</option>
                        <option>Omstandigheden</option>
                        <option>Anders</option>
                    </select>
                </td>
            </tr>
            <!-- In welke leerjaar zit de student -->
            <tr>
                <td>
                    <label>Leerjaar</label>
                </td>
                <td>
                    <!-- Leerjaar 1 -->
                    <input type="radio" name="leerjaar" value="Leerjaar 1" id="year1">
                    <label for="year1">Leerjaar 1</label><br>
                    <!-- Leerjaar 2 -->
                    <input type="radio" name="leerjaar" value="Leerjaar 2" id="year2">
                    <label for="year2">Leerjaar 2</label><br>
                    <!-- Leerjaar 3 -->
                    <input type="radio" name="leerjaar" value="Leerjaar 3" id="year3">
                    <label for="year2">Leerjaar 3</label><br>
                </td>
            </tr>
        </table>

        <!-- Optie om aan te melden bij de succesklas -->
        <input type="checkbox" name="succesklas" id="succesklas">
        <label for="succesklas">Ik wil me aanmelden bij de succesklas</label><br>

        <!-- Aanvraag om gegevens te verwijderen uit het systeem van school -->
        <input type="checkbox" name="verwijderen" id="verwijderen">
        <label for="verwijderen">Verwijder mijn gegevens uit het systeem</label><br><br>

        <!-- Reden van uitschrijving in een bericht -->
        <label for="message">Geef hieronder de reden van je uitschrijving op</label><br>
        <textarea name="bericht" cols="80" rows="10"></textarea><br><br>

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