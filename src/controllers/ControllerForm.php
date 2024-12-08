<?php

namespace src\controllers;

class ControllerForm {

    /**
     * Espace | \\\ | delete html / php
     *
     * @param string        
     * @return string
     */
    public function secuData($post) 
    {
        return trim(stripslashes(strip_tags($post)));
    }

    /**
     * Control Champs vide
     *
     * @param array $inputForm
     * @return bool
     */
    public function inputEmpty($inputForm)
    {
        foreach ($inputForm as $inputForms)
        {
            if(empty($inputForms))
            {
                return true;
            }
        }
    }

    /**
     * Control email
     *
     * @param string $mail
     * @return bool
     */
    public function controlMail($mail) 
    {
        if(filter_var($mail, FILTER_VALIDATE_EMAIL))
        {
            return true;
        }
    } 
}

// Début securisation formulaire.
$name = $mail = $phone = $message = "";
function securisation($donnees)
{
    $donnees= trim($donnees); //Supprime les espaces (ou d'autres caractères) en début et fin de chaîne
    $donnees = stripslashes($donnees); //Supprime les antislashs d'une chaîne
    $donnees = strip_tags($donnees); // Supprime les balises HTML et PHP d'une chaîne
    $donnees = htmlentities($donnees); // Convertit tous les caractères éligibles en entités HTML
    $donnees = htmlspecialchars($donnees); //Convertit les caractères spéciaux en entités HTML
    return $donnees; 
}