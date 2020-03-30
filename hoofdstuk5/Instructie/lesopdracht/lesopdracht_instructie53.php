<?php
/*
 * Lesopdracht:
 * Tijd: 30 minuten
 * Omschrijving:
 * Toon in de tabel in het bestand "lesopdracht_form_data53.php" het label en de waarde van voornaam, tussenvoegsel(alleen wanneer deze in de naam zit) en achternaam wanneer deze zijn ingevuld op het formulier.
 * Lees het commentaar goed in deze bestanden!
 * Test dit formulier met o.a de namen: "Jan Jansens", "Piet van Loon".
 * Maak een functie in het bestand "lesopdracht_functions53.php" die de naam van de docent d.m.v een return toont in de tabel toont.
 *
 * Commit deze opdracht naar Github met het bericht: "PHP Lesopdracht 5.3"
 */



?>
<form action="lesopdracht_form_data53.php" method="post">
    <label for="firstname">Voornaam</label>
    <input type="text" name="firstname" id="firstname">

    <label for="tussenvoegsel">Tussenvoegsel</label>
    <input type="text" name="tussenvoegsel" id="tussenvoegsel">

    <label for="lastname">Achternaam</label>
    <input type="text" name="lastname" id="lastname">

    <select name="subject">
        <option value="php">PHP</option>
        <option value="js">Javascript</option>
    </select>

    <input type="submit">
</form>
