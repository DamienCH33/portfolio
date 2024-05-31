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
            if (isset($_POST[$ligne['colonne']])) {
                $valeur = $_POST[$ligne['colonne']];
            }

            if (isset($ligne['validation'])) {
                foreach ($ligne['validation'] as $type) {
                    $methodName = 'validate' . ucfirst($type);
                    if (method_exists($this, $methodName)) {
                        $this->$methodName($ligne['colonne'], $valeur);
                    }
                }
            }

            /*
             * a finir
            if (isset($ligne['requis'])) {
                if (!isset($valeur) || $valeur === "") {
                    $this->errors[$ligne['colonne']] = "Ce champ est requis.";
                }
            }

            if (isset($ligne['message'])) {
                if (!isset($valeur) || $valeur === "") {
                    $this->errors[$ligne['colonne']] = "Ce champ est requis.";
                }
            }*/
        }

        if (empty($this->errors)) {
            return true;
        }

        return false;
    }

    protected function validateAlphabetique(string $nomDuChampDeFormulaire, ?string $valeur): bool
    {
        if (!is_null($valeur) && !preg_match("/^[a-zA-ZÀ-ÿ\s\-']+$/", $valeur)) {
            $this->errors[$nomDuChampDeFormulaire] = "Ce champ est incorrect.";

            return false;
        }

        return true;
    }

    protected function validatePhone(string $nomDuChampDeFormulaire, ?string $valeur): bool
    {
        if (!is_null($valeur) && !preg_match("/^[0-9\s+-]{10,18}+$/", $valeur)) {
            $this->errors[$nomDuChampDeFormulaire] = "Ce champ est incorrect.";

            return false;
        }

        return true;
    }

    protected function validateEmail(string $nomDuChampDeFormulaire, ?string $valeur): bool
    {
        if (!is_null($valeur)
            && !preg_match('/^[a-zA-Z0-9.!#$%&\'*+\\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)+$/', $valeur)
        ) {
            $this->errors[$nomDuChampDeFormulaire] = "Ce champ est incorrect.";

            return false;
        }

        return true;
    }

    public function getErrors(): array
    {
        return $this->errors;
    }
}