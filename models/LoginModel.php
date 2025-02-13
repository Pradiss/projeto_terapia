<?php


require_once "DataBase.php";

class Login{

    private $db;

    public function __construct(){
        $this->db = DataBase::getConexao();
    }

    public function getByUsuario($usuario,$senhaDoUsuario){ 
        $resultado = $this->db->prepare("SELECT * FROM usuarios WHERE usuario = ?");
        $resultado->execute([$usuario]);
        return $resultado->fetch(PDO::FETCH_ASSOC);

        if($resultado){

            $senhaDoBanco = $resultado["senha"];

            if(password_verify($senhaDoUsuario, $senhaDoBanco)){
                
                $_SESSION["nome_usuario"] = $resultado["nome"];
               
              
              
                return true;
            }    
           
        }
        $_SESSION["erro"] = "Falha no login";
        return false;
    
    }
    
}