<?php 

require_once "../app/dao/disciplinaDao.php";

$disciplina = new DisciplinaDao();      // instanciando uma classe ClassAluno
$lista =  $disciplina->disciplinaLista();         // criando um select na função "disciplinaLista" na class DisciplinaDao

if(isset($_GET['acao'])){
    $id = filter_input(INPUT_GET, 'id');    
    $disciplina->deleteDisciplina($id);
    echo "<script>alert('DISCIPLINA DELETADA COM SUCESSO!');window.location = 'disciplinaLista.php';</script>";
    //header('Location: disciplinaLista.php');
    
};
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
                <div class="col s7"> <h4>DISCIPLINA - LISTAR</h4> </div>
                <div class="col s5"> <a class="waves-effect waves-light btn" href="disciplinaInsert.php">
                        <i class="material-icons left">add</i>CADASTRAR NOVO</a>
                </div>
            </div>  
            <div class="row">
                <table class="striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NOME DA DISCIPLINA</th>      
                            <th>CARGA HORÁRIA</th> 
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
                            echo $obj->getNome();
                            echo '</td>';     
                            echo '<td>';
                            echo $obj->getCargahora();
                            echo '</td>';         
                            echo '<td>';
                            echo '<a class="waves-effect blue btn" href="disciplinaUpdate.php?id=' . $obj->getId() . '">ALTERAR</a>'
                            . '<a class="waves-effect red btn" onclick="deletar(' . $obj->getId() . ');">DELETAR</a>';
                            echo '</td>';
                            echo '</tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <br> <br> <br>
        <?php include_once './footer.php'; ?>
        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script>            
            function deletar(id) {              
                var mensagem = 'Deseja deletar esse registro ?';
                if (window.confirm(mensagem)) {
                    window.open('disciplinaLista.php?acao=deletar&id='+id,'_self');                    
                    return true;
                   //window.location = this.window.location;                    
                } else {
                    return false;
                }
            }
        </script>
    </body>
</html>
