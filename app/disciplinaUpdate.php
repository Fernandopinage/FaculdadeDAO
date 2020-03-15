<?php 

require_once "../app/class/classDisciplina.php";
require_once "../app/dao/disciplinaDao.php";

$id =2;
$ClassDisciplina = new ClassDisciplina();
$ClassDisciplina->setId(2);
$ClassDisciplina->setNome('Administração de Banco de Dados');
$ClassDisciplina->setCargahora(24);

$disciplina = new DisciplinaDao();
$disciplina->updateDisciplina($ClassDisciplina, $id);


?>