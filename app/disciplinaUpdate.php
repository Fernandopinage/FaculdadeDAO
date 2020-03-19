<?php 
require_once "../app/class/classDisciplina.php";
require_once "../app/dao/disciplinaDao.php";

$id = filter_input(INPUT_GET,'id');

$ClassDisciplina = new ClassDisciplina();                           // instanciando uma classe ClassDisciplina

$disciplinaDAO = new DisciplinaDao();                                  // instanciando uma classe DisciplinaDao
$disciplina = $disciplinaDAO->selecionarDisciplina($id);               // enviando os dados para função "updateDisciplina"

if (isset($_GET['alterar'])) {   
    $ClassDisciplina->setId($id);    
    $ClassDisciplina->setNome($_POST['nome']);     
    $ClassDisciplina->setCargahora($_POST['carga']);     
   
    if ($disciplinaDAO->updateDisciplina($ClassDisciplina)) {
        echo "<script>alert('DISCIPLINA ALTERADA COM SUCESSO!');</script>";
        echo "<script>window.location = 'disciplinaLista.php';</script>";
    }else{
        echo 'NÃO ATUALIZADO';        
    }       
}
?>
<!DOCTYPE html>
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
        <br><br>
        <div class="container main">
            <div class="row">
                <form action="disciplinaUpdate.php?alterar&id=<?php echo $id;?>" method="post" class="col s12">
                    <fieldset>
                        <legend> <h4>DISCIPLINA - ALTERAR</h4></legend>
                        <div class="row">
                            <div class="input-field col s6">
                                <i class="material-icons prefix">account_circle</i>
                                <input id="nome" type="text" class="validate" name="nome" value="<?php echo $disciplina->getNome();?>">
                                <label for="nome">Nome</label>
                            </div>  
                            <div class="input-field col s6">
                                <i class="material-icons prefix">account_circle</i>
                                <input id="carga" type="text" class="validate" name="carga" required="" autofocus="" value="<?php echo $disciplina->getcargaHora();?>">
                                <label for="carga">Carga Horária</label>
                            </div>  
                        </div>
                        <input type="hidden" id="id" name="id" value="<?php echo $disciplina->getId();?>">
                        <div class="row">
                            <div class="input-field col s2">
                                <button type="submit" class="waves-effect waves-light btn">Alterar</button>
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
