<?php

require 'vendor/autoload.php';
require_once 'data/dataService.php';

use src\controllers\{
    ControllerService
};

$service = new ControllerService();

?>

<section id="service-section">
    <h1>Services et prestations</h1>
    <article class="service-article">

        <div class="service-container">
            <div> 
                <img src="public/assets/img/wordpress.jpg" alt="">
                <h3>Site Wordpress</h3>
                <ul>
                    <?php $service -> getService($services["wordpress"]); ?> 
                </ul>  
            </div>
            <div>
                <img src="public/assets/img/dev.jpg" alt="">
                <h3>Site codé à la main</h3>
                <ul>
                    <?php $service -> getService($services["site_code"]); ?>
                </ul> 
            </div>
            <div> 
                <img src="public/assets/img/code.jpg" alt="">
                <h3>Développement spécifique</h3>
                <ul>
                   <?php $service -> getService($services["dev"]); ?> 
                </ul>   
            </div>
        </div>

    </article>   
     
</section>


