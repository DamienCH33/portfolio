<?php

$host = 'localhost';
$db = 'portfolio';
$user = 'root';
$pass = '';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Erreur de connexion : " . $conn->connect_error);
}

function trouveTout(string $table, array $order = []): array
{
    global $conn;

    $sql = 'SELECT * FROM ' . $table;

    if (!empty($order)) {
        $sql .= ' ORDER BY ' . array_key_first($order) . ' ' . strtoupper($order[array_key_first($order)]);
    }

    $result = $conn->query($sql);

    $rows = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
    }

    return $rows;
}

function insertTo(string $table, array $data)
{

}