<?php 

require_once "../app/class/classCurso.php";
require_once "../app/dao/cursoDao.php";

$id = 2;

$ClassCurso = new ClassCurso();
$ClassCurso->setId(2);
$ClassCurso->setNome('Circuito digitais');

$cuso = new CursoDao();
$cuso->updateAluno($ClassCurso,$id);
?>