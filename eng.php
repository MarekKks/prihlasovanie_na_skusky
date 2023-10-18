<DOCTYPE !HTML>
    <html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=7">
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Young+Serif&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
        <title>Prihlásenie sa na skúšku</title>
    </head>
    
    <body>
        
    <?php $home_url="http://localhost/prihlasovanie_na_skusky/index.php" ?>


    <?php include_once 'partials/header.php' ?>
<!--
    <header>
        
        <nav class="navigacia">

        <a href="<?php $home_url ?>" class="logo"><img src="img/logo.png" alt="Logo"></a>

        <ul class="eng-nav">
            <li><a href="<?php $home_url ?>" class="link">Main offer</a></li>
            <li><a href="<?php $home_url ?>" class="link">General information</a></li>
            <li><a href="<?php $home_url ?>" class="link">Sign in</a></li>
        </ul>

        <a href="http://localhost/prihlasovanie_na_skusky/eng.php" class="flag"><img src="img/gb-flag.png"></a>
        <a href="http://localhost/prihlasovanie_na_skusky/" class="flag"><img src="img/svk-flag.png"></a>
    </nav>
!-->
    </header>

            <div class="container">
        
                <table class="tabulka">
                    <tr>
                        <th><h2>Subject</h2></th>
                        <th><h2>Information</h2></th>
                    </tr>
                    <tr>
                        <td colspan="2" class="semester"><h3>Winter semester</h3></td>
                    </tr>
                    <tr>
                        <td class="predmet">Technic chemistry</td>
                        <td class="obrazky"><a href="<?php $home_url ?>"><img src="img/chat.png"></a>
                        <a href="<?php $home_url ?>"><img src="img/book.png"></a>
                        <a href="<?php $home_url ?>"><img src="img/profile.png"></a>
                        <a href="<?php $home_url ?>"><img src="img/bar-chart.png"></a></td>
                    </tr>
                    <tr>
                        <td class="predmet">Technic chemistry</td>
                        <td class="obrazky"><a href="<?php $home_url ?>"><img src="img/chat.png"></a>
                        <a href="<?php $home_url ?>"><img src="img/book.png"></a>
                        <a href="<?php $home_url ?>"><img src="img/profile.png"></a>
                        <a href="<?php $home_url ?>"><img src="img/bar-chart.png"></a></td>
                    </tr>
                    <tr>
                        <td class="predmet">Technic chemistry</td>
                        <td class="obrazky"><a href="<?php $home_url ?>"><img src="img/chat.png"></a>
                        <a href="<?php $home_url ?>"><img src="img/book.png"></a>
                        <a href="<?php $home_url ?>"><img src="img/profile.png"></a>
                        <a href="<?php $home_url ?>"><img src="img/bar-chart.png"></a></td>
                    </tr>
                    <tr>
                        <td colspan="2" class="semester"><h3>Summer semester</h3></td>
                    </tr>
                    <tr>
                        <td class="predmet">Technic chemistry</td>
                        <td class="obrazky"><a href="<?php $home_url ?>"><img src="img/chat.png"></a>
                        <a href="<?php $home_url ?>"><img src="img/book.png"></a>
                        <a href="<?php $home_url ?>"><img src="img/profile.png"></a>
                        <a href="<?php $home_url ?>"><img src="img/bar-chart.png"></a></td>
                    </tr>
                    <tr>
                        <td class="predmet">Technic chemistry</td>
                        <td class="obrazky"><a href="<?php $home_url ?>"><img src="img/chat.png"></a>
                        <a href="<?php $home_url ?>"><img src="img/book.png"></a>
                        <a href="<?php $home_url ?>"><img src="img/profile.png"></a>
                        <a href="<?php $home_url ?>"><img src="img/bar-chart.png"></a></td>
                    </tr>
                    <tr>
                        <td class="predmet">Technic chemistry</td>
                        <td class="obrazky"><a href="<?php $home_url ?>"><img src="img/chat.png"></a>
                        <a href="<?php $home_url ?>"><img src="img/book.png"></a>
                        <a href="<?php $home_url ?>"><img src="img/profile.png"></a>
                        <a href="<?php $home_url ?>"><img src="img/bar-chart.png"></a></td>
                    </tr>
                </table>
            </div>
            <?php include_once 'partials/footer.php'; ?>
        </body>
    </html>