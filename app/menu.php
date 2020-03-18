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
        <nav>
            <div class="nav-wrapper">
                <a href="menu.php" class="brand-logo center">SISTEMA MATRÍCULA</a>
                <ul id="nav-mobile" class="left hide-on-med-and-down">
                    <li><a href="alunoLista.php">Aluno</a></li>
                    <li><a href="cursoLista.php">Curso</a></li>
                    <li><a href="disciplinaLista.php">Disciplina</a></li>
                </ul>
            </div>
        </nav>
        <br>
        
        <div class="container">
            <div class="row">
                <a href="alunoLista.php">  
                    <div class="col s4">
                        <div class="center promo promo-example">
                            <i class="large material-icons">account_box</i> 
                            <p class="promo-caption">ALUNO</p>
                            <p class="light center">LISTAR, INSERIR, ALTERAR E DELETAR UM REGISTRO DE ALUNO.</p>
                        </div>
                    </div>
                </a>
                <div class="col s4">
                    <div class="center promo promo-example">
                        <i class="large material-icons">assignment</i>
                        <p class="promo-caption">CURSO</p>
                        <p class="light center">LISTAR, INSERIR, ALTERAR E DELETAR UM REGISTRO DE CURSO</p>
                    </div>
                </div>
                <div class="col s4">
                    <div class="center promo promo-example">
                        <i class="large material-icons">book</i>
                        <p class="promo-caption">DISCIPLINA</p>
                        <p class="light center">LISTAR, INSERIR, ALTERAR E DELETAR UM REGISTRO DE DISCIPLINA</p>
                    </div>
                </div>
            </div>

        </div>

        <footer class="page-footer" style="position:fixed;bottom:0;left:0;width:100%;">

            <div class="footer-copyright">
                <div class="container">
                    © 2020 Copyright Text
                    <a class="grey-text text-lighten-4 right" href="#!">Links</a>
                </div>
            </div>
        </footer>


        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
</html>
