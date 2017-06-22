<?php

include_once('model/Tcc.php');
include_once ('model/Avaliacao.php');
class AvaliadorController
{
    // =========================Variables Declaration=========================
    private $avaliador;
    private $tcc;
    private $avaliacao;
    
    // =========================Constructor=========================
    function __construct($avaliador) {
        $this->avaliador = $avaliador;
        $this->tcc = $tcc;
    }

    // =========================Sets=========================
    function setAvaliador($avaliador)
    {
        $this->avaliador = $avaliador;
    }

    function setAvaliacao($avaliacao) {
        $this->avaliacao = $avaliacao;
    }
    
    function setTcc($tcc){
        $this->tcc = tcc;
    }

    // =========================Gets=========================


    function getAvaliacao() {
        return $this->avaliacao;
    }
    
    function getTcc(){
        return $this->tcc;
    }
    function getAvaliador(){
        return $this->avaliador;
    }
    // =========================Public Functions=========================

 
   function AvaliarTCC($nota){
       $this->Avaliacao.setNota($nota);
   }


}



?>