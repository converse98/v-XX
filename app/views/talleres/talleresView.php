<?php
/*

    AUTOR DE PROGRAMACIÓN Y DISEÑO DE LA PAGINA WEB / TALLERES: 
	  JOSUE ALDAIR MAMANI CARIAPAZA
  
*/
?><!DOCTYPE html><html lang="es"><head> <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> <meta name="viewport" content="width=device-width, initial-scale=1"> <title>Talleres XX CIIS 2019</title> <link rel="shortcut icon" href="src/assets/media/image/icon.png"> <link rel="stylesheet" type="text/css" href="<?=FOLDER_PATH ?>/src/css/main.min.css?<?=CSS_MAIN_MIN ?>"> <link rel="stylesheet" type="text/css" href="<?=FOLDER_PATH ?>/src/css/main_3.min.css?<?=CSS_MAIN_3_MIN ?>"> <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"> <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> <style>nav#main-nav{box-shadow: 0 0 5px -2px rgba(0, 0, 0, .6);}.card-title{text-align: center; font-size: 20px;}.card-footer{text-align: center;}.card-text{font-size: 13px;}.card-autor{font-size: 15px; text-align: center;}.card-img-top{height:200px; margin: 0 auto;}#td1{width: 100px;}#td2{width: 200px;}</style> <script src="<?=FOLDER_PATH ?>/src/components/jquery/jquery.min.js"></script> <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script> <link rel="stylesheet" href="<?=FOLDER_PATH ?>/src/components/bootstrap/css/bootstrap.min.css"> <link rel="stylesheet" href="<?=FOLDER_PATH ?>/src/components/bootstrap-calendar/css/calendar.min.css"> <link rel="stylesheet" href="<?=FOLDER_PATH ?>/src/components/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css"> <link rel="stylesheet" type="text/css" href="<?=FOLDER_PATH ?>/src/css/ponentes_wrapper.css"></head><body style="margin-top:110px; line-height:1.2;"> <?php require(ROOT . '/' . PATH_VIEWS . 'head.php'); ?> <div class="container"> <div class="card-deck" style="padding-bottom: 10px;"> <div class="card"> <img class="card-img-top" src="src/assets/media/talleres/block.png" alt="Card image cap"> <div class="card-body"> <h5 class="card-title">Blockchain: Conceptos y aplicaciones</h5> <h4 class="card-autor"><img src="src/assets/media/ponentes/ponente.png" width="15px" height="15px"> Ph. D. Jó Ueyama</h4> <p class="card-text"> <table> <tr> <td id="td1"><img src="src/assets/media/ponentes/fecha.png" width="15px" height="15px"> Fecha:</td><td id="td2">Miércoles, 13 de Noviembre</td></tr><tr> <td id="td1"><img src="src/assets/media/ponentes/hora.png" width="15px" height="15px"> Hora:</td><td id="td2">09:00 - 12:00 am</td></tr></table> </p></div><div class="card-footer"> <small class="text-muted">LABORATORIO B</small> </div></div><div class="card"> <img class="card-img-top" src="src/assets/media/talleres/imagenes.jpg" alt="Card image cap"> <div class="card-body"> <h5 class="card-title">Procesamiento de imágenes satelitales</h5> <h4 class="card-autor"><img src="src/assets/media/ponentes/ponente.png" width="15px" height="15px"> Comisión Nacional de Investigación y Desarrollo Aeroespacial</h4> <p class="card-text"> <table> <tr> <td id="td1"><img src="src/assets/media/ponentes/fecha.png" width="15px" height="15px"> Fecha:</td><td id="td2">Martes, 12 de Noviembre</td></tr><tr> <td id="td1"><img src="src/assets/media/ponentes/hora.png" width="15px" height="15px"> Hora:</td><td id="td2">09:00 - 12:00 am (Grupo 1) <br>03:00 - 06:00 pm (Grupo 2)</td></tr></table> </p></div><div class="card-footer"> <small class="text-muted">LABORATORIO A</small> </div></div><div class="card"> <img class="card-img-top" src="src/assets/media/talleres/machine.png" alt="Card image cap"> <div class="card-body"> <h5 class="card-title">Modelos basados en grafos para el aprendizaje automático</h5> <h4 class="card-autor"><img src="src/assets/media/ponentes/ponente.png" width="15px" height="15px"> Dr. João Roberto Bertini Jr.</h4> <p class="card-text"> <table> <tr> <td id="td1"><img src="src/assets/media/ponentes/fecha.png" width="15px" height="15px"> Fecha:</td><td id="td2">Martes, 12 de Noviembre</td><td id="td2">Jueves, 14 de Noviembre</td></tr><tr> <td id="td1"><img src="src/assets/media/ponentes/hora.png" width="15px" height="15px"> Hora:</td><td id="td2">03:00 - 06:00 pm</td><td id="td2">09:00 - 12:00 am</td></tr></table> </p></div><div class="card-footer"> <small class="text-muted">LABORATORIO B</small> </div></div></div><div class="card-deck" style="padding-bottom: 10px;"> <div class="card"> <img class="card-img-top" src="src/assets/media/talleres/arduino2.jpg" alt="Card image cap"> <div class="card-body"> <h5 class="card-title">Prototipado rápido con arduino y Rasberry Pi</h5> <h4 class="card-autor"><img src="src/assets/media/ponentes/ponente.png" width="15px" height="15px"> Ph. D. Miguel Solis</h4> <p class="card-text"> <table> <tr> <td id="td1"><img src="src/assets/media/ponentes/fecha.png" width="15px" height="15px"> Fecha:</td><td id="td2">Martes, 12 de Noviembre</td></tr><tr> <td id="td1"><img src="src/assets/media/ponentes/hora.png" width="15px" height="15px"> Hora:</td><td id="td2">03:00 - 06:00 pm</td></tr></table> </p></div><div class="card-footer"> <small class="text-muted">LABORATORIO C</small> </div></div><div class="card"> <img class="card-img-top" src="src/assets/media/talleres/clasificacion.png" alt="Card image cap"> <div class="card-body"> <h5 class="card-title">Taller de clasificación</h5> <h4 class="card-autor"><img src="src/assets/media/ponentes/ponente.png" width="15px" height="15px"> Dr. René Reynaga Barriga</h4> <p class="card-text"> <table> <tr> <td id="td1"><img src="src/assets/media/ponentes/fecha.png" width="15px" height="15px"> Fecha:</td><td id="td2">Jueves 14 de Noviembre</td></tr><tr> <td id="td1"><img src="src/assets/media/ponentes/hora.png" width="15px" height="15px"> Hora:</td><td id="td2">08:00 - 10:00 am</td></tr></table> </p></div><div class="card-footer"> <small class="text-muted">LABORATORIO C</small> </div></div><div class="card"> <img class="card-img-top" src="src/assets/media/talleres/regresion.png" alt="Card image cap"> <div class="card-body"> <h5 class="card-title">Taller de regresión</h5> <h4 class="card-autor"><img src="src/assets/media/ponentes/ponente.png" width="15px" height="15px"> Dr. René Reynaga Barriga</h4> <p class="card-text"> <table> <tr> <td id="td1"><img src="src/assets/media/ponentes/fecha.png" width="15px" height="15px"> Fecha:</td><td id="td2">Martes, 12 de Noviembre</td></tr><tr> <td id="td1"><img src="src/assets/media/ponentes/hora.png" width="15px" height="15px"> Hora:</td><td id="td2">04:00 - 06:00 pm</td></tr></table> </p></div><div class="card-footer"> <small class="text-muted">LABORATORIO A</small> </div></div></div><div class="card-deck" style="padding-bottom: 10px;"> <div class="card"> <img class="card-img-top" src="src/assets/media/talleres/mdd.jpg" alt="Card image cap"> <div class="card-body"> <h5 class="card-title">Model-Driven Development (MDD) y la generación automática de código</h5> <h4 class="card-autor"><img src="src/assets/media/ponentes/ponente.png" width="15px" height="15px"> MSc. Jorge Gustavo Moreno López</h4> <p class="card-text"> <table> <tr> <td id="td1"><img src="src/assets/media/ponentes/fecha.png" width="15px" height="15px"> Fecha:</td><td id="td2">Jueves, 14 de Noviembre</td></tr><tr> <td id="td1"><img src="src/assets/media/ponentes/hora.png" width="15px" height="15px"> Hora:</td><td id="td2">03:00 - 06:00 pm</td></tr></table> </p></div><div class="card-footer"> <small class="text-muted">LABORATORIO C</small> </div></div><div class="card"> <img class="card-img-top" src="src/assets/media/talleres/3d.jpg" alt="Card image cap"> <div class="card-body"> <h5 class="card-title">Diseño e impresión 3D</h5> <h4 class="card-autor"><img src="src/assets/media/ponentes/ponente.png" width="15px" height="15px"> Dr. Edwin Hinojosa Ramos</h4> <p class="card-text"> <table> <tr> <td id="td1"><img src="src/assets/media/ponentes/fecha.png" width="15px" height="15px"> Fecha:</td><td id="td2">Miércoles, 13 de Noviembre</td></tr><tr> <td id="td1"><img src="src/assets/media/ponentes/hora.png" width="15px" height="15px"> Hora:</td><td id="td2">09:00 - 12:00 am</td></tr></table> </p></div><div class="card-footer"> <small class="text-muted">LABORATORIO B</small> </div></div><div class="card"> <img class="card-img-top" src="src/assets/media/talleres/drones.jpg" alt="Card image cap"> <div class="card-body"> <h5 class="card-title">Manejo de Drones DJI</h5> <h4 class="card-autor"><img src="src/assets/media/ponentes/ponente.png" width="15px" height="15px"> Ing. Hugo Barraza Vizcarra</h4> <p class="card-text"> <table> <tr> <td id="td1"><img src="src/assets/media/ponentes/fecha.png" width="15px" height="15px"> Fecha:</td><td id="td2">Martes, 12 de Noviembre (T)</td><td id="td2">Miércoles, 13 de Noviembre (P)</td></tr><tr> <td id="td1"><img src="src/assets/media/ponentes/hora.png" width="15px" height="15px"> Hora:</td><td id="td2">09:00 - 12:00 am</td><td id="td2">09:00 - 12:00 am</td></tr></table> </p></div><div class="card-footer"> <small class="text-muted">LABORATORIO B - C</small> </div></div></div><div class="card-deck" style="padding-bottom: 10px;"> <div class="card"> <img class="card-img-top" src="src/assets/media/talleres/evolutiva.jpg" alt="Card image cap"> <div class="card-body"> <h5 class="card-title">Computación evolutiva</h5> <h4 class="card-autor"><img src="src/assets/media/ponentes/ponente.png" width="15px" height="15px"> Dr. Renato Tinós</h4> <p class="card-text"> <table> <tr> <td id="td1"><img src="src/assets/media/ponentes/fecha.png" width="15px" height="15px"> Fecha:</td><td id="td2">Miércoles, 13 de Noviembre</td></tr><tr> <td id="td1"><img src="src/assets/media/ponentes/hora.png" width="15px" height="15px"> Hora:</td><td id="td2">03:00 - 06:00 pm</td></tr></table> </p></div><div class="card-footer"> <small class="text-muted">LABORATORIO B</small> </div></div><div class="card"> <img class="card-img-top" src="src/assets/media/talleres/seguridad.png" alt="Card image cap"> <div class="card-body"> <h5 class="card-title">Invocación de tecnologías y seguridad en el sector publico</h5> <h4 class="card-autor"><img src="src/assets/media/ponentes/ponente.png" width="15px" height="15px"> Sr. Anthony Walter Franco Rodriguez </h4> <p class="card-text"> <table> <tr> <td id="td1"><img src="src/assets/media/ponentes/fecha.png" width="15px" height="15px"> Fecha:</td><td id="td2">Miércoles, 13 de Noviembre</td></tr><tr> <td id="td1"><img src="src/assets/media/ponentes/hora.png" width="15px" height="15px"> Hora:</td><td id="td2">05:00 - 07:00 pm</td></tr></table> </p></div><div class="card-footer"> <small class="text-muted">LABORATORIO C</small> </div></div><div class="card" style="border: 0px;"><!-- <img class="card-img-top" src="src/assets/media/talleres/deep.png" alt="Card image cap"> <div class="card-body"> <h5 class="card-title">Fundamentos del aprendizaje profundo para la visión por computadora</h5> <h4 class="card-autor"><img src="src/assets/media/ponentes/ponente.png" width="15px" height="15px"> Dr. Marcos Alvarez</h4> <p class="card-text"> <table> <tr> <td><img src="src/assets/media/ponentes/fecha.png" width="15px" height="15px"> Fecha:</td><td>Jueves 14 de Noviembre</td></tr><tr> <td><img src="src/assets/media/ponentes/hora.png" width="15px" height="15px"> Hora:</td><td>03:00 - 06:00 pm</td></tr></table> </p></div><div class="card-footer"> <small class="text-muted">LABORATORIO A</small> </div>--> </div></div></div><?php require(ROOT . '/' . PATH_VIEWS . 'foot.php'); ?> <script src="<?=FOLDER_PATH ?>/src/js/jquery.min.js"></script></body></html>