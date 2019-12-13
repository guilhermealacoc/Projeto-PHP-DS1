<?php
        include "conexao.php";

        $titulo = $_POST["titulo"];
        $editora = $_POST["editora"];
        $preco = $_POST["preco"];
        $descricao = $_POST["descricao"];

        $stmt = $conexao->prepare("INSERT INTO produto (Titulo, Editora, Valor, Descricao) values ('$titulo', '$editora', '$preco', '$descricao')");

        $stmt->execute();

        header("location:areaadmin.php");
?>