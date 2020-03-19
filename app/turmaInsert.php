<?php
require_once "../app/dao/turmaDao.php";
require_once "../app/dao/alunoDao.php";
require_once "../app/dao/cursoDao.php";
require_once "../app/dao/disciplinaDao.php";

$alunoDAO = new AlunoDao();
$aluno = $alunoDAO->listaAluno();

$cursoDAO = new CursoDao();
$curso = $cursoDAO->listaCurso();

$disciplinaDAO = new DisciplinaDao();
$disciplina = $disciplinaDAO->disciplinaLista();

if (isset($_POST['acao'])) {
    $ClassTurma = new ClassTurma();
    $ClassTurma->setSigla($_POST['sigla']);
    $ClassTurma->setTurno($_POST['turno']);
    $ClassTurma->setAluno($_POST['aluno']);
    $ClassTurma->setCurso($_POST['curso']);
    $ClassTurma->setDisciplina($_POST['disciplina']);

    $turmaDAO = new TurmaDao();            // enviando os dados para class AlunoDao
    if ($turmaDAO->insertTurma($ClassTurma)) {
        echo "<script>alert('MATRICULA INSERIDA COM SUCESSO!');</script>";
        echo "<script>window.location = 'menu.php';</script>";
    } else {
        echo "<script>alert('NÃO FOI POSSÍVEL MATRICULAR ALUNO!');</script>";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <!--Import Google Icon Font-->
        <link type="text/css" rel="stylesheet" href="fonts/icon.css">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css" />
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    </head>
    <body>
        <?php include_once './cabecalho.php'; ?>
        <br><br>
        <div class="container main">
            <div class="row">
                <form action="turmaInsert.php" method="post" class="col s12">
                    <input type="hidden" id="acao" name="acao" value="inserir">
                    <fieldset>
                        <legend><h4> MATRICULAR ALUNO </h4></legend>
                        <div class="row">
                            <div class="input-field col s4">
                                SIGLA
                                <input id="sigla" type="text" class="validate" name="sigla" required="" autofocus="" size="4" maxlength="4">
                            </div>   
                            <div class="input-field col s4">
                                TURNO
                                <select id="turno" class="validate  browser-default" name="turno" required="" autofocus="">
                                    <option value="" disabled selected>Escolha Turno</option>
                                    <option value="MANHÃ">MANHÃ</option>
                                    <option value="TARDE">TARDE</option>
                                    <option value="NOITE">NOITE</option>
                                    <option value="INTEGRAL">INTEGRAL</option>
                                </select>                                
                            </div>   
                            <div class="input-field col s4">
                                ALUNO
                                <select id="aluno" class="validate  browser-default" name="aluno" required="" autofocus="">
                                    <option value="" disabled selected>Escolha Aluno</option>
                                    <?php foreach ($aluno as $key => $obj) {
                                        ?>    
                                        <option value="<?php echo $obj->getID(); ?>"><?php echo $obj->getNome(); ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>                                
                            </div>   
                        </div>
                        <div class="row">
                            <div class="input-field col s6">
                                CURSO
                                <select id="curso" class="validate  browser-default" name="curso" required="" autofocus="">
                                    <option value="" disabled selected>Escolha Curso</option>
                                    <?php foreach ($curso as $key => $obj) {
                                        ?>    
                                        <option value="<?php echo $obj->getID(); ?>"><?php echo $obj->getNome(); ?></option>
                                        <?php
                                    }
                                    ?>                                 
                                </select>                                
                            </div>   
                            <div class="input-field col s6">
                                DISCIPLINA
                                <select id="disciplina" class="validate  browser-default" name="disciplina" required="" autofocus="">
                                    <option value="" disabled selected>Escolha Disciplina</option>
                                    <?php foreach ($disciplina as $key => $obj) {
                                        ?>    
                                        <option value="<?php echo $obj->getID(); ?>"><?php echo $obj->getNome(); ?></option>
                                        <?php
                                    }
                                    ?>                                     
                                </select>                                
                            </div>   
                        </div>
                        <div class="row">
                            <div class="input-field col s2">
                                <button type="submit" class="waves-effect waves-light btn">Cadastrar</button>
                            </div>
                            <div class="input-field col s2">
                                <a class="waves-effect red btn" href="menu.php">Cancelar</a>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
        <?php include_once './footer.php'; ?>
        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="js/materialize.min.js"></script>

    </body>
</html>

?>