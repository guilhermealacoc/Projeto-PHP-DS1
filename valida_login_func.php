<?php
session_start();
include('conexao.php');

if(empty($_POST['nome']) || empty($_POST['senha'])) {
	header('Location: index_login.php');
	exit();
}

$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select nome from funcionario  where nome = '{$nome}' and senha = '{$senha}'";

// echo $query;exit;
// md5()

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
	$_SESSION['nome'] = $nome;
	header('Location: areaadmin.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: login_func.php');
	exit();
}