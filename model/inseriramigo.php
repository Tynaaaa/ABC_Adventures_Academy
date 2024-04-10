<?php 
    if($_POST["cxnome"] != "" )
    {
        include_once "../factory/conexao.php";
        $nome = $_POST["cxnome"];
        $email = $_POST["cxemail"];
        $data = $_POST["cxdata"];
        $telefone = $_POST["cxtel"];
        $sql = "insert into tbamigos(nome,email,datanasc,tel)values('$nome','$email','$data','$telefone')";
        $query = mysqli_query($conn,$sql);
        echo "Dados cadastrados com sucesso!";
    }
    else
    {
        echo "Dados não cadastrados";
    }

    ?>
