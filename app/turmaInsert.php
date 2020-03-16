<?php 

    require_once "../app/dao/turmaDao.php";
    require_once "../app/class/classAluno.php";
    require_once "../app/class/classCurso.php";
    require_once "../app/class/classDisciplina.php";
    require_once "../app/class/classTurma.php";
    

    $ClassAluno = new ClassAluno();             // instanciando uma classe ClassAluno  
    $ClassAluno->setId(1);

    $ClassCurso = new ClassCurso();             // instanciando uma classe ClassCurso
    $ClassCurso->setId(3);

    $ClassDisciplina = new ClassDisciplina();   // instanciando uma classe ClassDisciplina
    $ClassDisciplina->setId(2);


    $ClassTurma = new ClassTurma();             // instanciando uma classe ClassTurma
    $ClassTurma->setSigla('CD');
    $ClassTurma->setTurno('matutino');

    $turma = new TurmaDao();                    // instanciando uma classe TurmaDao
    $turma->insertTurma($ClassTurma,$ClassAluno,$ClassCurso,$ClassDisciplina);

?>