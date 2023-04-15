<?php
// ce fichier nous permet de charger les classes automatiquement il faut preciser les dossiers ou se situe les class 
spl_autoload_register ( function ($class) {
    $sources = array(
        "Controllers/$class.php",
        "Core/$class.php",
        "DAO/$class.php",
        "Models/$class.php",
        "Views/$class.php"
    );

    foreach ($sources as $source) {
        if (file_exists($source)) {
            require_once $source;
        } 
    } 
});