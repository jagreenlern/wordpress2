<?php
require_once 'model/database.php';

//$controller = 'cliente';

// Todo esta lógica hara el papel de un FrontController
if(!isset($_REQUEST['c']))
{
    //si  no hay controladdor como variable carga la pagina index
    header('Location: ?c=index&a=index');
    require_once "controller/$controller.controller.php";
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;
    $controller->Index();

}
else
{
    // Obtenemos el controlador que queremos cargar
    $controller = strtolower($_REQUEST['c']);
    $accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'Index';
    
    // Instanciamos el controlador
    require_once "controller/$controller.controller.php";
    // Muchisimo cuidado !! debemos poner el mismo nombre a la clase contenida del controlador que el nombre del archivo
    //Ej: clase cliente arvhivo controlador clientecontroller.controller.php
    $controller = ucwords($controller) . 'controller';
    $controller = new $controller;
    //$controller->Index();    
    // Llama la accion
   call_user_func( array( $controller, $accion ) );
}