<?php

include_once('model/Orientador.php');
include_once ('model/Avaliacao.php');
class AvaliadorController
{
    // =========================Variables Declaration=========================
    private $avaliador;
    private $avaliacao;
    private $tcc;
    
    // =========================Constructor=========================
    function __construct($orientador, $avaliacao, $tcc) {
        $this->orientador = $orientador;
        $this->avalicao = $avaliacao;
        $this->tcc = $tcc;
    }

    // =========================Sets=========================
    function setOrientador($orientador) {
        $this->orientador = $orientador;
    }

    function setAvaliacao($avaliacao) {
        $this->avaliacao = $avaliacao;
    }
    
    function setTcc($tcc){
        $this->tcc = tcc;
    }

    // =========================Gets=========================
    function getOrientador() {
        return $this->orientador;
    }

    function getAvaliacao() {
        return $this->avaliacao;
    }
    
    function getTcc(){
        return $this->tcc;
    }
    // =========================Public Functions=========================

    //function pesquisarCliente() {   }
 
   function AvaliarTCC($tcc){
       
   }


}



?>