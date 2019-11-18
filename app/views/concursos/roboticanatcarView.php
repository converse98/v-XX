<?php
/*

    AUTOR DE PROGRAMACIÓN Y DISEÑO DE LA PAGINA WEB / CONCURSO DE ROBOTICA NATCAR: 
    JHON ALVARADO ACHATA
    
*/
?><!DOCTYPE html><html lang="es"><head> <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> <meta name="viewport" content="width=device-width, initial-scale=1"> <title>Concurso de robótica NAT-CAR</title> <meta property="og:type" content="website"> <meta property="og:image:height" content="630"> <meta property="og:image:width" content="1200"> <meta name="theme-color" content="#529CE0"> <meta name="msapplication-navbutton-color" content="#005DB2"> <meta name="apple-mobile-web-app-status-bar-style" content="#005DB2"> <meta name="apple-mobile-web-app-capable" content="yes"> <meta name="mobile-web-app-capable" content="yes"> <link rel="shortcut icon" href="<?=FOLDER_PATH ?>/src/assets/media/image/icon.png"> <link rel="stylesheet" type="text/css" href="src/css/main.min.css?<?=CSS_MAIN_MIN ?>"> <link rel="stylesheet" type="text/css" href="src/css/font-awesome.min.css"> <link rel="stylesheet" type="text/css" href="src/css/main_3.min.css?<?=CSS_MAIN_3_MIN ?>"> <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"> <style>body{background-color: #e8e8e8;}header.section{margin-top: 10vh; background: #bf0000;}main section.half-img .wrapper article.img div.big{height: 250px;}main h2{color: #1b00b2;}main h2, main h3{color: #1b00b2;}a.button.blue, button.blue, input[type=submit].blue{background: rgb(11, 0, 178); color: #fff; border: 1px solid rgb(29, 21, 74);}a.button.blue:hover{background: rgb(60, 0, 178);}</style></head><body> <?php require(ROOT . '/' . PATH_VIEWS . 'head.php'); ?> <header class="section" id="programa"> <div class="wrapper"> <h1>Concurso de robótica NATCAR</h1> <h2>Implementa tu algoritmo y compite con los demás</h2> </div></header> <main id="contest"> <section id="intro" class="half-img"> <div class="wrapper"> <article class="text"> <h2>El NATCAR ¡ya está aquí!</h2> <p> El concurso tiene como categoría de RobotRace del concurso internacional “All Japan Micromouse Contest”. NatCar es una competencia en la que los robots ejecutan una trayectoria específica de líneas y curvas, en el cual gana el más rápido. </p><p> Los competidores pueden implementar un algoritmo propio, en el cual se recomienda hacer uso de una lectura para detectar las marcas que se encuentran al inicio y termino de una curva, esto con el objetivo de memorizar la ruta y conseguir una mejor eficiencia en el tiempo en la trayectoria del robot. </p><p> Cada robot puede probar tres carreras, de las cuales se registrará el menor tiempo como el mejor récord. </p></article> <article class="img"> <div class="big" style="background-image: url(<?=FOLDER_PATH ?>/src/assets/media/contest/natcarrobotics.jpg); background-position: top;"></div></article> </div></section> <section id="engage"> <div class="wrapper"> <h3>Bases</h3> <p>El comité organizador de concurso de robótica natcar ofrece más información en el siguiente apartado.</p><a class="button blue" href="<?=FOLDER_PATH ?>/src/assets/media/contest/CONCURSO-DE-ROBOTICA-NATCAR.pdf" target="_blank"><i class="fa fa-file-pdf-o"></i> Descargar base</a> </div></section> </main> <?php require(ROOT . '/' . PATH_VIEWS . 'foot.php'); ?> <script src="src/js/jquery.min.js"></script> <script src="src/js/programa.js"></script></body></html>