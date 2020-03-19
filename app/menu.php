<!DOCTYPE html>
<?php
require_once "../app/class/classTurma.php";
require_once "../app/dao/turmaDao.php";

$turmaDAO = new TurmaDao();
$lista = $turmaDAO->listaTurma();
?>
<html>
    <head>
        <!--Import Google Icon Font-->
        <link type="text/css" rel="stylesheet" href="fonts/icon.css">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"/>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>    

    </head>

    <body>
        <?php include_once './cabecalho.php'; ?>
        <br>        
        <div class="container main">
            <div class="row">
                <div class="col s3 card-panel">
                    <div class="center promo promo-example">
                        <i class="small material-icons">account_box</i> 
                        <p class="promo-caption">ALUNO</p>
                        <div class="card-action">
                            <a href="alunoLista.php"><p class="light center">Gerenciar Aluno.</p></a>                            
                        </div>
                    </div>
                </div>
                <div class="col s1"></div>                     
                <div class="col s3 card-panel small">
                    <div class="center">
                        <i class="small material-icons">assignment</i>
                        <p class="promo-caption">CURSO</p>
                        <div class="card-action">
                            <a href="cursoLista.php"><p class="light center">Gerenciar Curso</p></a>                            
                        </div>
                    </div>
                </div>
                <div class="col s1"></div>   
                <div class="col s3 card-panel">
                    <div class="center promo promo-example">
                        <i class="small material-icons">book</i>
                        <p class="promo-caption">DISCIPLINA</p>
                        <div class="card-action">
                            <a href="disciplinaLista.php"><p class="light center">Gerenciar Disciplina</p></a>
                        </div>
                    </div>
                </div>
            </div>            
            <div class="row">
                <div class="col s8"><h4>ALUNOS MATRICULADOS</h4></div>
                <div class="col s4"><a class="waves-effect waves-light btn" href="turmaInsert.php">
                        <i class="material-icons left">add</i>MATRICULAR ALUNO</a>
                </div>

                <table class="striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>TURMA</th>
                            <th>TURNO</th>
                            <th>ALUNO</th>
                            <th>CURSO</th>
                            <th>DISCIPLINA</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($lista as $i => $obj) {
                            echo '<tr>';
                            echo '<td>';
                            echo $obj->getId();
                            echo '</td>';
                            echo '<td>';
                            echo $obj->getSigla();
                            echo '</td>';
                            echo '<td>';
                            echo $obj->getTurno();
                            echo '</td>';
                            echo '<td>';
                            echo $obj->getAluno();
                            echo '</td>';
                            echo '<td>';
                            echo $obj->getCurso();
                            echo '</td>';
                            echo '<td>';
                            echo $obj->getDisciplina();
                            echo '</td>';
                            echo '</tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>

        </div>
        <?php include_once './footer.php'; ?>
        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
</html>
