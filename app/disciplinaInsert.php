<?php 

require_once "../app/class/classDisciplina.php";
require_once "../app/dao/disciplinaDao.php";

if (isset($_POST['nome'])) {
    $ClassDisciplina = new ClassDisciplina();      
    $ClassDisciplina->setNome($_POST['nome']);
    $ClassDisciplina->setCargahora($_POST['carga']);
    
    $disciplina = new DisciplinaDao();            // enviando os dados para class AlunoDao
    if ($disciplina->insertDisciplina($ClassDisciplina)) {
        echo "<script>alert('DISCIPLINA INSERIDA COM SUCESSO!');</script>";
        echo "<script>window.location = 'disciplinaLista.php';</script>";
    } else {
        echo "<script>alert('NÃO FOI POSSÍVEL INSERIR CURSO!');</script>";
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
                <form action="disciplinaInsert.php" method="post" class="col s12">
                    <fieldset>
                        <legend><h4>DISCIPLINA - CADASTRAR</h4></legend>
                        <div class="row">
                            <div class="input-field col s6">
                                <i class="material-icons prefix">account_circle</i>
                                <input id="nome" type="text" class="validate" name="nome" required="" autofocus="">
                                <label for="nome">Nome</label>
                            </div>   
                            <div class="input-field col s6">
                                <i class="material-icons prefix">account_circle</i>
                                <input id="carga" type="number" class="validate" name="carga" required="" autofocus="" maxlength="3" size="3">
                                <label for="carga">Carga Horária</label>
                            </div>   
                        </div>
                        <div class="row">
                            <div class="input-field col s2">
                                <button type="submit" class="waves-effect waves-light btn">Cadastrar</button>
                            </div>
                            <div class="input-field col s2">
                                <a class="waves-effect red btn" href="disciplinaLista.php">Cancelar</a>
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
