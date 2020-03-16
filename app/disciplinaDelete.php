<?php 
require_once "../app/dao/disciplinaDao.php";

$id = 7;

$disciplina = new DisciplinaDao();      // instanciando uma classe DisciplinaDao
$disciplina->deleteDisciplina($id);     // deletando o registro pelo ID na função deleteDisciplina

?>