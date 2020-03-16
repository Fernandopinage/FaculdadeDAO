<?php 

    require_once "../app/dao/turmaDao.php";
    require_once "../app/class/classAluno.php";
    require_once "../app/class/classCurso.php";
    require_once "../app/class/classDisciplina.php";
    require_once "../app/class/classTurma.php";
    

    $ClassAluno = new ClassAluno();
    $ClassAluno->setId(1);

    $ClassCurso = new ClassCurso();
    $ClassCurso->setId(3);

    $ClassDisciplina = new ClassDisciplina();
    $ClassDisciplina->setId(2);


    $ClassTurma = new ClassTurma();
    $ClassTurma->setSigla('CD');
    $ClassTurma->setTurno('matutino');

    $turma = new TurmaDao();
    $turma->insertTurma($ClassTurma,$ClassAluno,$ClassCurso,$ClassDisciplina);

?>