<?php
// Uitvoeren van een query via exc()
function executeQueryViaExec($sql)
{
    global $pdo;
    try
    {
        // Uitvoeren van de query via exec()
        $pdo->exec($sql);
    }
    catch (PDOException $e)
    {
        echo "Er is een probleem met het uivoeren van een exec(): " . $e->getMessage();
        exit();
    }
}

?>
