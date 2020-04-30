<?php
$authUsers = array("Rachel" => "bekend","Mexx" => "Lief","Lulu" => "Food","Momo" => "Stamina");

if(isset($_POST['submit']))
{
    $combination = false;

    foreach($authUsers as $user => $pass)
    {
        if ($_POST['username'] == $user && $_POST['password'] == $pass)
        {
            session_start();
            $_SESSION['username'] = $_POST['username'];
            header('location: welkom.php');
            $combination = true;
        }

    }

    if($combination == false)
    {
        $message = "Ongeldige username/wachtwoord
        {$_POST['username']}, probeer het nog eens.";
        include "opdracht61.php";
    }
}






?>