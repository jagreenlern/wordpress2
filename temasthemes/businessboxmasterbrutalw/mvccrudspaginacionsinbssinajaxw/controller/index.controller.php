<?php
//require_once 'model/cliente.php';

class indexcontroller{
    
    private $model;
    
    public function __CONSTRUCT(){
        //$this->model = new cliente();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/index/index.php';
       
    }
    
    
}