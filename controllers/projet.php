<?php

$result = $conn->query('SELECT * FROM projet');

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo " - Projet : " . $row["nom du projet"] . " - déscriptif du projet : " . $row["descriptif projet 1"] ."<br>";
    }
} else {
    echo "0 résultats";
}

include_once '../view/projet.php';