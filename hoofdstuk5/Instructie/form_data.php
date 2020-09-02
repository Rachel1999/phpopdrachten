<?php
    // print_r($_GET);

    echo $_POST["firstname"] . " " . $_POST["lastname"];


    $subject = $_POST["subject"];
    if($subject == "js")
    {
        echo "<br> Dit is uitleg over het vak Javascript";
    }
    elseif($subject == "php")
    {
        echo "<br> Dit is uitleg over het vak PHP";
    }
?>

<?php
    // isset = of de waarde wel bestaat - wordt gebruikt  bij checkboxen?
    // empty = of de waarde leeg is - wordt gebruikt bij inputs?
    // !empty = of de waarde niet leeg is


// FUNCTIE SCHRIJVEN
    function getJavascript()
    {
        // ALs je deze functie aanroept krijg je deze tekst terug, maar hij laat nog niks zien. Je kan
        // aangeven op het moment dat je de functie roept hoe je het wilt laten zien
        return "<p> Dit is een tekst over Javascript </p>";
    }


    if($_POST["subject"] == "js")
    {
        echo getJavascript();
    }

?>
