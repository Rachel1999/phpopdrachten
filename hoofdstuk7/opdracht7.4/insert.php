<?php
include "functions.php";


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
    $sql = "SELECT * FROM joke";
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

$joketext = $_POST['joketext'];
$jokeclue = $_POST['jokeclue'];

$test = "INSERT INTO dbo.joke VALUES('$joketext ', '$jokeclue ','2020-6-5')";
echo $test;

if(isset($_POST['submit']))
{


    $joketext = $_POST['joketext'];
    $jokeclue = $_POST['jokeclue'];

    executeQueryViaExec("INSERT INTO dbo.joke VALUES('$joketext', '$jokeclue','2020-6-5')");

    echo "<h1> Grap toegevoegd </h1><br>";
    echo "<p> Bedankt voor het toevoegen van je grap. Hieronder zie je een overzicht van je grap:</p> <br>";
    echo $joketext . "<br>";
    echo $jokeclue;
}


?>