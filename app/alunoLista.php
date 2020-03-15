<?php

require_once "../app/dao/alunoDao.php";


$aluno = new AlunoDao();
$aluno->listaAluno();


?>