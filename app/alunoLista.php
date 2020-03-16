<?php

require_once "../app/dao/alunoDao.php";


$aluno = new AlunoDao();    // instanciando uma classe AlunoDao
$aluno->listaAluno();       // criando um select na função "listaAluno" da class AlunoDao


?>