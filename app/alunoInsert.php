<?php 


require_once "../app/class/classAluno.php";
require_once "../app/dao/alunoDao.php";


$ClassAluno = new ClassAluno();
$ClassAluno->setNome('luiz eduardo');
$ClassAluno->setMatricula('85C');

$aluno = new AlunoDao();
$aluno->insertAluno($ClassAluno);


?>