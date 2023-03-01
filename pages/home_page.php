<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Inicial</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="../css/style.css">

    <!-- Icons -->
    <script src="https://kit.fontawesome.com/561da19351.js" crossorigin="anonymous"></script>

    <style>
        .area1{
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .area2{
            display: flex;
        }
        .area2 a{
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .area2 a h3{
            color: black; 
            margin-bottom: 3vh;
        }
        .area2 a i{
            color: salmon;
            font-size: 50vh;
        }
        .area1 a:hover, .area2 a:hover i{
            opacity: 0.7;
        }
    </style>


</head>
    <body>
            <!-- Incluindo a navbar do arquivo header.php na página -->
        <?php require_once("../includes/header.php");?>
        <div class="container" style="margin-top: 16vh;">

        <!-- Dividindo a tela em duas partes Area1 e Area2 -->
            <div class="row">

                <!-- Area1 -->
                <div class="col-md-5 area1">
                    <h1 style="letter-spacing: 4px;">Venha Transformar Sua <br> Ideia em Realidade</h1>
                    <p>Se inspire em centenas de modelos e crie roupas <br> unicas para o seu estilo</p>
                    <a href="../pages/tela_publicacao.php" class="btn rounded-pill text-center" style="background-color: salmon; width: 15vw; height: 6vh;">Comece a criar</a> <br>
                    <a href="../pages/tela_explorar.php" class="btn rounded-pill text-center" style="background-color: grey; width: 10vw; height: 4vh; padding: 0;">Explore ideias</a>
                </div>

                <!-- Area2 -->
                <div class="col-md-5 area2">
                    <a href="../pages/tela_publicacao.php" class="text-decoration-none" style="margin: 10vh 5vw 0vh 5vw;">
                        <h3>Criar</h3>
                        <i class="fa-solid fa-child-dress"></i>
                    </a>
                    <a href="../pages/tela_explorar.php" class="text-decoration-none">
                        <h3>Explore</h3>
                        <i class="fa-solid fa-person-pregnant"></i>
                    </a>
                </div>
            </div>
        </div>
    </body>
</html>