<?php


class Professor extends Pessoa {
    public array $disciplina;
  
      public function __construct( string $nome, int $idade, array $disciplina){
          parent::__construct($nome, $idade);//class pessoa
          $this->disciplina = $disciplina;//
  
      }
//outra class
      public function addDisciplina(Disciplina $disciplina)
      {
          $this->disciplina[] = $disciplina;
      }

  
  }
