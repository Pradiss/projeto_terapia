<?php 


require_once "models/LoginModel.php";

class LoginController {

    private $url = "http://localhost/projetoterapia/terapia";

    private $loginModel;

    public function __construct(){
        $this->loginModel = new Login();
    }

    public function index(){
        $baseUrl =$this->url;
        
        $erro = "";
        require "views/LoginForm.php";
    }

    public function criar(){

        $this->loginModel->insert($nome,$usuario,$senha);
    }
        

    
    public function autenticar() {

        
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];
    
      

        $usuarioValido = $this->loginModel->getByUsuario($usuario, $senha);
    
        if($usuarioValido) {
            
            header("location: " . $this->url . "/servicos");
            exit(); 
        } else {
            
            $erro = "<div class='alert alert-danger'>Não foi possível efetuar o login. Tente novamente.</div>";
            $baseUrl = $this->url;
            require "views/LoginForm.php";
        }
    }

    
}