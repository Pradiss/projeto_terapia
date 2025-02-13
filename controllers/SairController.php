<?php 

class SairController {

    private $url = "http://localhost/projetoterapia/terapia";

    public function index(){
        session_destroy();


        header("location: ". $this->url. "/login");
    }
}