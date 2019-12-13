<?php   include 'conexao.php';   

$buscaDadosProduto = mysqli_query($conexao, "SELECT titulo, editora, valor, descricao data FROM produto");  

 while($dadosProduto = mysqli_fetch_object($buscaDadosProduto)): 

    
//armazena em uma variável o caminho concatenado com o nome vindo do banco de dados 

// $buscaDadosArquivo = mysqli_query($conexao, "SELECT codigo, arquivo, data FROM arquivo");  

// while($dadosArquivo = mysqli_fetch_object($buscaDadosArquivo)):  
    

//     $img = "upload/$dadosArquivo->arquivo";   
    
//     echo "<div class='row col-sm-3'>         
//            <h1>$dadosArquivo->data</h1>                    
//            <p>$dadosArquivo->data</p>             
           
//     <div class='card'>                    
//         <img src='$img' alt='$dadosArquivo->arquivo' />                 
//     </div>";   

    echo "<div class='row col-sm-3'>         
           <h1>$dadosProduto->titulo</h1>                    
           <p>$dadosProduto-></p>
           </div>";             
    
endwhile;
?> 

 