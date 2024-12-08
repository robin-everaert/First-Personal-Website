<?php

require 'vendor/autoload.php'; 

use src\controllers\{
    Controller
};
 
$controller = new Controller();

    if (isset($_GET['p'])) {
        $p = $_GET['p'];      
    } else {
        $p = 'accueil';
    }

    ob_start();
    $controller -> requireView(ucfirst($p)); 
    $content = ob_get_clean(); 

    $title = "Everaert Robin | " . $p; 
?>