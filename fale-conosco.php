<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <title>Contatos Legendary</title>
    <link rel="stylesheet" href="../sitelegendary/_css/stylegg.css"/>
    <link rel="stylesheet" href="../sitelegendary/_css/form.css"/>
</head>

<body>
    <div id="interface">
        <header id="cabecalho">
            <img id="icone" src="../sitelegendary/_imagens/logo.png"/>
            <nav id="menu">
                <h1>Fale Conosco</h1>
                <ul type="disc">
                    <li><a href="../sitelegendary/index.html">Home</a></li>
                    <li><a href="../sitelegendary/fotos.html">Fotos</a></li>
                    <li><a href="../sitelegendary/fale-conosco.php">Fale conosco</a></li>
                </ul>
            </nav>
        </header>

        <section id="corpo-full">
            <article id="noticia-principal">
                <header id="cabecalho-artigo">
                    <hgroup>
                        <h1>Nossos Contatos</h1>
                    </hgroup>
                </header>

                <div class="contatos">
                    <h3>&#9993; Nosso Whatsapp: (81) 994527528</h3>
                    <h3>&#127752; Nosso Instagram: @legendary_acessorios</h3>
                    <h3>&#9989; Aceitamos diversas formas de pagamento</h3>
                    <h3>&#128205; Frete grátis em determinados pontos de entrega</h3>
                </div>

                <hr>

                <h2>Envie sua mensagem</h2>
                <form action="processar_formulario.php" method="post" class="form-contato">
                    <label for="nome">Nome:</label><br>
                    <input type="text" id="nome" name="nome" required><br><br>

                    <label for="email">E-mail:</label><br>
                    <input type="email" id="email" name="email" required><br><br>

                    <label for="mensagem">Mensagem:</label><br>
                    <textarea id="mensagem" name="mensagem" rows="5" required></textarea><br><br>

                    <button type="submit">Enviar</button>
                </form>
            </article>
        </section>

        <footer id="rodape">
            <p>Copyright&copy; 2022 - by Maria Eduarda Araújo<br>
            <a href="https://www.instagram.com/legendary_acessorios/?next=%2F" target="_blank">Instagram</a> 
        </footer>
    </div>
</body>
</html>
