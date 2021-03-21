<?php
  require_once "../conexao/conexao.php"; 

$query = sprintf("SELECT * FROM planos_aula");
$query2 = sprintf("SELECT j.* from planos_aula as p join jogos as j on j.id = p.jogos_id");
$query3 = sprintf("SELECT d.* from planos_aula as p join disciplinas as d on d.id = p.disciplinas_id");
$query4 = sprintf("SELECT t.* from planos_aula as p join temas_transversais as t on t.id = p.temas_transversais_id");

$dados = mysqli_query($conn,$query);
$linha = mysqli_fetch_assoc($dados);

$dados2 = mysqli_query($conn,$query2);
$linha2 = mysqli_fetch_assoc($dados2);

$dados3 = mysqli_query($conn,$query3);
$linha3 = mysqli_fetch_assoc($dados3);

$dados4 = mysqli_query($conn,$query4);
$linha4 = mysqli_fetch_assoc($dados4);


?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>PFC</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <header>
        <div class="container-fluid" id="nav">
            <div class="row">
                <div class="col-sm-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.php">
                            <img src="img/logo.png" id="logo">
                        </a>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">
                                        <p class="text-monospace">Página Inicial</p>
                                    </a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="planosAula.php">
                                        <p class="text-monospace">Planos de Aula</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="disciplinas.php">
                                        <p class="text-monospace">Disciplinas</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="temasTransversais.php">
                                        <p class="text-monospace">Temas Transversais</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="jogos.php">
                                        <p class="text-monospace">Jogos</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="login.php">
                                        <p class="text-monospace">Entrar</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="cadastroPerfil.php">
                                        <p class="text-monospace">Cadastrar-se</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <hr />

    <div class="container-fluid">

        <div class="col-sm-12 text-center my-3">
            <h1>Planos de Aula</h1>
            <div class="row justify-content-center mb-5 my-5">
                <div class="col-sm-12" id="iconCadastro">
                    <svg class="bi bi-pencil-square" width="8em" height="8em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path
                        d="M15.502 1.94a.5.5 0 010 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 01.707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 00-.121.196l-.805 2.414a.25.25 0 00.316.316l2.414-.805a.5.5 0 00.196-.12l6.813-6.814z" />
                        <path fill-rule="evenodd"
                        d="M1 13.5A1.5 1.5 0 002.5 15h11a1.5 1.5 0 001.5-1.5v-6a.5.5 0 00-1 0v6a.5.5 0 01-.5.5h-11a.5.5 0 01-.5-.5v-11a.5.5 0 01.5-.5H9a.5.5 0 000-1H2.5A1.5 1.5 0 001 2.5v11z"
                        clip-rule="evenodd" />
                    </svg>
                </div>
            </div>
        </div>

        </div>

        <?php
            do {
 
        ?>   

        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-sm-10">
                    <div id="accordion">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        <p><?=$linha['nome']?></p>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="jumbotron jumbotron-fluid">
                                        <div class="col-sm-12">
                                            <div class="row justify-content-center">
                                                <h1 class="display-4"><?=$linha['nome']?></h1>
                                            </div>
                                            <div class="row justify-content-center">
                                                <h6>Jogo: <?php if($linha2 = mysqli_fetch_assoc($dados2)) {     
                                                    echo $linha2['nome'] ;
                                                    }
                                                    ?>
                                                </h6>  
                                               
                                                   
                                            </div>
                                            <div class="row justify-content-center">
                                                <h6>Disciplina: <?php if($linha3 = mysqli_fetch_assoc($dados3)) {     
                                                    echo $linha3['nome'] ;
                                                    }
                                                    ?>
                                                </h6>  
                                            </div>
                                            <div class="row justify-content-center">
                                            <h6>Tema Transversal: <?php if($linha4 = mysqli_fetch_assoc($dados4)) {     
                                                    echo $linha4['nome'] ;
                                                    }
                                                    ?>
                                                </h6>  
                                            </div>
                                            <div class="row justify-content-center">
                                                <h6>Série: <?=$linha['serie']?></h6>
                                            </div>
                                            <div class="row justify-content-center">
                                                <h6>Conteúdo: <?=$linha['conteudo']?></h6>
                                            </div>
                                            <div class="row justify-content-center">
                                                <h6>Tempo de duração: <?=$linha['tempoDuracao']?></h6>
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="row my-5">
                                                <div class="col-sm-4">
                                                    <h2>Objetivos:</h2>
                                                    <p><?=$linha['objetivos']?></p>
                                                </div>
                                                <div class="col-sm-4">
                                                    <h2>Desenvolvimento:</h2>
                                                    <p><?=$linha['desenvolvimento']?></p>
                                                </div>
                                                <div class="col-sm-4">
                                                    <h2>Materiais:</h2>
                                                    <p><?=$linha['materiais']?></p>
                                                    </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <h6>Autor:<?=$linha['autor']?></h6>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <h6>Contato: <?=$linha['contato']?></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
   
        <?php
            }while($linha = mysqli_fetch_assoc($dados));
        ?>

        <br><br><br><br>
 
        <footer class="footer mt-5 py-4 bg-light" id="rodape">
            <div class="col-sm-12">
                <span class="text-muted">&copy 2020</span>
            </div>
        </footer>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



</body>

</html>