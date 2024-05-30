<?php

include_once '../config.php';

class BaseDeDonnee
{
    protected $connexion = null;

    protected function getConnexion()
    {
        if (null === $this->connexion) {
            $this->connexion = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_DB);
        }

        if ($this->connexion->connect_error) {
            die("Erreur de connexion : " . $this->connexion->connect_error);
        }

        return $this->connexion;
    }

    public function trouveTout(string $table, array $order = []): array
    {
        $sql = 'SELECT * FROM ' . $table;

        if (!empty($order)) {
            $sql .= ' ORDER BY ' . array_key_first($order) . ' ' . strtoupper($order[array_key_first($order)]);
        }

        $result = $this->getConnexion()->query($sql);

        $rows = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $rows[] = $row;
            }
        }

        return $rows;
    }

    public function insertTo(string $table, array $data)
    {
        foreach ($data as $cle => $valeur) {
            $data[$cle] = $this->securiseLesDonnees($valeur);
        }

        $sql = "INSERT INTO " . $table . " (" . implode(', ', array_keys($data)) . ") VALUES ('" . implode("', '", $data) . "')";

        $this->getConnexion()->query($sql);
    }

    protected function securiseLesDonnees($valeur)
    {
        return addslashes($valeur);
    }
}