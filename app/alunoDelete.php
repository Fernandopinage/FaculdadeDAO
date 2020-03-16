<?php

require_once "../app/dao/alunoDao.php";


$aluno = new AlunoDao();    // instanciando uma classe ClassAluno
$aluno->deleteAluno(11);    // enviando o ID para função "deleteAluno" do AlunoDao


?>