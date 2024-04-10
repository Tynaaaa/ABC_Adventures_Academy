<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/menu.css">
    <title>Document</title>
</head>
<body>
    <section id="cxprincipal">

        <header id="info">
            <nav id="links">
                <a href="telalogin.php">Login</a>
                <a href="telacaduser.php">Cadastro</a>
                <a href="telacadnovoamigo.php">Indicar um amigo</a>
                <a href="telacadcomercio.php">Cadastrar empresa</a>
            </nav>
        </header>

        <div class="banner">
            <img src="../img/abc_um.jpg" alt="imagem 1" class="slide active">
            <img src="../img/abc_dois.jpg" alt="Imagem 2" class="slide">
            <img src="../img/abc_tres.jpg" alt="Imagem 2" class="slide">
            <img src="../img/abc_quatro.jpg" alt="Imagem 2" class="slide">
            <img src="../img/abc_cinco.jpg" alt="Imagem 2" class="slide">
            <img src="../img/abc_seis.jpg" alt="Imagem 2" class="slide">
            <img src="../img/abc_sete.jpg" alt="Imagem 2" class="slide">
            <img src="../img/abc_oito.jpg" alt="Imagem 2" class="slide">
        
        </div>      

        <div id="opcoes"> 
            <nav id="cxamigo"></nav>
            <nav id="cxcomercio"></nav>
            <nav id="cxusuario"></nav>
            <nav id="cxconsultaamigo"></nav>
            <nav id="cxconsultacomercio"></nav>
            <nav id="cxconsultauser"></nav>
        </div>

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
    </section>
    
</body>
</html>