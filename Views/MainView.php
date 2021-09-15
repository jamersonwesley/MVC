<?php
namespace Views;
class Mainview {
    private $filename;
    private $header;
    private $footer;
    public $menuitens = array('PaginaInicial    ','Sobre  ','Contato  ');
    public function __construct($filename,$header ='header.php',$footer='footer.php'){
        $this->filename = $filename;
        $this->header = $header;
        $this->footer = $footer;
    }
    function render(){
        include('pages/teamplates/'.$this->header);
        include('pages/'.$this->filename.".php");
        include('pages/teamplates/'.$this->footer);

    }
}




?>