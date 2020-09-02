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

// Als ambulance bestaat
if(isset($_POST['ambulance']))
{
    $ambulanceComing = $_POST['ambulance'];
}
else
{
    $ambulanceComing = "";
}

// Als color bestaat
if(isset($_POST['color']))
{
    $trafficLightColor = $_POST['color'];
}
else
{
    $trafficLightColor = "";
};


// Doorrijden of stoppen?
if($ambulanceComing == "Nee" && $trafficLightColor == "Groen")
{
    echo "<p> Stoplicht staat op " . $trafficLightColor . " en er komt geen ambulance aan</p>";
    echo "<p style='color: green'> U mag doorrijden </p>";
}
elseif($ambulanceComing == "Ja" && $trafficLightColor == "Rood" || $trafficLightColor == "Oranje")
{
    echo "<p> Stoplicht staat op " . $trafficLightColor . " en er komt een ambulance aan</p>";
    echo "<p style='color: red'> U moet stoppen </p>";
}
else
{
    echo "Of stopkleur is onbekend of het is onbekend of de ambulance komt";
}


include "../includes/footer.php";
?>
</main>
</body>
</html>