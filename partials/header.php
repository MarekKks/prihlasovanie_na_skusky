<DOCTYPE !HTML>
    <html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=7">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Young+Serif&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
        <title>Prihlásenie sa na skúšku</title>
    </head>

    <?php include_once 'functions.php'; ?>
    
    <body>

<header>
        <nav class="navigacia">

        <div class="logo">
            <a href="<?php $home_url ?>" class="logo"><img src="img/logo.png" alt="Logo"></a>
        </div>

        <div class="nav-link">
            <?php 
            $actual_link = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            
            if ($actual_link == 'http://localhost/prihlasovanie_na_skusky/eng.php') {
                echo '<ul class="eng-nav">'; 
                echo    '<li><a href='.$home_url.' class="link">Main offer</a></li>';
                echo    '<li><a href='.$home_url.' class="link">general information</a></li>';
                echo    '<li><a href='.$login_url.'class="link">Sign in</a></li>';
                echo    '<li><a href='.$register_url.' class="link">Sign up</a></li>';
                echo '</ul>';
            }
            else {
                echo '<ul>';
                echo    '<li><a href='.$home_url.' class="link">Hlavná ponuka</a></li>';
                echo    '<li><a href='.$home_url.' class="link">Všeobécné informácie</a></li>';
                echo    '<li><a href='.$login_url.' class="link">Prihlásenie</a></li>';
                echo    '<li><a href='.$register_url.' class="link">Registrovanie</a></li>';
                echo '</ul>';
            }
            ?>         
        </div>
        <div class="language">
            <a href="http://localhost/prihlasovanie_na_skusky/eng.php" class="flag"><img src="img/gb-flag.png"></a>
            <a href="http://localhost/prihlasovanie_na_skusky/" class="flag"><img src="img/svk-flag.png"></a>
        </div>
    </nav>
</header>