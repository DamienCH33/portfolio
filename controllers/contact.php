<?php


require '../tools/Formulaire.php';

$db = new BaseDeDonnee();
$controle = new Formulaire();

if ($controle->isSubmitted()) {
    $controle->validate([
        ['colonne' => 'nom', 'requis' => true, 'alphabetique' => true],
        ['colonne' => 'prenom', 'requis' => true, 'alphabetique' => true],
        ['colonne' => 'mail', 'requis' => true, 'email' => true],
        ['colonne' => 'phone', 'requis' => true, 'phone' => true],
    ]);

    if ($controle->isValid()) {
        $db->insertTo('formulaire_contact', [
            'nom' => $_POST['nom'],
            'prenom' => $_POST['prenom'],
            'mail' => $_POST['mail'],
            'phone' => $_POST['phone'],
        ]);

        header('Location: /contact/?valid=1');
        exit;
    }
}

$errors = $controle->getErrors();

include_once '../view/contact.php';