<?php
/*

    AUTOR DE PROGRAMACIÓN Y DISEÑO DE LA PAGINA WEB / LOGIN: 
	JHON ALVARADO ACHATA
    
*/
?><!DOCTYPE html><html lang="es"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1"><meta http-equiv="X-UA-Compatible" content="IE=edge"><title>Inicio de sesión | XX CIIS</title><link rel="shortcut icon" href="/2019/src/assets/media/image/icon.png"><meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"><link rel="stylesheet" href="/2019/src/admin/css/bootstrap.min.css"><link rel="stylesheet" href="/2019/src/admin/css/font-awesome.min.css"><link rel="stylesheet" href="/2019/src/admin/css/ionicons.min.css"><link rel="stylesheet" href="/2019/src/admin/css/AdminLTE.min.css"><link rel="stylesheet" href="/2019/src/admin/css/blue.css"><link rel="stylesheet"href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"></head><body class="hold-transition login-page img-transition"style="background: url(/2019/src/admin/assets/img/fontLogin.jpg) center center / cover no-repeat fixed;"><div class="login-box"><div class="login-box-body" style="background: rgba(0, 0, 0, 0.86);"><div class="login-logo" style="margin-bottom: 15px;"><a href="<?=FOLDER_PATH . '/' ?>"><img src="/2019/src/admin/assets/img/logo-ciis-v2.svg" type="image/svg+xml"style="width: 100px; margin-bottom: 15px;"></a></div><p class="login-box-msg" style="color: #00c5ffe3;">Accede para iniciar sesión.</p><form method="POST" action="<?=FOLDER_PATH . '/login/signin' ?>"><div class="form-group has-feedback" style="margin-bottom: 25px;"><input type="text" class="form-control" name="nombre" placeholder="Usuario"style="background-color: #0000008a; color: #eee;"><span class="glyphicon glyphicon-user form-control-feedback"></span></div><div class="form-group has-feedback" style="margin-bottom: 25px;"><input type="password" class="form-control" name="password" placeholder="Contraseña"style="background-color: #0000008a; color: #eee;"><span class="glyphicon glyphicon-lock form-control-feedback"></span></div><div class="row"><div class="col-xs-5" style="float: right; width: 50%;"><button type="submit" class="btn btn-primary btn-block btn-flat">Iniciar sesión</button></div></div></form></div></div><script src="/2019/src/admin/js/jquery.min.js"></script><script src="/2019/src/admin/js/bootstrap.min.js"></script><script src="/2019/src/admin/js/icheck.min.js"></script></body></html>