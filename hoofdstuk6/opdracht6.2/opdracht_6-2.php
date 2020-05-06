<?php
//In session_start wordt de tussenstand in bijgehouden
session_start();

?>
<!-- Header en menu -->
<?php
include "../../includes/header.php";
include "../../includes/menu.php";
?>

<!-- Uitwerkingen opdracht 6.2 -->
<main id="wrapper">
    <!-- Steen papier schaar -->
    <form action="opdracht_6-2.php" method="get" id="gameForm">
        <!-- Steen papier schaar -->
        <h1>
            Steen papier schaar!
        </h1>
        <!-- Instructie -->
        <p>
            Start het spel door steen, papier of schaar te kiezen.
        </p>

        <!-- Keuzes -->
        <input type="radio" name="keuze" value="steen" onchange="document.getElementById('gameForm').submit();">Steen <!-- Steen -->
        <input type="radio" name="keuze" value="papier" onchange="document.getElementById('gameForm').submit();">Papier <!-- Papier -->
        <input type="radio" name="keuze" value="schaar" onchange="document.getElementById('gameForm').submit();">Schaar <!-- Schaar -->
    </form>

    <p>
        <!-- Link naar hoofdpagina -->
        <a href="../../index.php">Terug naar hoofdpagina</a>
    </p>

    <!-- Footer -->
    <?php
    include "../../includes/footer.php";

    // Session aanmaken
    if(empty($_SESSION['user1']) && empty($_SESSION['user2']))
    {
        // Menselijke speler
        $_SESSION['user1'] = 0;
        // De computer
        $_SESSION['user2'] = 0;
    }

    // Instellingen voor de computer
    $options = array("steen","papier","schaar"); // Computer opties
    $choiceComputerNumber = rand(0,2); // Met rand zorg je er voor dat je een willekeurige nummer krijgt
    $computersChoice = $options[$choiceComputerNumber]; // Willekeurige optie door de computer

    // Als player1 op een van de opties klikt wordt onderstaande code uitgevoerd
    if(isset($_GET['keuze']))
    {
        echo "Jij koos: " . $_GET['keuze']; // Keuze van de speler
        echo "<br> De computer koos: " . $computersChoice; // Keuze van de computer


        // Als de computer wint
        if($computersChoice == "schaar" && $_GET['keuze'] == "papier" || $computersChoice == "steen" && $_GET['keuze'] == "schaar" || $computersChoice == "papier" && $_GET['keuze'] == "steen")
        {
            $_SESSION['user2'] += 1;
        }
        // Als de speler wint
        elseif($_GET['keuze'] == "schaar" && $computersChoice == "papier" || $_GET['keuze'] == "steen" && $computersChoice == "schaar" ||  $_GET['keuze'] == "papier" && $computersChoice == "steen")
        {
            $_SESSION['user1'] += 1;
        }

    }

    // Scorebord
    echo "<br>De score is " . $_SESSION['user1'] . " tegen " . $_SESSION['user2'];

    // Als speler1 of de computer gewonnen heeft begint de game opnieuw
    if($_SESSION['user1'] == 5)
    {
        echo "<p>Jij hebt gewonnen!</p>";
        //De stand wordt weggegooid
        session_destroy();
    }
    elseif($_SESSION['user2'] == 5)
    {
        echo "<p>De computer heeft gewonnen!</p>";
        //De stand wordt weggegooid
        session_destroy();
    }


    ?>
</main>
</body>
</html>