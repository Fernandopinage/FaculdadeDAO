<?php 
require_once "../app/dao/disciplinaDao.php";

$id = 2;

$disciplina = new DisciplinaDao();
$disciplina->deleteDisciplina($id);

?>