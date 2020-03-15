<?php 

require_once "../app/class/classDisciplina.php";
require_once "../app/dao/disciplinaDao.php";

$ClassDisciplina = new ClassDisciplina();
$ClassDisciplina->setNome('Otimização de Consultas e Laboratório');
$ClassDisciplina->setCargahora(24);

$disciplina = new DisciplinaDao();
$disciplina->insertDisciplina($ClassDisciplina);

?>