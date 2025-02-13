<?php 


class DataBase {

    private static $conexao;

    public static function getConexao(){
        if(self::$conexao == null){
           $host = "localhost";
           $db_name = "terapia_integrativas";
           $usuario = "root";
           $senha = "";

           try{
            
            self::$conexao = new PDO(
                "mysql:host=$host;dbname=$db_name;",
                $usuario,
                $senha
            );
            self::$conexao->setAttribute(
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION
            );
          
           }catch(PDOException $erro){
                echo "ERRO DE CONEXÃO ". $erro->getMessage();
           }
        }
        return self::$conexao;
    }
}