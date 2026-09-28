<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetVida | Cuidado completo para seu pet</title>

    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="responsividade.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400..700;1,400..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <!--Cabeçalho de navegação-->
    <header>
        <nav class="nav_header">
            <img class="img_logo" src="itens/logo_PetVida.png" alt="Logo do pet shop PetVida. Possui uma pata de cachorro laranja à esquerda seguido do texto PetVida em cor marrom escura e o pingo do i na cor laranja">
            <img class="menu" src="itens/ícones/menu.png" alt="" onclick="toggleMenu()">
            <div class="div_menu" id="menu">
                <div class="div_menu_inutil">
                    <ul class="ul_header">
                        <li><a href="index.html" class="active">Home</a></li>
                        <li><a href="paginação/sobre nós/sobre_nos.html" class="link_header">Sobre nós</a></li>
                        <li><a href="paginação/serviços/servicos.html" class="link_header">Serviços</a></li>
                        <li><a href="paginação/contato/contato.html" class="link_header">Contato</a></li>
                    </ul>
                    <div class="div_header">
                        <a class="button_cta secondary" href="paginação/acesso/acesso.html">Entrar</a>
                        <a class="button_cta primary" href="paginação/acesso/acesso.html">Cadastrar</a>
                    </div>
                </div>  
            </div>
        </nav>
    </header>

    <main>

    </main>

    <footer>
        <article>
            <div class="div_footer">
                <img src="itens/logo_PetVida.png" alt="Logo do pet shop PetVida. Possui uma pata de cachorro laranja à esquerda seguido do texto PetVida em cor marrom escura e o pingo do i na cor laranja">
                <p>Cuidado, amor e saúde para seu melhor amigo viver sempre feliz.</p>
                <div>
                    <img class="itens/icon_redes" src="instagram.png" alt="">
                    <img class="itens/icon_redes" src="facebook.png" alt="">
                    <img class="itens/icon_redes" src="whatsapp.png" alt="">
                </div>
            </div>
            <div class="div_footer_textos">
                <h4>Institucional</h4>
                <a href="paginação/sobre nós/sobre_nos.html">Sobre nós</a>
                <a href="paginação/serviços/servicos.html">Serviços</a>
                <a href="#">Depoimentos</a>
                <a href="#">Blog</a>
            </div>
            <div class="div_footer_textos">
                <h4>Atendimento</h4>
                <a href="paginação/contato/contato.html">Contato</a>
                <a href="#">Agendar agora</a>
                <a href="paginação/acesso/acesso.html">Entrar</a>
                <a href="paginação/acesso/acesso.html">Cadastrar</a>
            </div>
            <div class="div_footer_textos">
                <h4>Fale conosco</h4>
                <span>
                    <img src="itens/ícones/icon_telefone.png" alt="">
                    <p>(11) 99999-9999</p>
                </span>
                <span>
                    <img src="itens/ícones/icon_arroba.png" alt="">
                    <p>contato@petvida.com.br</p>
                </span>
                <span>
                    <img src="itens/ícones/icon_localizacao.png" alt="">
                    <p>Rua das Patinhas, 123 São Paulo - SP</p>
                </span>
                <span>
                    <img src="itens/ícones/icon_horario.png" alt="">
                    <p>Seg a Sáb: 8h às 18h</p>
                </span>
            </div>
        </article>
        <article>
            <div>
                <p>© 2026 PetVida. Todos os direitos reservados.</p>
            </div>
            <div>
                <p>Política de privacidade</p>
                <p>Termos de Uso</p>
            </div>
        </article>
    </footer>
</html>