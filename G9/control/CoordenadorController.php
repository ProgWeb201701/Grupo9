<?php

include_once('model/Tcc.php');
include_once ('model/Avaliacao.php');
class CoordenadortccController
{
    // =========================Variables Declaration=========================
    private $coordenadortcc;
    private $tcc;
    private $avaliacao;
    
    // =========================Constructor=========================
    function __construct($coordenadortcc) {
        $this->coordenadortcc = $coordenadortcc;
    }

    // =========================Sets=========================
    function setCoordenadortcc($coordenadortcc)
    {
        $this->coordenadortcc = coordenadortcc;
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
    function getCoordenadortcc(){
        return $this->coordenadortcc;
    }
    // =========================Public Functions=========================

 
   function mostrarTccs(){
       
   }
   function mostrarAvaliacoes(){
        
   }


}



?>