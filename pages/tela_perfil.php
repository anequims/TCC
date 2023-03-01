<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Perfil</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="../css/style.css">

    <!-- Icons -->
    <script src="https://kit.fontawesome.com/561da19351.js" crossorigin="anonymous"></script>

    <style>
        
        /* Botão de Criação */
        .create-btn{
            display: block; /* Hidden by default */
            position: fixed; /* Fixed/sticky position */
            color: #C25E84;
            background-color: transparent;
            bottom: 20px; /* Place the button at the bottom of the page */
            right: 30px; /* Place the button 30px from the right */
            z-index: 3; /* Make sure it does not overlap */
            border-radius: 10px; /* Rounded corners */
            font-size: 80px;
        }
        .create-btn:hover{
            color: #FCD074;
        }
        .portfolio{
            font-family: 'Tommy'; font-size:3.5vw;
        }
        .card{
            height: 50vh; width: 240px;
        }
        .sidebar{
            border-right: 5px solid rgba(117, 117, 117, 0.404);
        }

      </style>

</head>
<body>
    <!-- Incluindo a navbar na página -->
<?php require_once("../includes/header.php");?>
<!-- Corpo da pagina -->
        <div class="container-fluid">
            <div class="row">
            <!-- Informações do Perfil -->
                <div class="col-md-3 p-5 sidebar">

                    <div class="row d-flex justify-content-center">
                        <img src="../img/linniê_logo_TCC_-_VERSÃO_3.png" alt="foto de Perfil inteira" style="width: 16vw;"> 
                    </div>

                    <div class="row d-flex justify-content-center">
                        <a href="../pages/tela_editar_perfil.php" class="btn btn-fcd074 mb-4 fs-5" style="width: 14vw;">Editar Perfil</a>
                    </div>

                    <div class="row d-flex justify-content-center">
                        <p class="fs-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit adipisci dolores, quam ab assumenda magni, consequatur corporis nihil accusantium dignissimos accusamus reiciendis provident commodi cum quod facere molestias aliquam cupiditate?</p>
                    </div>
                    <div class="row">
                        <img src="../img/máquina de costura simples simples simples.png" alt="">
                    </div>
                </div>
                <!-- Área de Porfólio -->
                <div class="col-md-9 p-5">
                    <div class="row p-3">
                        <!-- Projetos -->
                        <h1 class="ms-5 mb-5 text-center portfolio">Portfólio</h1>

                        <!-- Cards representando os projetos -->
                        <?php for ($i=0; $i < 12; $i++) {?>
                        <div class="col-md-4 mb-5">
                            <a href="">
                                <div class="shadow-lg card card-link"><img src="" alt=""></div>
                            </a>
                        </div>
                        <?php }?>
                    </div>
                </div>

            </div>
        </div>
        <a href="../pages/tela_publicacao.php" class="create-btn"><i class="fa-solid fa-circle-plus"></i></a>

    
    <!-- Option 1: Bootstrap Bundle with Popper-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>