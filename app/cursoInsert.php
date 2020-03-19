<?php
require_once "../app/class/classCurso.php";
require_once "../app/dao/cursoDao.php";

if (isset($_POST['nome'])) {
    $ClassCurso = new ClassCurso(); 
    $ClassCurso->setNome($_POST['nome']);
    
    $curso = new CursoDao();            // enviando os dados para class AlunoDao
    if ($curso->insertCurso($ClassCurso) == TRUE) {
        echo "<script>alert('CURSO INSERIDO COM SUCESSO!');</script>";
        echo "<script>window.location = 'cursoLista.php';</script>";
    } else {
        echo "<script>alert('NÃO FOI POSSÍVEL INSERIR CURSO!');</script>";
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
       
    </head>
    <body>
        <?php include_once './cabecalho.php'; ?>
        <br><br>
        <div class="container main">
            <div class="row">
                <form action="cursoInsert.php" method="post" class="col s12">
                    <fieldset>
                        <legend><h4>CURSO - CADASTRAR</h4></legend>
                        <div class="row">
                            <div class="input-field col s6">
                                <i class="material-icons prefix">account_circle</i>
                                <input id="nome" type="text" class="validate" name="nome" required="" autofocus="">
                                <label for="nome">Nome</label>
                            </div>                            
                        </div>
                        <div class="row">
                            <div class="input-field col s2">
                                <button type="submit" class="waves-effect waves-light btn">Cadastrar</button>
                            </div>
                            <div class="input-field col s2">
                                <a class="waves-effect red btn" href="cursoLista.php">Cancelar</a>
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
