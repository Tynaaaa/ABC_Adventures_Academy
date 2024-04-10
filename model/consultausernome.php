<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        include_once "../factory/conexao.php";
        $nome = $_POST["cxpesquisa"];
        $consultar = "select *from tbusuario where nome = '$nome'";
        $executar = mysqli_query($conn,$consultar);

        $linha = mysqli_fetch_array($executar); //vai receber a resposta do executar (o fetch_array apenas organiza as informações)
    ?>

    Nome:
    <input type="text" value="<?php echo $linha['nome']?>" /><br/>
    E-mail:
    <input type="text" value="<?php echo $linha['email']?>" /><br/>
    Senha:
    <input type="text" value="<?php echo $linha['senha']?>" /><br/>
    
</body>
</html>