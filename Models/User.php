<?php

class User {
    private $db;

    // Constructeur qui prend une instance de la connexion à la base de données
    public function __construct($db) {
        $this->db = $db;
    }

    // Fonction pour créer un nouvel utilisateur
    public function createUser($username, $email, $password) {
        // On prépare la requête SQL
        $stmt = $this->db->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
        // On bind les valeurs à la requête
        $stmt->bind_param("sss", $username, $email, $password);
        // On exécute la requête
        $stmt->execute();
        // On vérifie si l'utilisateur a bien été créé
        if ($stmt->affected_rows == 1) {
            // Si oui, on retourne l'ID de l'utilisateur créé
            return $stmt->insert_id;
        } else {
            // Sinon, on retourne faux
            return false;
        }
    }
}
