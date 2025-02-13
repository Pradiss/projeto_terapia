<?php 

session_start();

$request = trim(strtolower($_SERVER['REQUEST_URI']));

$request = str_replace("/projetoterapia/terapia/","",$request);

$segmentos = explode("/",$request);

$controlador = isset($segmentos[0]) ? $segmentos[0] : "home";
$metodo = isset($segmentos[1]) ? $segmentos[1] : "index";
$identificador = isset($segmentos[2]) ? $segmentos[2] : null;

switch($controlador){
    case "terapia-adm":
        
        require "controllers/TerapiasController.php";
        $controller = new TerapiasController;
        break;
    case "home":
        require "controllers/HomeController.php";
        $controller = new HomeController;
        break;
    case "servicos":
        require "controllers/ServicosController.php";
        $controller = new ServicosController;
        break;
    case "profissionais":
        require "controllers/ProfissionaisController.php";
        $controller = new ProfissionaisController;
        break;
    case "login":
        require "controllers/LoginController.php";
        $controller = new LoginController;
        break;
    case "usuario":
        require "controllers/UsuarioController.php";
        $controller = new UsuarioController;
        break;
    case "reservas":
        require "controllers/ReservasController.php";
        $controller = new ReservasController;
        break;
    case "sobre":
        require "controllers/SobreController.php";
        $controller = new SobreController;
        break;
    case "sair":
        require "controllers/SairController.php";
        $controller = new SairController;
        break;
    
    default:
    echo "Erro de Página:";
    break;

}

if($identificador){
    $controller->$metodo($identificador);
}else{
    $controller->$metodo();
}