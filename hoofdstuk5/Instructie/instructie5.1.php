<?php
//    // Vorige lessen - Wat is er besproken?
//    echo strtotime("+1 days") . "<br>";
//
//    // Strtotime omzetten naar een datum
//    echo date("d-m-Y", strtotime("+1 days")) . "<br><br>";
//
//
//    // For Loop
//    for($counter = 0; $counter < 10; $counter++)
//    {
//        echo $counter;
//    }
//
//    // Instructie formuliergegevens verwerken
?>

<form action="form_data.php" method="post">
    <label for="firstname">First name:</label>
    <input type="text" name="firstname" id="firstname">

    <label for="lastname">Last name:</label>
    <input type="text" name="lastname" id="lastname">

    <select name="subject">
        <option value="js">Javascript</option>
        <option value="php">PHP</option>
    </select>

    <input type="submit" value="Submit">

</form>
