<?php
require_once('Database.php');
class UserDAO {

    private $db_connect;

    public function insert($data) {

        $db_connect = connectToDB();

        $firstname= $data['firstname'];
        $lastname = $data['lastname'];
        $nickname = $data['nickname'];
        $password = $data['password'];
        $password = hash('sha256', $password);
        $statement = $db_connect->prepare(" INSERT INTO Users(firstname,lastname,nickname,password) VALUES(:firstname,:lastname,:nickname,:password)");
        try {
            $statement->execute(array(':firstname' => $firstname, ':lastname' => $lastname, ':nickname' => $nickname, ':password' => $password));
            return TRUE;
        }
        catch (PDOException $e){
            echo "Erreur : ".$e->getMessage();
        }

    }

    public function verify($params) {
       
        $db_connect = connectToDB();

        $nickname = $params['nickname'];

        $statement = $db_connect->prepare("SELECT id_User, nickname, firstname, lastname FROM Users WHERE `nickname` = :nickname");

        try {
            $statement->bindParam(':nickname', $nickname);
            $statement->execute();
            $result = $statement->fetch(PDO::FETCH_ASSOC);
            if($result['nickname'] == $nickname) {
                $_SESSION['firstname'] = $result['firstname'];
                $_SESSION['lastname'] = $result['lastname'];
                return TRUE;

            } else {
                echo 'utilisateur inconnu';
            }
        } catch (PDOException $e){
            echo "Erreur : ".$e->getMessage();
        }
    }

   

    
}
