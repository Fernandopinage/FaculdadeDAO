<?php 

require_once "../app/class/classAluno.php";
require_once "../app/dao/alunoDao.php";

$id= 1;
$ClassAluno = new ClassAluno();
$ClassAluno->setId(1);
$ClassAluno->setNome('Luiz Fernando Pinage Coutinho');
$ClassAluno->setMatricula('11A');

$aluno = new AlunoDao();
$aluno->updateAluno($ClassAluno,$id);


?>