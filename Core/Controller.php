<?php

abstract class Controller {

    protected $vars = array();

    public function set($data){
        $this->vars = array_merge($this->vars , $data );
    }
    //pour envoyer à la page  
    public function render($filename){
        extract($this->vars);
        require(ROOT.'Views/'.$filename.'.php');
    }

}