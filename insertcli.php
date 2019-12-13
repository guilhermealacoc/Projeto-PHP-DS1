<?php
        include "conexao.php";

        $nome = $_POST["nome"];
        $endereco = $_POST["endereco"];
        $idade = $_POST["idade"];
        $telefone = $_POST["telefone"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        $stmt = $conexao->prepare("INSERT INTO cliente (Nome, Endereco, DataNasc, Telefone, Email, Senha) values ('$nome', '$endereco', '$idade', '$telefone', '$email', '$senha')");

        $stmt->execute();

        header("location:index_login.php");
        //
?>