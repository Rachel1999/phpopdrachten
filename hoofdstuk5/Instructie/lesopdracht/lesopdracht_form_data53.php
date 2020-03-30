<?php
//Haal de formulier gegevens op
//include hieronder "lesopdracht_function.php" die de naam van de docent terug geeft.

include "lesopdracht_functions53.php";

$teacherName = $_POST["firstname"];
$tussenvoegsel = $_POST["tussenvoegsel"];
$lastName = $_POST["lastname"];

if(empty($tussenvoegsel))
{
    echo "";   // ik weet niet hoe ik de tussenvoegsel compleet onzichtbaar maak
}

?>
<table>
    <tr>
        <td>Voornaam</td>
        <td><?php echo $teacherName?></td>
    </tr>
    <!-- Begin: Toon dit alleen als er een tussenvoegsel is ingevuld! -->
    <tr>
        <td>Tussenvoegsel</td>
        <td><?php echo $tussenvoegsel?></td>
    </tr>
    <!-- Einde: Toon dit alleen als er een tussenvoegsel is ingevuld! -->
    <tr>
        <td>Achternaam</td>
        <td><?php echo $lastName?></td>
    </tr>
    <tr>
        <td>Meer informatie</td>
        <td><?php echo getTeacherName()?></td>
    </tr>
</table>