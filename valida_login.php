<?php
session_start();
include('conexao.php');

if(empty($_POST['email']) || empty($_POST['senha'])) {
	header('Location: index_login.php');
	exit();
}

$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select email from cliente where email = '{$email}' and senha = '{$senha}'";

// echo $query;exit;
// md5()

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
	$_SESSION['email'] = $email;
	header('Location: painel.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: index_login.php');
	exit();
}

//  $PDO = db_connect('conexao.php');
 
// $sql = "SELECT email FROM cliente where email = :email AND senha = :senha";
// $stmt = $PDO->prepare($sql);
 
// $stmt->bindParam(':email', $email);
// $stmt->bindParam(':senha', $senha);
 
// $stmt->execute();

// $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

// if (count($users) <= 0)
// {
//     echo "Email ou senha incorretos";
//     exit;
// }

// $user = $users[0];
 
// session_start();
// $_SESSION['logged_in'] = true;
// $_SESSION['user_email'] = $user['email'];
// $_SESSION['user_senha'] = $user['senha'];
 
// header('Location: areaadmin.php');

