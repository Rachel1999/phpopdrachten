<?php
    // Timezone staat op Amsterdam
    date_default_timezone_set("Europe/Amsterdam");

        // Loop voor de dagen in de week
        for ($counter = 0; $counter < 10 ; $counter++)
        {
            // Elke dag +1 bij
            $date = strtotime("+" . $counter . "days");
            // Dagnummer, Dagnaam en Datum
            echo "<p> Dag " . date('w', $date) . " is " . date('l d-m-Y', $date)  . "</p>";
        };

?>
