<?php
/*
     User: Rachel1999
     Date: 7-4-2020
     Time: 06:31
     File: script.php
*/

// Array met de username en password combinaties
$login = array("Momo"=>"Stamina","Lala"=>"Feminine","Mexx"=>"Cuddly","Kiara"=>"Jumpy","Lulu"=>"Food","ChuChu"=>"Quiet","DD"=>"Bread","Coco"=>"Doctor","TT"=>"Sweet","Sylvester"=>"Grizzlybear");
$message = ""; // Bericht begint altijd leeg
$showLoginScreen = true; //login screen staat automatisch op true

// variabelen aangemaakt voor de $_POST van username
// Dit wordt alleen gedaan als de username bestaat
if(isset($_POST['username']))
{
    $username = $_POST['username'];
}
else
{
    $username = "";
};

// variabelen aangemaakt voor de $_POST van password
// Dit wordt alleen gedaan als de password bestaat
if(isset($_POST['password']))
{
    $password = $_POST['password'];
}
else
{
    $password = "";
};


if(isset($_POST['submit']))
{
    // Variabelen aangemaakt dat de combination automatisch op false staat
    $combination = false;

    // Foreach met de combinaties
    foreach ($login as $user => $pass)
    {
        // Als username hetzelfde is als de username in de foreach
        if ($username == $user)
        {
            // Als de vorige waar is dan wordt er gecheckt of het wachtwoord hetzelfde is bij de bijbehorende combinatie
            // Als dit waar krijgt de user onderstaande code te zien
            if($password == $pass)
            {
?>
                <link rel="stylesheet" type="text/css" href="css/style.css">
                <!-- Uitwerkingen opdracht 5-4 -->
                <main id="wrapper">
                    <!-- Discotheek naam -->
                    <h1>
                        Bergheen
                    </h1>
                    <!-- Welkomst bericht -->
                    <p>
                        Welkom!
                    </p>

                    <!-- Openingstijden Bergheen -->
                    <fieldset id="left">
                        <legend>Openingstijden</legend>
                        <p>
                            Do: 22:00<br>
                            Vr: All day<br>
                            Za: All day<br>
                            Zo: 12:00
                        </p>
                    </fieldset>


                    <!-- Adresgegevens Bergheen -->
                    <fieldset>
                        <legend>Adresgegevens</legend>
                        <p>
                            Am Wriezener Bahnhof<br>
                            10243 Berlin<br>
                            Duitsland
                        </p>
                    </fieldset>

                    <!-- Geheimhouding -->
                    <p>
                        Deze gegevens dien je ten allen tijden geheim te houden!
                    </p>
                </main>
                </body>
                </html>


<?php
                $showLoginScreen = false; // De inlogpagina verdwijnt
                $combination = true; // Combinatie is true
            }
        }
    }

    // Als combinatie fout is dan krijg je onderstaand bericht
    if($combination == false)
    {
        $message = "Foutieve username en / of wachtwoord";
    }
    // Als username of password leeg is krijg je onderstaand bericht
    if(empty($username) || empty($password))
    {
        $message = "De username en password moeten allebei ingevuld zijn om in te loggen";
    }
}


?>
