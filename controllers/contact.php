<?php


require '../tools/Formulaire.php';

$db = new BaseDeDonnee();
$controle = new Formulaire();

if ($controle->isSubmitted()) {
    $controle->validate([
        ['colonne' => 'nom', 'validation' => [
            'requis', 'alphabetique'
        ]],
        ['colonne' => 'prenom', 'validation' => [
            'requis',
            'alphabetique'
        ]],
        ['colonne' => 'mail', 'validation' => [
            'requis',
            'email'
        ]],
        ['colonne' => 'phone', 'validation' => [
            'requis',
            'phone'
        ]],
        ['colonne' => 'message', 'validation' => [
            'requis',
            'alphanumerique'
        ]],
    ]);

    if ($controle->isValid()) {
        $db->insertTo('formulaire_contact', [
            'nom' => $_POST['nom'],
            'prenom' => $_POST['prenom'],
            'mail' => $_POST['mail'],
            'phone' => $_POST['phone'],
            'message' => $_POST['message'],
        ]);

        header('Location: /contact/?valid=1');
        exit;
    }
}

$errors = $controle->getErrors();

include_once '../view/contact.php';