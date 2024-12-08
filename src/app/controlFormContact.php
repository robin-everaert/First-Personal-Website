<?php

require '../../vendor/autoload.php';

use src\controllers\{
    ControllerForm
};

header('Content-Type: application/json;charset=utf-8');


$controllerForm = new ControllerForm();

if($controllerForm -> inputEmpty($_POST)) {
    $data['response'] = "error";
    $data['content'] = "Veuillez remplir tous les champs"; 
}

else {        
    $name = $controllerForm -> secuData($_POST['name']);
    $email = $controllerForm -> secuData($_POST['email']);
    $phone = $controllerForm -> secuData($_POST['phone']);
    $message = $controllerForm -> secuData($_POST['message']);

    $header = "Prénom -> " . $name . "\r\nEmail -> " . $email . "\r\nTéléphone -> " . $phone;

      mail(
        'r-everaert@outlook.fr',
        'Formulaire de contact Everaert Robin',
        $message,
        $header,
     );

    $data['response'] = "success";
    $data['content'] = "Votre message a bien été envoyé " . $name;
    $data['post'] = $_POST; 
}  

echo json_encode($data);
?>



