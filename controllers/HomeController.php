<?php 

require "models/HomeModel.php";

class HomeController {
    
    private $url = "http://localhost/projetoterapia/terapia";

    private $servicosModel;

    public function __construct(){
        $this->servicosModel = new Home();
    }

    public function index(){
        $card_servicos = $this->servicosModel->getAll();
        $baseUrl = $this->url;
        require "views/HomeView.php";
 
    }

    public function verTerapia($id){
        $card_terapia = $this->servicosModel->getById($id);
        $baseUrl = $this->url;
        require "views/TerapiaView.php";
    }

    public function index1(){
        $card_profissionais = $this->profissionalModel->getAll();
        $baseUrl = $this->url;
        require "views/ProfissionaisView.php";
 
    } 
    
    public function verDoctor($id){
        $card_profissional = $this->profissionalModel->getById($id);
        $baseUrl = $this->url;
        require "views/DoctorView.php";
    }   



}