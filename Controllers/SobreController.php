<?php
namespace Controllers;
class SobreController extends Controller{

    public function __construct(){
        $this->view = new \Views\MainView('sobre');
    }
    
    function executar(){
       $this->view->render();
    }

}




?>