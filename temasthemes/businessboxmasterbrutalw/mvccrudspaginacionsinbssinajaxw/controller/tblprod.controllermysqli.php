<?php
require_once 'model/tblprod.php';

class tblprodcontroller{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new tblprod();
    }
    
    public function Index(){
        require_once 'view/headerplantilla.php';
        require_once 'view/tblprod/tblprod.php';
        require_once 'view/footerplantilla.php';
       
    }
    

}