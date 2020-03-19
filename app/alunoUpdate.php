<?php
require_once "../app/class/classAluno.php";
require_once "../app/dao/alunoDao.php";

$id = $_GET['id'];

$ClassAluno = new ClassAluno();                             // instanciando uma classe ClassAluno
$ClassAluno->setId($id);                                    // inserindo um novo "id" nao e obrigadorio mudar 

$alunoDAO = new AlunoDao();                                    //instanciando uma classe AlunoDao
$aluno = $alunoDAO->selecionarAluno($id);                       // enviando os dados para class AlunoDao na função "updateAluno"

if (isset($_GET['alterar'])) {
    $ClassAluno = new ClassAluno();
    $ClassAluno->setid($_POST['id']);
    $ClassAluno->setNome($_POST['nome']);
    $ClassAluno->setMatricula($_POST['matricula']);

    $alunoDAO = new AlunoDao();            // enviando os dados para class AlunoDao
    if ($alunoDAO->updateAluno($ClassAluno)) {
        echo "<script>alert('ALUNO ALTERADO COM SUCESSO!');</script>";
        echo "<script>window.location = 'alunoLista.php';</script>";
    }else{
        echo 'NÃO ATUALIZADO';        
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
                <form action="alunoUpdate.php?alterar&id=<?php $_GET['id']?>" method="post" class="col s12">
                    <fieldset>
                        <legend><h4>ALUNO - ALTERAR</h4></legend>
                        <div class="row">
                            <div class="input-field col s6">
                                <i class="material-icons prefix">account_circle</i>
                                <input id="nome" type="text" class="validate" name="nome" value="<?php echo $aluno->getNome();?>">
                                <label for="nome">Nome</label>
                            </div>
                            <div class="input-field col s6">
                                <i class="material-icons prefix">phone</i>
                                <input id="matricula" type="text" class="validate" name="matricula" size="4" maxlength="4" value="<?php echo $aluno->getMatricula();?>">
                                <label for="matricula">Matricula</label>
                            </div>
                        </div>
                        <input type="hidden" id="id" name="id" value="<?php echo $aluno->getId();?>">
                        <div class="row">
                            <div class="input-field col s2">
                                <button type="submit" class="waves-effect waves-light btn">Alterar</button>
                            </div>
                            <div class="input-field col s2">
                                <a class="waves-effect red btn" href="alunoLista.php">Cancelar</a>
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
