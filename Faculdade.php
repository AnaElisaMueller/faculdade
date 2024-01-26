<?php
//não está em uso

require_once 'Pessoa.php';

class Faculdade {
    public array $pessoa = [];

    public function addPessoa(Pessoa $pessoa)
    {
        $this->pessoa[] = $pessoa;
    }

    public function getPessoa()
    {
        return $this->pessoa;
    }
}