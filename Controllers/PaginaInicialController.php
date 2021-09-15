<?php
namespace Controllers;

class PaginaInicialController extends Controller{
    
    public function __construct(){
        $this->view = new \Views\MainView('PaginaInicial');
    }
    
    
    
    function executar(){
        $this->view->render();
    }

}





?>