<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<?php include 'header.php'; ?>

<?php include 'navbar.php'; ?>
<body>
    <div class="container-fluid">
        <div class="row" style="margin-top:30px">
            <div class="col-12 d-flex justify-content-center flex-wrap">
                <form action="insertcli.php" method="POST" name="form1" >
                <h1>Cadastre-se</h1> 
                    <div class="form-group">
                        <label for="titulo">Nome: </label>
                        <input type="text" class="cadcli" name="nome" id="nome" aria-describedby="Título" placeholder="Digite seu email">
                    </div>
                    <div class="form-group">
                        <label for="editora">Endereco: </label>
                        <input type="text" class="cadcli" name="endereco" id="endereco" placeholder="Digite a Editora">
                    </div>
                    <div class="form-group">
                        <label for="valor">Idade: </label>
                        <input type="date" class="cadcli" name="idade" id="idade" placeholder="Valor">
                    </div>
                    <div class="form-group">
                        <label for="valor">Telefone: </label>
                        <input type="text" class="cadcli" name="telefone" id="telefone" placeholder="Valor">
                    </div>
                    <div class="form-group">
                        <label for="valor">Email: </label>
                        <input type="email" class="cadcli" name="email" id="email" placeholder="Valor">
                    </div>
                    <div class="form-group">
                        <label for="valor">Senha: </label>
                        <input type="text" class="cadcli" name="senha" id="senha" placeholder="Valor">
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</body>
<?php include 'footer.php'; ?>
</html>