<?php 
require_once "../app/class/classCurso.php";
require_once "../app/dao/cursoDao.php";

$id = filter_input(INPUT_GET,'id');

$ClassCurso = new ClassCurso();                 // instanciando uma classe ClassCurso
$ClassCurso->setId($id);                        // inserindo um novo "id" nao e obrigadorio mudar

$cursoDAO = new CursoDao();                         // instanciando uma classe CursoDao
$curso = $cursoDAO->selecionarCurso($id);                       // enviando os dados para class AlunoDao na função "updateAluno"

if (isset($_GET['alterar'])) {
    $ClassCurso = new ClassCurso();
    $ClassCurso->setId($_POST['id']);
    $ClassCurso->setNome($_POST['nome']);

    $curso = new CursoDao();      
    if ($curso->updateCurso($ClassCurso)) {
        echo "<script>alert('CURSO ALTERADO COM SUCESSO!');</script>";
        echo "<script>window.location = 'cursoLista.php';</script>";
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
                <form action="cursoUpdate.php?alterar&id=<?php echo $id;?>" method="post" class="col s12">
                    <fieldset>
                        <legend> <h4>CURSO - ALTERAR</h4></legend>
                        <div class="row">
                            <div class="input-field col s6">
                                <i class="material-icons prefix">account_circle</i>
                                <input id="nome" type="text" class="validate" name="nome" value="<?php echo $curso->getNome();?>">
                                <label for="nome">Nome</label>
                            </div>                            
                        </div>
                        <input type="hidden" id="id" name="id" value="<?php echo $curso->getId();?>">
                        <div class="row">
                            <div class="input-field col s2">
                                <button type="submit" class="waves-effect waves-light btn">Alterar</button>
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
