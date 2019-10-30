<!DOCTYPE html>
<html>
<head>
    <title>Projeto 01</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="keywords" content="curso PHP,site"/>
    <meta name="description" content="Descrição do meu site"/>
    <meta charset="utf-8"/>

    <link href="estilo/style.css" rel="stylesheet"/>
    <link href="estilo/fontawesome/css/all.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="center">
            <div class="logo left">
                <a href="">Logomarca</a>
            </div>
            <!--navbar desktop-->
            <nav class="desktop right">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Serviços</a></li>
                    <li><a href="">Contato</a></li>
                </ul>
            </nav>

            <!--navbar mobile-->
            <nav class="mobile right">
                <div class="btn-menu-mobile">
                    <i class="fas fa-bars"></i>
                </div>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Serviços</a></li>
                    <li><a href="">Contato</a></li>
                </ul>
            </nav>
            <div class="clear"></div>
        </div>
    </header>

    <section class="banner-principal">
        <div class="overlay"></div>
        <div class="center">
            <form>
                <h2>Qual o seu melhor E-mail?</h2>
                <input type="email" name="email" placeholder="Digite aqui seu melhor E-mail" required/>
                <input type="submit" name="acao" value="Cadastrar"/>
            </form>
        </div>
    </section>

    <section class="descricao-autor">
        <div class="center">
            <div class="w50 left">
                <h2>Christian Oliveira</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p>O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. 
                O Lorem Ipsum tem vindo a ser o texto padrão usado por estas indústrias desde o ano de 1500, 
                quando uma misturou os caracteres de um texto para criar um espécime de livro. 
                Este texto não só sobreviveu 5 séculos, mas também o salto para a tipografia electrónica, mantendo-se essencialmente inalterada. 
                Foi popularizada nos anos 60 com a disponibilização das folhas de Letraset, que continham passagens com Lorem Ipsum, 
                e mais recentemente com os programas de publicação como o Aldus PageMaker que incluem versões do Lorem Ipsum.</p>
            </div>
            <div class="w50 left">
                <img class="right" src="images/user.jpg"/>
            </div>
            <div class="clear"></div>
        </div>
    </section>

    <section class="especialidades">
        <div class="center">
            <h2 class="title">Especialidades</h2>
            <div class="w33 left box-especialidade">
                <h3><i class="fab fa-css3-alt"></i></h3>
                <h4>CSS</h4>
                <p>Lorem ipsum is placeholder text commonly used in the graphic, 
                print, and publishing industries for previewing 
                layouts and visual mockups.</p>
            </div>
            <div class="w33 left box-especialidade">
                <h3><i class="fab fa-html5"></i></h3>
                <h4>HTML</h4>
                <p>Lorem ipsum is placeholder text commonly used in the graphic, 
                print, and publishing industries for previewing 
                layouts and visual mockups.</p>
            </div>
            <div class="w33 left box-especialidade">
                <h3><i class="fab fa-js-square"></i></h3>
                <h4>Javascript</h4>
                <p>Lorem ipsum is placeholder text commonly used in the graphic, 
                print, and publishing industries for previewing
                layouts and visual mockups.</p>
            </div>
            <div class="clear"></div>
        </div>
    </section>

    <section class="extras">
        <div class="center">
            <div class="depoimentos-container w50 left">
                <h2 class="title">Depoimentos</h2>
                <div class="depoimento-single">
                    <p class="descricao">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                    sed do eiusmod tempor incididunt ut labore 
                    et dolore magna aliqua.”</p>
                    <p class="autor">Autor: Fulado da Silva</p>
                </div>
                <div class="depoimento-single">
                    <p class="descricao">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                    sed do eiusmod tempor incididunt ut labore 
                    et dolore magna aliqua.”</p>
                    <p class="autor">Autor: Ciclano da Ferreira</p>
                </div>
                <div class="depoimento-single">
                    <p class="descricao">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                    sed do eiusmod tempor incididunt ut labore 
                    et dolore magna aliqua.”</p>
                    <p class="autor">Autor: Fulano da Costa</p>
                </div>
                <div class="depoimento-single">
                    <p class="descricao">“Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                    sed do eiusmod tempor incididunt ut labore 
                    et dolore magna aliqua.”</p>
                    <p class="autor">Autor: Beltrano de Souza</p>
                </div>
            </div>
            <div class="servicos-container w50 left">
                <h2 class="title">Serviços<h2>
                <ul>
                    <li>Lorem ipsum is placeholder text commonly used in the graphic, print, 
                    and publishing industries for previewing layouts and visual mockups.</li>
                    <li>Lorem ipsum is placeholder text commonly used in the graphic, print, 
                    and publishing industries for previewing layouts and visual mockups.</li>
                    <li>Lorem ipsum is placeholder text commonly used in the graphic, print, 
                    and publishing industries for previewing layouts and visual mockups.</li>
                    <li>Lorem ipsum is placeholder text commonly used in the graphic, print, 
                    and publishing industries for previewing layouts and visual mockups.</li>
                    <li>Lorem ipsum is placeholder text commonly used in the graphic, print, 
                    and publishing industries for previewing layouts and visual mockups.</li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
    </section>

    <footer>
        <div class="center">
            <p>Todos os direitos reservados, 2019.</p>
        </div>
    </footer>
    <script src="js/jquery.min.js"></script>
</body>
</html>