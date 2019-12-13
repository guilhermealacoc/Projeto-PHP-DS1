<!doctype html>

<html lang="pt-br">

<?php include 'header.php'; ?>
<?php include 'navbar_logado.php'; ?>
<?php
include('verifica_login.php');
?>
<?php
    include 'conexao.php'
?>




<article>

    <div class="text-center">
    <h2>Ola <?php echo $_SESSION['email'];?> seja bem vindo!!!</h2>
    <h2><a href="logout.php"></a></h2>

        <!-- my-5 para criar margem em cima e embaixo; mt-5 cria apenas margem no topo -->

        <div class="container" style="margin-top:30px">

            <div class="col-sm-12 text">

                <!-- Slide de Produtos -->                
                
                <div class="row" style="margin-left:250px ">
                
                <h1>Compra Efetuada com sucesso!!!</h1>
                    
                </div>
                <div class="row" style="margin-left:450px ">

                <a href="painel.php">Continuar comprando</a>
                </div>


<?php include 'footer.php'; ?>