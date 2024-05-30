<?php

$baseDeDonnee = new BaseDeDonnee();
$rows = $baseDeDonnee->trouveTout('competences', ['level' => 'desc']);

$baseDeDonnee->insertTo('competences', [
    'Name' => "Totototot",
    'descriptif_competence' => 'foobar',
    'level' => 20
]);

foreach ($rows as &$row) {
    $row['Name_formatted'] = strtoupper($row['Name']);
    $row['descriptif_competence'] = ucfirst($row['descriptif_competence']);
}

for ($i = 0; $i < count($rows); $i++) {
    $rows[$i]['Name_formatted'] = strtoupper($rows[$i]['Name']);
    $rows[$i]['descriptif_competence'] = ucfirst($rows[$i]['descriptif_competence']);
}

include_once '../view/competences.php';