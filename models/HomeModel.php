<?php 

require "DataBase.php";

class Home {

    private $db;

    public function __construct(){
        $this->db = DataBase::getConexao();
    }

    public function getAll(){
        $resultado = $this->db->query("SELECT * FROM  terapias");
        return $resultado->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id){
        $sql = $this->db->prepare("SELECT * FROM terapias WHERE id = ? ");
        $sql->execute([$id]);
        return $sql->fetch(PDO::FETCH_ASSOC);
    }


    public function getAllDoctor(){
        $resultado = $this->db->query("SELECT * FROM profissionais");
        return $resultado->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getByIdDoctor($id){
        $sql = $this->db->prepare("SELECT * FROM profissionais WHERE id = ?");
        $sql->execute([$id]);
        return $sql->fetch(PDO::FETCH_ASSOC);
    }
}