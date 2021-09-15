<?php
namespace Controllers;

class ContatoController extends Controller{
    
    public function __construct(){
        $this->view = new \Views\MainView('contato');
    }
    
    
    
    function executar(){
        $this->view->render();
    }

}





?>