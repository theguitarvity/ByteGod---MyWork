<?php

/**
 * Description of DeveloperDAO
 *
 * @copyright (c) 2015, ByteGod IT solutions - todos os direitos reservados
 */

require_once("../ConnectionFactory.php");
class DeveloperDAO {
    //put your code here
    function __construct() {
        $this->conn = new ConnectionFactory();
        $this->pdo = $this->conn->Connect();
        
    }
    
    // metodo responsavel por realizar o persistencia no banco de dados
    function cadastrar(Developer $dev){
        try {
            $stmt = $this->pdo->prepare("INSERT INTO developer(nomeDeveloper, emailDeveloper, funcaoDeveloper)VALUES(:nome,:email,:funcao)");
            $param = array(
                ":nome"=>$dev->getNomeDeveloper(),
                ":email"=>$dev->getEmailDeveloper(),
                ":funcao"=>$dev->getFuncaoDeveloper()
            );
            return $stmt->execute($param);
            
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
        
    }
    
    //metodo responsavel por retornar o id do desenvolvedor cadastrado
    
    function retornaID($email){
        try {
            $cons = $this->pdo->prepare("SELECT * FROM developer WHERE emailDeveloper = :email");
            $param = array(
                ":email" => $email,
            );
            $cons->execute($param);

            if ($cons->rowCount() > 0) {
                $consulta = $cons->fetch(PDO::FETCH_ASSOC);
                return $consulta['idDeveloper'];
            } else {
                return "";
            }
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            echo $ex->getLine();
            echo $ex->getFile();
        }
    }
    
    //metodo responsavel por retornar se o email ja existe na base dados
    function consultarEmail($email) {
        try {
            $cons = $this->pdo->prepare("SELECT * FROM developer WHERE emailDeveloper=:email");
            $param = array(
                ":email"=>$email
            );
            $cons->execute($param);
            
            if($cons->rowCount()>0){
                return true;
            }
            else{
                return false;
            }
        } 
        catch (PDOException $ex) {
            echo $ex->getMessage();
            echo $ex->getLine();
            echo $ex->getFile();
        }
    }
    
    
    //metodo responsavel por realizar o login o desenvolvedor no sistema kronos
    
    
    function logar($email,$senha){
        try {
            $cons = $this->pdo->prepare("SELECT * FROM developer INNER JOIN senha on senha.idDeveloper = usuario.idDeveloper WHERE usuario.emailDeveloper=:email AND senha.senha=:senha");
            $param = array(
                ":us_email"=>$email,
                ":us_senha"=>  md5($senha)
            );
            $cons->execute($param);
            if($cons->rowCount()>0){
                return true;
            }
            else{
                return false;
            } 
            
            
        } 
        catch (Exception $ex) {
            echo $ex->getMessage();
            echo $ex->getLine();
            echo $ex->getFile();
        }
    }
    
    
    
    
    
}

?>