<?php

include_once('model/Orientador.php');
include_once ('model/Avaliacao.php');
{
    // =========================Variables Declaration=========================
    Orientador: $orientador;
    Avaliacao: $avaliacao;
    
    // =========================Constructor=========================
    function __construct($orientador, $avaliacao) {
        $this->orientador = $orientador;
        $this->avalicao = $avaliacao;
    }

    // =========================Sets=========================
    function setOrientador($orientador) {
        $this->orientador = $orientador;
    }

    function setAvaliacao($avaliacao) {
        $this->avaliacao = $avaliacao;
    }

    // =========================Gets=========================
    function getOrientador() {
        return $this->orientador;
    }

    function getAvaliacao() {
        return $this->avaliacao;
    }
    // =========================Public Functions=========================

    //function pesquisarCliente() {   }
 
   function acompAv(){
       
   }


}



?>