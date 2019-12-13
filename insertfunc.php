<?php
        include "conexao.php";

        $nome = $_POST["nome"];
        $area = $_POST["area"];
        $id = $_POST["id"];
        $senha = $_POST["senha"];

        $stmt = $conexao->prepare("INSERT INTO funcionario (Nome, Area, Id, Senha) values ('$nome', '$area', '$id', '$senha')");

        $stmt->execute();

        header("location:areaadmin.php");
?>