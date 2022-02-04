<?php
require_once 'model/user.php';

class usercontroller{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new user();
    }
    
    public function Index(){
        require_once 'view/headerplantilla.php';
        require_once 'view/user/user.php';
        require_once 'view/footerplantilla.php';
       
    }
    
}