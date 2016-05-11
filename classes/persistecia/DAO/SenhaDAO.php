<?php

/**
 * Description of SenhaDAO
 *
 * @copyright (c) 2015, ByteGod IT solutions - todos os direitos reservados
 */
require_once("../ConnectionFactory.php");

class SenhaDAO {

    //metodo construtor da classe

    function __construct() {
        $this->conn = new ConnectionFactory();
        $this->pdo = $this->conn->Connect();
    }
    
    
    function cadastrar(Senha $senha) {
        try {
            $cad = $this->pdo->prepare("INSERT INTO senha (senha,idDeveloper) VALUES(:senha,:code)");
            $param = array(
                ":senha" => md5($senha->getSenha()),
                ":code" => $senha->getDevId()
            );
            return $cad->execute($param);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            echo $ex->getLine();
            echo $ex->getFile();
        }
    }

}

?>