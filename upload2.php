<html>

<?php
if(isset($_POST['enviar']));
    $formatosPermitidos = array("png", "jpeg", "png", "gif");
    $extensao = pathinfo($_FILES['arquivos']['nome'], PATHINFO_EXTENSION)

    echo $extensao;


endif;

?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multpart/form-data">
    <input type="file" name="arquivo">
    <input type="submit" value="salvar">
</form>

</html>