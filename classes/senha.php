<?php

/**
 * Description of senha
 *
 * @copyright (c) 2015, ByteGod IT solutions - todos os direitos reservados
 */
class senha {
    //atributos
    private $senha;
    private $devId;
    
    
    //getters and setters
    
    
    function getSenha() {
        return $this->senha;
    }

    function getDevId() {
        return $this->devId;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setDevId($devId) {
        $this->devId = $devId;
    }


    
    
    
}

?>