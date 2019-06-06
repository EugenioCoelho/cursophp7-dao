<?php 

require_once("config.php");

//Carrega um usuário
//$root = new Usuario();
//$root->loadbyId(1);
//echo $root;

//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);


//Carega uma lista de usuários buscando pelo login
//$search = Usuario::search("nio");
//echo json_encode($search);

//Carrega um usuário usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("Eugenio", "12345");

//echo $usuario;

$aluno = new Usuario("Edna", "234531");

$aluno->insert();

echo $aluno;
?>