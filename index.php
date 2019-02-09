<?php 

require_once("config.php");



 //$root = new Usuario();
 //$root->loadById(1);
 //echo $root;



//$list = Usuario::getList();
//echo json_encode($list);


//$search = Usuario::search("o");
//echo json_encode($search);


//$logar = new Usuario();
//$logar->login('root','123');
//echo $logar;

//$aluno = new Usuario('Eliana','mi');
//$aluno->insert();
//echo $aluno;

//$usuario = new Usuario();
//$usuario->loadById(3);
//$usuario->update('Carlitos','teves');
//echo $usuario;

$usuario = new Usuario();
$usuario->loadById(3);
$usuario->delete();
echo $usuario;

 ?>