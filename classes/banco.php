<?php

/**
 * Description of banco
 *
 * @copyright (c) 2015, ByteGod IT solutions - todos os direitos reservados
 */
class banco {
    //atributos
    
    private $idBanco;
    private $valorAgregado;
    private $numHoras;
    private $devId;
    
    //getters and setters
    
    function getIdBanco() {
        return $this->idBanco;
    }

    function getValorAgregado() {
        return $this->valorAgregado;
    }

    function getNumHoras() {
        return $this->numHoras;
    }

    function getDevId() {
        return $this->devId;
    }

    function setIdBanco($idBanco) {
        $this->idBanco = $idBanco;
    }

    function setValorAgregado($valorAgregado) {
        $this->valorAgregado = $valorAgregado;
    }

    function setNumHoras($numHoras) {
        $this->numHoras = $numHoras;
    }

    function setDevId($devId) {
        $this->devId = $devId;
    }


    
    
}
