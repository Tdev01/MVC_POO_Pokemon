<?php
class Signin extends Controller {

    public function index() {
        $this->render('signin_tpl');
    }

    public function deconnect() {
        session_unset();
        $this->render('home');
    }

    public function record() {
        
        $newUser = new UserDAO;
        if ($newUser->insert($_POST)) {
            $this->render('combat_tpl');
        }
        else {
            echo "Ca n'a pas marché";
        }

    }

    public function checkUser() {
       
        $newUser = new UserDAO;

        if($newUser->verify($_POST)){
            $this->render('combat_tpl');
        }else{
            echo "uilisateur non connue";
        }
         

        
    }

}