<?php
    if($_POST["cxname"] != "")
    {
        include_once "../factory/conexao.php";
        $nome = $_POST["cxname"];
        $contato = $_POST["cxcontato"];
        $telefone = $_POST["cxtel"];
        $email = $_POST["cxemail"];
        $sql = "insert into tbcomercio(contato,empresa,tel,email)values('$contato','$nome','$telefone','$email')";
        $query = mysqli_query($conn,$sql);
        echo "Dados cadastrados com sucesso!";
    }
    else
    {
        echo "Dado não cadastrados";
    }

?>