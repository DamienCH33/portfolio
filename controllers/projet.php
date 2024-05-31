<?php
$baseDeDonnee = new BaseDeDonnee();
$rows = $baseDeDonnee->trouveTout('projet');


include_once '../view/projet.php';