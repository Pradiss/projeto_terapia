<?php 

require "DataBase.php";

class Usuario {

    private $usuarioModel;

    public function __construct(){
        $this->usuarioModel = DataBase::getConexao();
    }

    public function getById($id_usuario){
        $resultado = $this->db->prepare("SELECT * FROM usuarios WHERE id_usuario = ?");
        $resultado->execute([$id_usuario]);
        return $resultado->fetch(PDO::FETCH_ASSOC);
    }

    public function insert($nome,$usuario,$senha){

        $senhaCrypt = password_hash($senha, PASSWORD_BCRYPT);
        $sql = $this->usuarioModel->prepare("INSERT INTO usuarios (nome,usuario,senha) VALUES (?,?,?)");
        return $sql->execute([$nome,$usuario,$senhaCrypt]);

    }
    
    public function update($id_usuario,$nome,$usuario){
        $resultado = $this->usuarioModel->prepare("UPDATE usuarios SET nome=?,usuario=? WHERE id_usuario = ? ");
        return $resultado->execute([$nome,$usuario,$id_usuario]);
    }
}