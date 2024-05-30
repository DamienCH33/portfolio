<?php

include_once '../config.php';

class Formulaire
{
    protected array $errors = [];

    public function isSubmitted(): bool
    {
        return $_SERVER["REQUEST_METHOD"] == "POST";
    }

    public function isValid(): bool
    {
        if (empty($this->errors)) {
            return true;
        }

        return false;
    }

    public function validate(array $validation): bool
    {
        foreach ($validation as $ligne) {
            if (!isset($ligne['colonne'])) {
                die("erreur de validation : colonne manquante");
            }

            $valeur = null;
            if (isset($ligne['requis']) && $ligne['requis'] === true) {
                if (!isset($_POST[$ligne['colonne']]) || $_POST[$ligne['colonne']] === "") {
                    $this->errors[$ligne['colonne']] = "Ce champ est requis.";
                } else {
                    $valeur = $_POST[$ligne['colonne']];
                }
            }

            if (isset($ligne['alphabetique']) && $ligne['alphabetique'] === true) {
                if (!is_null($valeur) && !preg_match("/^[a-zA-ZÀ-ÿ\s\-']+$/", $valeur)) {
                    $this->errors[$ligne['colonne']] = "Ce champ est incorrect.";
                }
            }

            if (isset($ligne['email']) && $ligne['email'] === true) {
                if (!isset($_POST[$ligne['colonne']]) || $_POST[$ligne['colonne']] === "") {
                    $this->errors[$ligne['colonne']] = "Ce champ est requis.";
                } else {
                    $valeur = $_POST[$ligne['colonne']];
                }
            }

            if (isset($ligne['phone']) && $ligne['phone'] === true) {
                if (!is_null($valeur) && !preg_match("/^[0-9\s+-]{10,18}+$/", $valeur)) {
                    $this->errors[$ligne['colonne']] = "Ce champ est incorrect.";
                }
            }
        }

        if (empty($this->errors)) {
            return true;
        }

        return false;
    }

    public function getErrors(): array
    {
        return $this->errors;
    }
}