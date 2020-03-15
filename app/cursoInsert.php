<?php
require_once "../app/class/classCurso.php";
require_once "../app/dao/cursoDao.php";

$ClassCurso = new ClassCurso();
$ClassCurso->setNome('Programação');

$curso = new CursoDao();
$curso->insertCurso($ClassCurso);


?>