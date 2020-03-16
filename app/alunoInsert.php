<?php 


require_once "../app/class/classAluno.php";
require_once "../app/dao/alunoDao.php";


$ClassAluno = new ClassAluno();     // instanciando uma classe ClassAluno
$ClassAluno->setNome('Maria');      // acrecentando um nome para o aluno
$ClassAluno->setMatricula('CCC');   // acrescentando uma matrícula

$aluno = new AlunoDao();            // enviando os dados para class AlunoDao
$aluno->insertAluno($ClassAluno);   // inserindo os dados na função insert do "AlunoDao"


?>