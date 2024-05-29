<?php

$result = $conn->query('SELECT * FROM about');

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo " - A propos : " . $row["about"] . "<br>";
    }
} else {
    echo "0 résultats";
}

include_once '../view/about.php';