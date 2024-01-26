<?php

class Disciplina extends Aluno  {
    public string $nome;
    public float $CargaHoraria;
    public $professor; //object //class Professor
    public  $aluno; //object //class Aluno

 
    public function __construct( $nome, $CargaHoraria, $professor, $aluno)
    {
        $this->nome = $nome;
        $this->CargaHoraria = $CargaHoraria;
        $this->professor = $professor;
        $this->aluno = $aluno;
    }
   
}