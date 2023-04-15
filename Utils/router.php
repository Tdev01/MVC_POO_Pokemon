<?php

// sépare les paramètre
$params = explode('/', $_GET['p']);
// var_dump($params);
// echo "<br>";


// est-ce qu'un parametre existe
if($params[0] != ""){
    $controller = ucfirst($params[0]);
    echo $controller;
    // après recupérer le nom du controller on va faire en sort de le recupérer dans un chemin si il existe 
    $action = isset($params[1]) ? $params[1] : 'index';
    // aller chercher le fichier du controller 
    require_once(ROOT.'Controllers/' . $controller . '.php');

    $controller = new $controller();

    if(method_exists($controller, $action)){
        $controller->$action();
    }else{
        http_response_code(404);
        echo"la page demander n'existe pas";
    }
    
}else{

}
if ($params[0]) {
    $controller = $params[0];
} else {
    $controller = 'Home';
}
if (@$params[1]) {
    $method = $params[1];
} else {
    $method = 'index';
}
if (@$params[2]) {
    $req = $params[2];
} else {
    $req = '';
}


$called = 'Controllers/' . $controller . '.php';
require($called);

if (method_exists($controller, $method,)) {
    $myctrl = new $controller();
    $myctrl->$method($req);
} else {
    echo 'Method ' . $controller . '::' . $method . '() does not exist';
}
