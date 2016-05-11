<?php

/**
 * Description of Developer
 *
 * @copyright (c) 2015, ByteGod IT solutions - todos os direitos reservados
 */
class Developer {
    
    //atributos
    private $idDeveloper;
    private $nomeDeveloper;
    private $emailDeveloper;
    private $funcaoDeveloper;
    
    //getters and setters
    
    function getIdDeveloper() {
        return $this->idDeveloper;
    }

    function getNomeDeveloper() {
        return $this->nomeDeveloper;
    }

    function getEmailDeveloper() {
        return $this->emailDeveloper;
    }

    function getFuncaoDeveloper() {
        return $this->funcaoDeveloper;
    }

    function setIdDeveloper($idDeveloper) {
        $this->idDeveloper = $idDeveloper;
    }

    function setNomeDeveloper($nomeDeveloper) {
        $this->nomeDeveloper = $nomeDeveloper;
    }

    function setEmailDeveloper($emailDeveloper) {
        $this->emailDeveloper = $emailDeveloper;
    }

    function setFuncaoDeveloper($funcaoDeveloper) {
        $this->funcaoDeveloper = $funcaoDeveloper;
    }


}
?>