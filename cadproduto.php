
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
                   <form action="valida_upload.php" method="POST" enctype="multipart/form-data">
                            Arquivo: <input type="file" required name="arquivo">
                            <input type="submit" value="salvar">
                            <!-- <?php if ($msg != false) echo "<p> $msg </p>"; ?> -->
                        </form> 
            </div>

            <div class="col-12 d-flex justify-content-center flex-wrap">
                <form action="insertproduto.php" method="POST" name="form1" >
                <h1>Cadastre os Produtos</h1> 
                    
                    <div class="form-group">
                        <label for="titulo">Título: </label>
                        <input type="text" class="cadprod" name="titulo" id="titulo" aria-describedby="Título" placeholder="Digite o Título">
                    </div>
                    <div class="form-group">
                        <label for="editora">Editora: </label>
                        <input type="text" class="cadprod" name="editora" id="editora" placeholder="Digite a Editora">
                    </div>
                    <div class="form-group">
                        <label for="preco">Valor: </label>
                        <input type="text" class="cadprod" name="preco" id="preco" placeholder="Valor">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Descrição do Livro</label>
                        <textarea class="form-control" name="descricao" id="descricao" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form><br>        
            </div>
               
        </div>
    </div>
</body>
<?php include 'footer.php'; ?>
</html>
