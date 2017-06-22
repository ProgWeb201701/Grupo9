<?php

include_once('model/Professor.php');
class ProfessorController
{
    // =========================Variables Declaration=========================
    private $professor;
    private $areaInteresse;

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


        $this->professor->setNome($nome);
        $this->professor->setInstituicao($instituicao);
        $this->professor->setTitulacao($titulacao);
        
    }
    function associarAreaInteresse($areaInteresse)
    {
        $this->professor.setAreaI($areaInteresse);
    }
   

 }



?>