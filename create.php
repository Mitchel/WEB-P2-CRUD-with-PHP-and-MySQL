<?php

    $firstname  = "Arjan";
    $age = 50;

    echo "Mijn voornaam is:" . $firstname . " en mijn leeftijd is: " . $age . "<br/><br/>";

    echo "<br/><hr><br/>";

    $username = array("1", "Mitchel", "", "Jansen");

    echo "Mijn id is: " . $username[0] . "<br/>";
    echo "Mijn voornaam is: " . $username[1] . "<br/>";
    echo "Mijn tussenvoegsel is: " . $username[2] . "<br/>";
    echo "Mijn achternaam is: " . $username[3] . "<br/>";

    echo "<br/><hr><br/>";

    // Associatief array
    $username = array("id" => 1, "firstname" => "Mitchel", "infix" => "", "lastname" => "Jansen");

    echo "Mijn id is: " . $username["id"] . "<br/>";
    echo "Mijn voornaam is: " . $username["firstname"] . "<br/>";
    echo "Mijn tussenvoegsel is: " . $username["infix"] . "<br/>";
    echo "Mijn achternaam is: " . $username["lastname"] . "<br/>";

    echo "<br/><hr><br/>";

    // Met var_dump maak je de inhoud van een array zichtbaar.
    echo "<pre>"; var_dump($username); "</pre>";

    echo "<br/><hr><br/>";

    // var_dump met de waardes van index.php
    echo "<pre>"; var_dump($_POST); "</pre>";

?>