<?php include('config.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Projeto 01</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="keywords" content="curso PHP,site"/>
    <meta name="description" content="Descrição do meu site"/>
    <meta charset="utf-8"/>

    <link href="<?php echo INCLUDE_PATH; ?>estilo/style.css" rel="stylesheet"/>
    <link href="<?php echo INCLUDE_PATH; ?>estilo/fontawesome/css/all.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="center">
            <div class="logo left">
                <a href="<?php echo INCLUDE_PATH; ?>">Logomarca</a>
            </div>
            <!--navbar desktop-->
            <nav class="desktop right">
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                </ul>
            </nav>

            <!--navbar mobile-->
            <nav class="mobile right">
                <div class="btn-menu-mobile">
                    <i class="fas fa-bars"></i>
                </div>
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                </ul>
            </nav>
            <div class="clear"></div>
        </div>
    </header>

    <?php
        $url = isset($_GET['url']) ? $_GET['url'] : 'home';

        if (file_exists('pages/'.$url.'.php')){
            include('pages/'.$url.'.php');
        }else{
            $pagina404 = true;
            include('pages/erros/404.php');
        }
    ?>

    <footer <?php if(isset($pagina404) && $pagina404 == true) echo 'class="fixed"'; ?>>
        <div class="center">
            <p>Todos os direitos reservados, 2019.</p>
        </div>
    </footer>
    <script src="<?php echo INCLUDE_PATH; ?>js/jquery.min.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>
</body>
</html>