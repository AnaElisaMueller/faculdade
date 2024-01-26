<?php


class Aluno extends Pessoa {
    public string $matricula;
    public array $nota;

    public function __construct( $nome,  $idade, $matricula, $nota)
    {
        parent::__construct($nome, $idade);
        $this->matricula = $matricula;
        $this->nota = $nota;

    }

}
