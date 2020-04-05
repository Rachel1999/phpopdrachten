<?php
/*
     User: Rachel1999
     Date: 5-4-2020
     Time: 16:00
     File: form_data54.php
*/
?>

<!-- Header en menu -->
<?php
include "../includes/header.php";
include "../includes/menu.php";

// Variabelen
$ambulanceComing = $_POST['ambulance'];
$trafficLightColor = $_POST['color'];

// Hoofdzin, er komt wel of geen ambulance aan
if($ambulanceComing == "Ja")
{
    $ambulance = "een ambulance aan";
}
else
{
    $ambulance = "geen ambulance aan";
}

// De hoofdzin
echo "<p> Stoplicht staat op " . $trafficLightColor . " en er komt: " . $ambulance . "</p>";



// Doorrijden of stoppen?
if($ambulanceComing == "Nee" && $trafficLightColor == "Groen")
{
    echo "<p style='color: green'> U mag doorrijden </p>";
}
else
{
    echo "<p style='color: red'> U moet stoppen </p>";
}

// Als een van de twee buttons niet word aangevinkt dan komt er deze melding
// DIT WERKT NIET...
if(empty($ambulanceComing) || empty($trafficLightColor))
{
    echo "Of stopkleur is onbekend of het is onbekend of de ambulance komt";
}

// echo print_r($_POST);



include "../includes/footer.php";
?>
</main>
</body>
</html>