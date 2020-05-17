<!-- Header en menu -->
<?php
include "../../includes/header.php";
include "../../includes/menu.php";

// Open de database connectie en ODBC driver
try
{
    $pdo = new PDO("odbc:odbc2sqlserver");
}
catch (PDOException $e)
{
    echo "<h1>Database error:</h1>";
    echo $e->getMessage();
    die();
}
echo "database connectie gelukt";

// Uitvoeren van een SQl query
try
{
    // Query schrijven
    $sql = "SELECT * FROM joke WHERE jokedate < '2020'";
    // Query uitvoeren
    $result = $pdo->query($sql);
}
catch (PDOException $e)
{
    echo 'Er is een probleem met ophalen van jokes: ' . $e->getMessage();
    exit();
}
// Lege Array aanmaken voor de results
$aJokes = array();
// Door de results heen loopen via een while
while ($row = $result->fetch(PDO::FETCH_ASSOC))
{
    // Result wegschrijven in de $aJokes array
    $aJokes[] = $row;
}
// Tonen van de inhoud van aJokes
//echo "<pre";
//var_dump($aJokes);
//echo "</pre";



?>
<!-- Uitwerkingen opdracht 7.2 -->
<main id="wrapper">
    <h1>
        Grappen
    </h1>

    <!-- Tabel met alle grappen -->
    <table id="jokeTable">
        <thead>
            <th>ID</th>
            <th>Joketext</th>
            <th>Jokeclou</th>
            <th>Jokedate</th>
        </thead>
        <?php
        foreach($aJokes as $grap)
        {

            echo "<tr><td>";
            echo $grap['id'];
            echo "</td><td>";
            echo $grap['joketext'];
            echo "</td><td>";
            echo $grap['jokeclou'];
            echo "</td><td>";
            echo $grap['jokedate'];
            echo "</td></tr>";
        };
        ?>
    </table>

    <p>
        <!-- Link naar hoofdpagina -->
        <a href="../../index.php">Terug naar hoofdpagina</a>
    </p>

<?php
// Footer
include "../../includes/footer.php";
?>

</main>
</body>
</html>