<?php 

require "models/UsuarioModel.php";

class UsuarioController {

    private $url = "http://localhost/projetoterapia/terapia";

    private $usuarioModel;

    public function __construct(){
        $this->usuarioModel = new Usuario();
    }
    
    public function index(){
        $card_profissionais = $this->usuarioModel->getAll();
        $baseUrl = $this->url;
        require "views/ProfissionaisView.php";
 
    } 
    
    public function verProfissional($id){
        $card_profissional = $this->usuarioModel->getById($id);
        $baseUrl = $this->url;
        require "views/DoctorView.php";
    }   


    public function criar(){
        $baseUrl = $this->url;

        $erro = "";
        $acao = "criar";
        require "views/CadastroForm.php";

    }

    public function atualizar(){
        $nome = $_POST["nome"];
        $senha = $_POST["senha"];
        $usuario = $_POST["usuario"];

        $acao = $_POST["acao"];

        if($acao == "editar"){
            $id_usuario = $_POST["id_usuario"];
            $this->usuarioModel->update($id_usuario,$nome,$usuario);
        }else{

            $this->usuarioModel->insert($nome,$usuario,$senhaCrypt);
        }

        header("location: ". $this->url."/servicos");
    }

}