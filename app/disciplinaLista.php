<?php 

require_once "../app/dao/disciplinaDao.php";

$disciplina = new DisciplinaDao();      // instanciando uma classe ClassAluno
$disciplina->disciplinaLista();         // criando um select na função "disciplinaLista" na class DisciplinaDao


?>