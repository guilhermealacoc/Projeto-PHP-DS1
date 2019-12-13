<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<?php include 'header.php'; ?>

<?php include 'navbar_logado.php'; ?>
<body>
    <div class="container-fluid">
        <div class="row" style="margin-top:30px">
            <div class="col-12 d-flex justify-content-center flex-wrap">
                <form action="insertfunc.php" method="POST" name="form1" >
                <h1>Cadastre os Funcionários</h1> 
                    <div class="form-group">
                        <label for="titulo">Nome: </label>
                        <input type="text" class="cadfunc" name="nome" id="nome" aria-describedby="Título" placeholder="Digite o Título">
                    </div>
                    <div class="form-group">
                        <label for="editora">Área: </label>
                        <input type="text" class="cadfunc" name="area" id="area" placeholder="Digite a Editora">
                    </div>
                    <div class="form-group">
                        <label for="valor">Id: </label>
                        <input type="text" class="cadfunc" name="id" id="id" placeholder="Valor">
                    </div>
                    <div class="form-group">
                        <label for="valor">Senha: </label>
                        <input type="text" class="cadfunc" name="senha" id="senha" placeholder="Somente Números">
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</body>
<?php include 'footer.php'; ?>
</html>