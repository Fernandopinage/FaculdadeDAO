<?php

//require_once "../app/class/classCurso.php";
require_once "../app/dao/cursoDao.php";

$curso = new CursoDao();
$curso->listaCurso();


?>