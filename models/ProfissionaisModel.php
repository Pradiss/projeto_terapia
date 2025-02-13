<?php 

require "DataBase.php";

class Profissionais {

    private $db;

    public function __construct(){
        $this->db = DataBase::getConexao();
    }
    public function getAll(){
        $resultado = $this->db->query("SELECT * FROM profissionais");
        return $resultado->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id){
        $sql = $this->db->prepare("SELECT * FROM profissionais WHERE id = ?");
        $sql->execute([$id]);
        return $sql->fetch(PDO::FETCH_ASSOC);
    }

    // public function insert($nome,$especialidade){
        
    //     $sql = $this->db->prepare("INSERT INTO profissionais (nome,especialidade) VALUES (?,?)");
    //     return $sql->execute([$nome,$especialidade,]);

    // }
    
    // public function update($id,$nome,$especialidade){
    //     $resultado = $this->db->prepare("UPDATE profissionais SET nome=?,especialidade=? WHERE id = ? ");
    //     return $resultado->execute([$nome,$especialidade,$id]);
    // }
}