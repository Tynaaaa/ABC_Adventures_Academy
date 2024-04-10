<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/cad.css">
    <title>Cadastrar Usuário</title>
</head>
<body>
    <header id="info">
        <nav id="links">
            <a href="telalogin.php">Login</a>
            <a href="telacaduser.php">Cadastro</a>
            <a href="telacadnovoamigo.php">Indicar um amigo</a>
            <a href="telacadcomercio.php">Cadastrar empresa</a>
        </nav>
    </header>

    <div id="imagem">
        <img src="../img/telacaduser.gif">
    </div>


    <div class="formulario">
        <form action="../model/inseriruser.php" method="POST">
            <h1>Cadastre-se</h1>
            Nome:
            <input type="text" name="cxnome"/></br>
            E-mail:
            <input type="e-mail" name="cxemail"/></br>
            Senha:
            <input type="password" name="cxpassword"/></br>
            <input type="submit" value="Gravar" class="submit-bnt"/>
        </form>

    
        <form action="../model/consultausernome.php" method="POST" >
            <h1>Procure seu cadastro</h1>
            <label>Digite o nome completo do usuário:</label>
            <input type="text" name="cxpesquisa"/>
            <input type="submit" value="Pesquisa" class="submit-bnt"/>

        </form>
    </div>
    
    <div id="bnt-voltar"><a href="telamenu.php">Voltar</a></div>
    
    <footer id="rodape">
            <h1>Possui alguma dúvida?</h1>
            <form>
            E-mail 
            <input type="email" placeholder="Digite o seu e-mail" />
            Nome completo 
            <input type="text" placeholder="Digite o seu nome completo" />
            Dúvida
            <textarea  type="text" placeholder="Digite a sua dúvida"> </textarea>

            <button>Enviar</button>

            </form> 

            <div>
                <a href="https://web.whatsapp.com/" id="telefone"><img src="../img/telefone.jpg" alt="ícone de um telefone"> </a>
                <a href="https://www.gmail.com/mail/help/intl/pt_pt/about.html?linkId=75998329" id="email"><img src="../img/email.jpg" alt="ícone de uma carta"> </a>
                <a href="https://www.google.com.br/maps/@-23.4258432,-46.5436672,14z?entry=ttu" id="maps"><img src="../img/localizacao.jpg" alt="ícone de localização"> </a>
            </div>  
        </footer>
    
</body>
</html>