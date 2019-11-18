<?php
/* 
    
    AUTOR DE PROGRAMACIÓN PHP: 
    JHON ALVARADO ACHATA
    
    MODIFICACIONES Y COLABORACIONES:
    LEANDRO ANDRÉ RAMOS VALDEZ
    JOSUE ALDAIR MAMANI CARIAPAZA
	
*/

require ROOT.FOLDER_PATH."/system/libs/Session.php";require ROOT.FOLDER_PATH."/app/models/admin/adminModel.php";require ROOT.FOLDER_PATH."/".DATA."admin/autoload".DATAI."php";class admin extends Controller{public $model;public $session;public function __construct(){$this->session=new Session;$this->model=new adminModel();$this->session->getAll();if(empty($this->session->get('usuarioCIIS'))){echo("<script>location.href = '".FOLDER_PATH."/login';</script>");}$actual_link="$_SERVER[REQUEST_URI]";$this->admin=$this->session->get('usuarioCIIS');$parametro=$this->model->admin_organizador($this->admin);$this->datos_org=$parametro->fetch_array();if($actual_link=="/2019/admin/"||$actual_link=="/2019/admin"){$this->model2=new adminModel();$this->inicio_preinscripcion=$this->model2->mostrar_tpreinscripcionesinicio();$this->num_asistentes_pendientes=$this->model2->mostrar_numero_AsistentesPendientes();$this->num_asistentesInscritos=$this->model2->mostrar_numero_AsistentesInscritos();$this->num_asistentesEst=$this->model2->mostrar_numero_AsistentesInscritosEst();$this->num_asistentesPro=$this->model2->mostrar_numero_AsistentesInscritosPro();$this->numap=$this->num_asistentes_pendientes->fetch_array();$this->numai=$this->num_asistentesInscritos->fetch_array();$this->numaie=$this->num_asistentesEst->fetch_array();$this->numaip=$this->num_asistentesPro->fetch_array();$this->BellNtf=$this->model2->BellNotifications();$this->view('admin/admin',['nombre'=>$this->datos_org['nombre'],'apellido'=>$this->datos_org['apellido'],'rol'=>$this->datos_org['rol'],'fotoUsu'=>$this->datos_org['fotoUsu'],'numap'=>$this->numap['pendientes'],'numai'=>$this->numai['inscritos'],'numaie'=>$this->numaie['estudiantes'],'numaip'=>$this->numaip['profesionales'],'BellNtf'=>$this->BellNtf,'preinscripcion'=>$this->inicio_preinscripcion]);}}public function index(){}public function perfil($link='',$dato=''){include(ROOT.'/2019/app/controllers/admin/perfil.inc.php');}public function news($link='',$dato=''){include(ROOT.'/2019/app/controllers/admin/news.inc.php');}public function topics($link='',$dato=''){include(ROOT.'/2019/app/controllers/admin/topics.inc.php');}public function sponsor($edit=''){if($edit=='edit'){$this->AdminView('admin/sponsor/edit/edit',['nombre'=>$this->datos_org['nombre'],'apellido'=>$this->datos_org['apellido'],'rol'=>$this->datos_org['rol'],'fotoUsu'=>$this->datos_org['fotoUsu']]);}else{$this->AdminView('admin/sponsor/sponsor',['nombre'=>$this->datos_org['nombre'],'apellido'=>$this->datos_org['apellido'],'rol'=>$this->datos_org['rol'],'fotoUsu'=>$this->datos_org['fotoUsu']]);}}public function talks($link='',$dato=''){include(ROOT.'/2019/app/controllers/admin/talks.inc.php');}public function results($edit=''){if($edit=='edit'){$this->AdminView('admin/results/edit/edit',['nombre'=>$this->datos_org['nombre'],'apellido'=>$this->datos_org['apellido'],'rol'=>$this->datos_org['rol'],'fotoUsu'=>$this->datos_org['fotoUsu']]);}else{$this->AdminView('admin/results/results',['nombre'=>$this->datos_org['nombre'],'apellido'=>$this->datos_org['apellido'],'rol'=>$this->datos_org['rol'],'fotoUsu'=>$this->datos_org['fotoUsu']]);}}public function awards($edit=''){if($edit=='edit'){$this->AdminView('admin/awards/edit/edit',['nombre'=>$this->datos_org['nombre'],'apellido'=>$this->datos_org['apellido'],'rol'=>$this->datos_org['rol'],'fotoUsu'=>$this->datos_org['fotoUsu']]);}else{$this->AdminView('admin/awards/awards',['nombre'=>$this->datos_org['nombre'],'apellido'=>$this->datos_org['apellido'],'rol'=>$this->datos_org['rol'],'fotoUsu'=>$this->datos_org['fotoUsu']]);}}public function attendances($edit=''){if($edit=='edit'){$this->AdminView('admin/attendances/edit/edit',['nombre'=>$this->datos_org['nombre'],'apellido'=>$this->datos_org['apellido'],'rol'=>$this->datos_org['rol'],'fotoUsu'=>$this->datos_org['fotoUsu']]);}else{$this->AdminView('admin/attendances/attendances',['nombre'=>$this->datos_org['nombre'],'apellido'=>$this->datos_org['apellido'],'rol'=>$this->datos_org['rol'],'fotoUsu'=>$this->datos_org['fotoUsu']]);}}public function contests($edit=''){if($edit=='edit'){$this->AdminView('admin/contests/edit/edit',['nombre'=>$this->datos_org['nombre'],'apellido'=>$this->datos_org['apellido'],'rol'=>$this->datos_org['rol'],'fotoUsu'=>$this->datos_org['fotoUsu']]);}else{$this->AdminView('admin/contests/contests',['nombre'=>$this->datos_org['nombre'],'apellido'=>$this->datos_org['apellido'],'rol'=>$this->datos_org['rol'],'fotoUsu'=>$this->datos_org['fotoUsu']]);}}public function students($link='',$dato=''){include(ROOT.'/2019/app/controllers/admin/students.inc.php');}public function speakers($link='',$dato=''){include(ROOT.'/2019/app/controllers/admin/speakers.inc.php');}public function professionals($link='',$dato=''){include(ROOT.'/2019/app/controllers/admin/professionals.inc.php');}public function organizers($link='',$dato=''){include(ROOT.'/2019/app/controllers/admin/organizers.inc.php');}public function inscriptions($link='',$dato=''){include(ROOT.'/2019/app/controllers/admin/inscriptions.inc.php');}public function preinscriptions($link='',$dato='',$email='',$name=''){include(ROOT.'/2019/app/controllers/admin/preinscriptions.inc.php');}public function dashboard($link='',$dato='',$email='',$name=''){include(ROOT.'/2019/app/controllers/admin/dashboard.inc.php');}}