<?php

require_once 'Pessoa.php';
require_once 'Professor.php';
require_once 'Aluno.php';
require_once 'Disciplina.php';
//require_once 'Faculdade.php';


$aluno = new Aluno ('ana', 19, 'm200',[62,66]);
$aluno2 = new Aluno('fulano',12,'m12',[ 66, 10]);

var_dump($aluno);
var_dump($aluno2);

$prof = new Professor( 'carlos', 10, []);//array 
$aula = new Disciplina('pedagogia', 26, $prof, $aluno);//um prof por cada
var_dump($aluno);
var_dump($aula);
/*
$prof = new Professor ( , 102, 'arquitetura');
$prof2 = new Professor ( 'doroteia', 101, 'arte');

var_dump($prof);
var_dump($prof2);



$aluno->setNome('ana');
$aluno->setIdade(19);
$aluno->setMatricula('cursando');
$aluno->setNota(8, 9);



$professor = new Professor();
$professor->setNome ('carlos');
$professor->setIdade (27);

$professor_dois = new Professor();
$professor_dois->setNome('carla');
$professor_dois->setIdade(43);


$disciplina = new Disciplina();
$disciplina->setName ('arte');
*/
//salvar em json 
$all = [$aluno,  $aluno2, $aula, $prof];//prof_dois,aluno3, aluno4,
$salvarJson = json_encode($all);

file_put_contents('dados.json', $salvarJson);