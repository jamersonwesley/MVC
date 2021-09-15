<?php

define('INCLUDE_PATH_FULL','http://localhost/MVC/Views/pages/');
define('CSS','http://localhost/MVC/Views/pages/');
define('INCLUDE_PATH','http://arboviroses.com');
class Application{
    public function executar(){
        $url =isset($_GET['url']) ? explode ('/' ,$_GET['url'])[0]: 'PaginaInicial';
    
        $url = ucfirst($url);
        $url.='Controller';
        if(file_exists('Controllers/'.$url.'.php')){
            $classname = 'Controllers\\'.$url;
            $Controller = new $classname;
            $Controller->executar();
        }
        else{
            echo"Não existe esse controlador";
        }

    
    }
}


?>