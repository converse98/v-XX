
<!--    
    
    AUTOR DE PROGRAMACIÓN Y DISEÑO DE LA PAGINA WEB CON ADMINLTE / NOTICIAS - EDICIONES: 
	JHON ALVARADO ACHATA

--><!DOCTYPE html><html lang="es"><head><meta charset="UTF-8"><meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"><meta http-equiv="X-UA-Compatible" content="IE=edge"><link rel="shortcut icon" href="/2019/src/assets/media/image/icon.png"><title>Editar artículo: N° <?=$data['numArt'] ?> | XX CIIS</title><link rel="stylesheet" href="/2019/src/admin/css/bootstrap.min.css"><link rel="stylesheet" href="/2019/src/admin/css/font-awesome.min.css"><link rel="stylesheet" href="/2019/src/admin/css/ionicons.min.css"><link rel="stylesheet" href="/2019/src/admin/css/select2.min.css"><link rel="stylesheet" href="/2019/src/admin/css/bootstrap-datepicker.min.css"><link rel="stylesheet" href="/2019/src/admin/css/AdminLTE.min.css"><link rel="stylesheet" href="/2019/src/admin/css/dataTables.bootstrap.min.css"><!-- AdminLTE Skins. Choose a skin from the css/skinsfolder instead of downloading all of them to reduce the load. --><link rel="stylesheet" href="/2019/src/admin/css/_all-skins.min.css"><link rel="stylesheet" href="/2019/src/admin/css/tagify.css"><script src="/2019/src/admin/js/jquery.min.js"></script><script>function (d){if (!d.currentScript){var s=d.createElement('script');s.src='dist/tagify.polyfills.min.js';d.head.appendChild(s);}}(document)</script><script src="/2019/src/admin/js/tagify.js"></script><script src="/2019/src/admin/js/jQuery.tagify.min.js"></script><link rel="stylesheet"href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"><style>.button-edit{color: #fff;background: #0000ad;border: 2px solid;border-radius: 5%;padding-top: 3px;padding-bottom: 3px;padding-right: 12px;padding-left: 12px;-webkit-transition-duration: 0.4s;transition-duration: 0.4s;}.button-edit:hover{border: 2px solid rgb(76, 172, 175);}</style></head><body class="hold-transition skin-blue sidebar-mini"><div class="wrapper"><?php require(ROOT . '/' . PATH_VIEWS . 'navbar_table.php'); ?><div class="content-wrapper"><section class="content"></section></div><?php require(ROOT . '/' . PATH_VIEWS . 'aside_control.php'); ?></div><script src="/2019/src/admin/js/bootstrap.min.js"></script><script src="/2019/src/admin/js/select2.full.min.js"></script><script src="/2019/src/admin/js/jquery.dataTables.min.js"></script><script src="/2019/src/admin/js/dataTables.bootstrap.min.js"></script><script src="/2019/src/admin/js/fastclick.js"></script><script src="/2019/src/admin/js/bootstrap-datepicker.min.js"></script><script src="/2019/src/admin/js/adminlte.min.js"></script><script src="/2019/src/admin/js/demo.js"></script><?php require(ROOT . '/' . PATH_VIEWS . 'pushjs.php'); ?><script>$(function (){$('.select2').select2()$('#datepicker').datepicker({autoclose: true,format: 'yyyy-mm-dd'})$('#datepicker1').datepicker({autoclose: true,format: 'yyyy-mm-dd'})$('#datepicker2').datepicker({autoclose: true,format: 'yyyy-mm-dd'})})</script><script>$(function (){$('#example1').DataTable()$('#example2').DataTable({'paging': true,'lengthChange': false,'searching': false,'ordering': true,'info': true,'autoWidth': false})})</script><script>var input=document.getElementById('numeroArticulo');input.oninvalid=function(event){event.target.setCustomValidity('Username should only contain lowercase letters. e.g. john');}</script><script>function readURL(input){if (input.files && input.files[0]){var reader=new FileReader();reader.onload=function (e){$('#imgg').attr('src', e.target.result);};reader.readAsDataURL(input.files[0]);}}$("#photoInputFile").change(function(){readURL(this);});</script><script>document.getElementById("photoInputFile").onchange=function (){document.getElementById("uploadFile").value=this.files[0].name;};</script></body></html>