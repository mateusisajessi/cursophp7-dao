<?php 

	require_once("config.php");

	//Carrega todos os dados da tabela
	// $sql= new Sql();
	// $usuarios = $sql->select("SELECT * FROM tb_usuarios");
	// echo json_encode($usuarios);

	//Carrega um usuário
	// $root = new Usuario();
	// $root->loadById(3);
	// echo $root;

	//Carrega uma lista de usuários
	// $lista = Usuario::getList();
	// echo json_encode($lista);

	//Carrega uma lista de usuários buscando pelo login
	// $search = Usuario::search("m");
	// echo json_encode($search);

	//Carrega um usuario usando o login e a senha
	// $usuario = new Usuario();
	// $usuario->login("mateus", "12345678");
	// echo $usuario;

	//Criando um novo usuario
	// $aluno = new Usuario("aluno2", "123456");
	// // $aluno->setDeslogin("aluno");
	// // $aluno->setDessenha("$@alun0");
	// $aluno->insert();
	// echo $aluno;

	$usuario = new Usuario();
	$usuario->loadById(6);
	$usuario->update("professor", "456789");
	echo $usuario;

?>