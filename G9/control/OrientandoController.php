<?php

include_once('model/Orientando.php');

{
    // =========================Variables Declaration=========================
    Orientando: $orientando;

    // =========================Constructor=========================
    function __construct($orientando) {
        $this->orientando = $orientando;
    }

    // =========================Sets=========================
    function setOrientando($orientando) {
        $this->orientando = $orientando;
    }
    // =========================Gets=========================
    function getOrientando() {
        return $this->orientando;
    }
    // =========================Public Functions=========================

    //function pesquisarOrientando() {   }

    function atualizarDados($dados) {

        $nome = $_POST["nome"];
        $curso = $_POST["curso"];
        $matricula = $_POST["matricula"];

        $this->orientando->setNome($nome);
        $this->orientando->setCurso($curso);
        $this->orientando->setMat($mat);

        
        //$this->clienteSelecionado->update();//bd
    }
}



?>