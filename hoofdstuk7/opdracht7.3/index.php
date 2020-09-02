<?php

// Header en menu
include "../../includes/header.php";
include "../../includes/menu.php";

// Inladen functies bestand
include("functions.php");

// Starten van een database connectie
startConnection();

// Executeren van een SQL query
$query = "";
if(isset($_GET['search']))
{
    $query = "SELECT * FROM joke";
    if(($_GET['search']) == "blondje")
    {
        $query = "SELECT * FROM joke WHERE joketext LIKE '%blondje%'"; // $_GET in de LIKE
    }
    elseif(($_GET['search']) == "belg")
    {
        $query = "SELECT * FROM joke WHERE joketext LIKE '%belg%'";
    }

}
//$query = "SELECT * FROM joke WHERE joketext";
$jokes = executeQuery($query);

echo "<p> $query </p>";
?>
<main id="wrapper">
    <h1>
        Zoek grappen
    </h1>
    <!-- Zoekfunctie voor grappen -->
    <form action="" method="get">
        <label for="search">Zoekterm:</label>
        <input type="text" id="search" name="search">
        <input type="submit" value="Zoeken">
    </form>
    <hr>
    <!-- Tabel met grappen -->
    <table id="jokeTable">
        <thead>
            <th>Jokeid</th>
            <th>Joketext</th>
            <th>Jokeclou</th>
            <th>Jokedate</th>
        </thead>
        <?php
        // Resultaten rij voor rij ophalen
        while($row = $jokes->fetch(PDO::FETCH_ASSOC) )
        {
            echo "<tr><td>";
            echo $row['id'];
            echo "</td><td>";
            echo $row['joketext'];
            echo "</td><td>";
            echo $row['jokeclou'];
            echo "</td><td>";
            echo $row['jokedate'];
            echo "</td></tr>";
        }


        // Footer
        include "../../includes/footer.php";

        ?>
    </table>
    <p>
        <!-- Link naar hoofdpagina -->
        <a href="../../index.php">Terug naar hoofdpagina</a>
    </p>
</main>


</body>
</html>
