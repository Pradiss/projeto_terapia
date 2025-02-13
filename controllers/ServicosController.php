<?php 

require "models/ServicosModel.php";

class ServicosController {
    
    private $url = "http://localhost/projetoterapia/terapia";

    private $servicosModel;

    public function __construct(){
        $this->servicosModel = new Servicos();
    }

    public function index(){
        $card_servicos = $this->servicosModel->getAll();
        $baseUrl = $this->url;
        require "views/ServicosView.php";
 
    }

    public function verTerapia($id){
        $card_terapia = $this->servicosModel->getById($id);
        $baseUrl = $this->url;
        require "views/TerapiaView.php";
    }



}