<!DOCTYPE html>
<html lang="hu">
    <head>
        <meta charset="UTF-8">
        <title>Iskola weboldal</title>
        <link href="style.css" rel="stylesheet" type="text/css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Signika&display=swap" rel="stylesheet">
       <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@400;500&display=swap" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
        <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    </head>
    
    <body>
        <header>
            <div class="homeTitle">Üdvözöljük iskolánk honlapján!</div>
            <div class="headerImages" style="background-image:url(img/uni-9.jpg)"></div>
            
            <nav>
                <ul class="centerBox">
                    <?php PrintMenu(); ?>
                </ul>
            </nav>
        </header>