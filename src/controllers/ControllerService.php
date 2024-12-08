<?php
namespace src\controllers;

class ControllerService {

    public function getService($serv) {

        foreach ($serv as $s => $v): ?>

                <div class="li-service-container">
                    <i class="fa fa-check"></i>
                    <li> 
                        <?= $v ?>
                    </li>
                </div>
            
        <?php endforeach; 
    }
} // Close Class;
