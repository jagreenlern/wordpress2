<?php
require_once 'model/products.php';

class productscontroller{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new products();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/products/products.php';
       
    }
    
    public function Crud(){
        $products = new products();
        
        if(isset($_REQUEST['id'])){
            //cargar clase para usarla mas tarde cargar datos por id o todos.
            $products = $this->model->Obtener($_REQUEST['id']);
        }
        
        //Mustra el header y products editar y has
        require_once 'view/header.php';
        require_once 'view/products/products-editar.php';
        
    }
    /*    public $SupplierIDs;
    public $id;
    public $ProductCode;
    public $ProductName;
    public $Description;  
    public $StandardCost;
    public $ListPrice;
	public $ReorderLevel;
	public $TargetLevel;
	public $QuantityPerUnit;
	public $Discontinued;
	public $MinimumReorderQuantity;
	public $Category;
	public $Attachments;*/
    public function Guardar(){
        $products = new products();
        
        $products->SupplierIDs = $_REQUEST['SupplierIDs'];
        $products->ID = $_REQUEST['id'];
        
        $products->ProductCode = $_REQUEST['ProductCode'];
        $products->ProductName = $_REQUEST['ProductName'];
        $products->Description = $_REQUEST['Description'];
        $products->StandardCost = $_REQUEST['StandardCost'];  
        $products->ListPrice = $_REQUEST['ListPrice'];
        $products->ReorderLevel = $_REQUEST['ReorderLevel'];
        $products->TargetLevel = $_REQUEST['TargetLevel'];
        $products->QuantityPerUnit = $_REQUEST['QuantityPerUnit'];
        $products->Discontinued = $_REQUEST['Discontinued'];
        $products->MinimumReorderQuantity = $_REQUEST['MinimumReorderQuantity'];
        $products->Category = $_REQUEST['Category'];
        $products->Attachments = $_REQUEST['Attachments'];      

        $products->ID > 0 
            ? $this->model->Actualizar($products)
            : $this->model->Registrar($products);
        
 //       header('Location: index.php');
    }
    
    public function Eliminar(){

        $this->model->Eliminar($_REQUEST['id']);
 //       header('Location: index.php');
    }
}