<?php
define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', 'usbw');
define('DB', 'login');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');