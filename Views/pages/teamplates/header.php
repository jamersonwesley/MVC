<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<link href="<?php echo INCLUDE_PATH_FULL ?>css/bootstrap.css" type= "text/css" rel="stylesheet" />
<link href="<?php echo CSS ?>css/style.css" type= "text/css" rel="stylesheet" />
<title></title>
</head>
<body>
<nav class="navbar navbar-expand-lg ">
    <?php foreach($this->menuitens as $key => $value){
     echo '<a href="PaginaInicial">'. $value. ',</a>';
     echo '<a href="Sobre'.$value.">'. $value. ',</a>';
     echo '<a href="contato">'. $value. ',</a>';
    }?>
    </div>
  </div>
</nav>
