<?php
require_once "../app/class/classAluno.php";
require_once "../app/dao/alunoDao.php";

if (isset($_POST['nome'])) {
    $ClassAluno = new ClassAluno();
    $ClassAluno->setNome($_POST['nome']);
    $ClassAluno->setMatricula($_POST['matricula']);

    $aluno = new AlunoDao();            // enviando os dados para class AlunoDao
    if ($aluno->insertAluno($ClassAluno) == TRUE) {
        echo "<script>alert('ALUNO INSERIDO COM SUCESSO!');</script>";
        echo "<script>window.location = 'alunoLista.php';</script>";
    } else {
        echo 'NAO INSERIU';
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <!--Import Google Icon Font-->
        <link type="text/css" rel="stylesheet" href="fonts/icon.css" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <style>
            body {
                display: flex;
                min-height: 100vh;
                flex-direction: column;
            }

            .main {
                flex: 1 0 auto;
            }
        </style>
    </head>
    <body>
        <?php include_once './cabecalho.php'; ?>
        <br><br>
        <div class="container main">
            <div class="row">
                <form action="alunoInsert.php" method="post" class="col s12">
                    <fieldset>
                        <legend><h4>ALUNO - CADASTRAR</h4></legend>
                        <div class="row">
                            <div class="input-field col s6">
                                <i class="material-icons prefix">account_circle</i>
                                <input id="nome" type="text" class="validate" name="nome" required="" autofocus="">
                                <label for="nome">Nome</label>
                            </div>
                            <div class="input-field col s6">
                                <i class="material-icons prefix">phone</i>
                                <input id="matricula" type="tel" class="validate" name="matricula" required="" >
                                <label for="matricula">Matricula</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s2">
                                <button type="submit" class="waves-effect waves-light btn">Cadastrar</button>
                            </div>
                            <div class="input-field col s2">
                                <a class="waves-effect red btn">Cancelar</a>
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
