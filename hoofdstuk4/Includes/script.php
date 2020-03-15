<?php

    // ------------------- TAAK 2 LANCERING WHILE LOOP
    $task2 = "Lancering in: ";
    $counter = 19;

    while($counter >= 0)
    {
        // Komma begint na 19 en stopt vóór 0
        if($counter < 19)
        {
            $task2 .= ", ";
        }
        // counter achter de string geplakt in $task2
        $task2 .= $counter;

        // Teller gaat omlaag
        --$counter;
    }

    // ------------------- TAAK 3 LANCERING FOR LOOP
    $task3 = "Lancering in: ";

    for($counter = 19; $counter >= 0; --$counter)
    {
        // Komma begint na 19 en stopt vóór 0
        if($counter < 19)
        {
            $task3 .= ", ";
        }
        // counter achter de string geplakt in $task2
        $task3 .= $counter;
    }


    // ------------------- TAAK 4 ITERATIE WHILE LOOP
    $counter = 1;
    $task4 = "";

    while($counter <= 6)
    {
        $task4 .= "<h$counter> Dit is de " . $counter . "e iteratie </h$counter><br>";
        $counter++;
    }


    // ------------------- TAAK 5 ITERATIE FOR LOOP
    $task5 = "";

    for($counter = 1; $counter <= 10; $counter++)
    {
        $task5 .= "<tr><td> Dit is de " . $counter ."e iteratie</td></tr>";
    }


    // ------------------- TAAK 6 JAARTAL WHILE LOOP
    $task6 = "";
    $counter = 0;
    $jaartal = 1999;

    while($counter <= 21)
    {
        if($jaartal == 2020)
        {
            $task6 .= "<p> In " . $jaartal . " ben ik ". $counter ." jaar oud </p>";
        }
        else
        {
            $task6 .= "<p> In " . $jaartal . " was ik ". $counter ." jaar oud </p>";
        }


        $jaartal = $jaartal + 1;
        $counter++;

    }


    // ------------------- TAAK 7 ITERATIE FOR LOOP
    $task7 = "";
    $jaartal = 2020;


    for($counter = 0; $counter <= 21; $counter++)
    {
        if($jaartal == 2020)
        {
            $task7 .= "<p> In " . $jaartal . " ben ik volwassen </p>";
        }
        elseif($jaartal == 2017)
        {
            $task7 .= "<p> In " . $jaartal . " werd ik een adolescent </p>";
        }
        elseif($jaartal == 2011)
        {
            $task7 .= "<p> In " . $jaartal . " werd ik een puber </p>";
        }
        elseif($jaartal == 2007)
        {
            $task7 .= "<p> In " . $jaartal . " werd ik een tiener </p>";
        }
        elseif($jaartal == 2003)
        {
            $task7 .= "<p> In " . $jaartal . " werd ik een kleuter </p>";
        }
        elseif($jaartal == 2001)
        {
            $task7 .= "<p> In " . $jaartal . " werd ik een peuter </p>";
        }
        elseif($jaartal == 1999)
        {
            $task7 .= "<p> In " . $jaartal . " ben ik geboren </p>";
        }

        $jaartal = $jaartal - 1;
    }
?>
