<?php 

require_once("config.php");


//Carregar um usuario
 
 //$root = new Usuario();
 //$root->loadById(1);
 //echo $root;

//echo '<br><br>';

//$list = Usuario::getList();
//echo json_encode($list);


//$search = Usuario::search("o");
//echo json_encode($search);


$logar = new Usuario();
$logar->login('root','123');

echo $logar;



 ?>