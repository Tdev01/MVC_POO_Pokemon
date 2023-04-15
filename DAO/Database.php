<?php

//fonction qui permet de se connecter à la base de données
function connectToDB(){
    //informations de connexion
    $host = "dbPK"; //nom de l'hôte (serveur de base de données)
    $user = "Teddy"; //nom de l'utilisateur de la base de données
    $pass = "Pokemon2023"; //mot de passe de l'utilisateur de la base de données
    $dbname = "Pokemon"; //nom de la base de données
    
    // test avec try
    // Connection à la base de données
    try {
        //instanciation de la connexion à la base de données
        $dbBB = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        //configuration du mode d'erreur pour lever des exceptions en cas d'erreur de requête
        $dbBB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        //affichage de l'erreur en cas d'échec de la connexion
        echo "Erreur : " . $e->getMessage();
    }

    //retourne l'objet de connexion à la base de données
    return $dbBB;

}
