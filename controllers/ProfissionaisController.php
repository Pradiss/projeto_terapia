<?php 

require "models/ProfissionaisModel.php";

class ProfissionaisController {

    private $url = "http://localhost/projetoterapia/terapia";

    private $profissionalModel;

    public function __construct(){
        $this->profissionalModel = new Profissionais();
    }
    
    public function index(){
        $card_profissionais = $this->profissionalModel->getAll();
        $baseUrl = $this->url;
        require "views/ProfissionaisView.php";
 
    } 
    
    public function verDoctor($id){
        $card_profissional = $this->profissionalModel->getById($id);
        $baseUrl = $this->url;
        require "views/DoctorView.php";
    }   


    // public function criar(){
    //     $baseUrl = $this->url;

    //     $erro = "";
    //     $acao = "criar";
    //     require "views/CadastroForm.php";

    // }

    // public function atualizar(){
    //     $nome = $_POST["nome"];
    //     $senha = $_POST["senha"];
    //     $usuario = $_POST["usuario"];

    //     $acao = $_POST["acao"];

    //     if($acao == "editar"){
    //         $id_usuario = $_POST["id_usuario"];
    //         $this->profissionalModel->update($id_usuario,$nome,$usuario);
    //     }else{

    //         $this->profissionalModel->insert($nome,$usuario,$senhaCrypt);
    //     }

    //     header("location: ". $this->url."/servicos");
    // }

}