<?php
/*
     User: Rachel1999
     Date: 22-5-2020
     Time: 11:28
     File: opdracht_7.4.php
*/
?>

<!-- Header en menu -->
<?php
include "../../includes/header.php";
include "../../includes/menu.php";
?>

<!-- Uitwerkingen opdracht 7.4 -->
<main id="wrapper">
    <h1>
        Nieuwe grap toevoegen
    </h1>
    <!-- Loginformulier -->
    <form action="insert.php" method="post">
        <table>
            <tr>
                <td>
                    <label for="joketext">Joketext</label>
                </td>
                <td>
                    <input type="text" name="joketext" id="joketext">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="jokeclue">Jokeclue</label>
                </td>
                <td>
                    <input type="text" name="jokeclue" id="jokeclue">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Verstuur" name="submit">
                </td>
            </tr>
        </table>

    </form>

    <p>
        <!-- Link naar hoofdpagina -->
        <a href="../../index.php">Terug naar hoofdpagina</a>
    </p>

    <!-- Footer -->
    <?php
    include "../../includes/footer.php";
    ?>
</main>
</body>
</html>