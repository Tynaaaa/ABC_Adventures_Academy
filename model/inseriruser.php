<?php
    if($_POST["cxnome"] != "" ) //se cxnome for diferente de vazio, faça isso:
    {
        include_once "../factory/conexao.php";
        $nome = $_POST["cxnome"];
        $email = $_POST["cxemail"];
        $senha = $_POST["cxpassword"];
        $sql = "insert into tbusuario(nome,email,senha)values('$nome','$email','$senha')";
        $query = mysqli_query($conn,$sql); //com o conn ele entra no banco e com o sql ele insere as informações. 
        echo "Dados cadastrados com sucesso!";
    }
    else
    {
        echo "Dados não cadastrados";
    }
?>