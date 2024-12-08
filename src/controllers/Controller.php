<?php 

namespace src\controllers;

class Controller {
    
    /**
     * Start display views & pages
     */

    public function requireView($view) {

        $view = 'view'.$view;

        if(!file_exists('src/views/pages/' .$view. '.php')) {
            header("Location: https://robin-everaert.fr/index.php?p=NotFound");  
        }
        
        require 'src/views/pages/' .$view. '.php';    
    }
}