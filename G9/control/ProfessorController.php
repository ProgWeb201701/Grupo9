<?php

include_once('model/Professor.php');

{
    // =========================Variables Declaration=========================
    Professor: $professor;

    // =========================Constructor=========================
    function __construct($professor) {
        $this->professor = $professor;
    }

    // =========================Sets=========================
    function setProfessor($professor) {
        $this->professor = $professor;
    }
    // =========================Gets=========================
    function getProfessor() {
        return $this->professor;
    }
    // =========================Public Functions=========================

    //function pesquisarCliente() {   }

    function atualizarDados($dados) {

        $nome = $_POST["nome"];
        $titulacao = $_POST["titulacao"];
        $instituicao = $_POST["instituicao"];


        $professor->setNome($nome);
        $professor->setInstituicao($instituicao);
        $professor->setTitulacao($titulacao);
        
        //$this->clienteSelecionado->update();//bd
    }

 }



?>