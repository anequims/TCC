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
    <link rel="stylesheet" href="../css/home.css">

    <!-- Icons -->
    <script src="https://kit.fontawesome.com/561da19351.js" crossorigin="anonymous"></script>

</head>
    <body>
            <!-- Incluindo a navbar do arquivo header.php na página -->
        <?php require_once("../includes/header.php");?>
        <div class="container" style="padding: 16vh 3vw 3vh 3vw;">

        <!-- Dividindo a tela em duas partes Area1 e Area2 -->
            <div class="row">

                <!-- Area1 -->
                <div class="col-md-6 area1">
                    <div class="a1-titulo">
                        <h1>
                            <div class="d-flex">
                                <span class="mx-3">Venha</span>
                                <span style="color: #C25E84;">Transformar </span>
                            </div>
                            <div class="d-flex">
                                <span class="mx-3"> Sua  Ideia em </span>
                                <span style="color: #C25E84;">Realidade</span>
                            </div>
                        </h1>
                    </div>
                    <div class="a1-btn">
                        <a href="../pages/tela_publicacao.php" class="btn text-center btn-c25e84 shadow-none" style="width: 15vw; height: 6vh; margin-bottom:5px;">Comece a criar</a> <br>
                        <a href="../pages/tela_explorar.php" class="btn text-center btn-fcd074 shadow-none" style="width: 10vw; height: 4vh; padding: 0;">Explore ideias</a>
                    </div>
                </div>

                <!-- Area2 -->
                <div class="col-md-6 area2">
                    <a href="../pages/tela_publicacao.php" class="text-decoration-none" style="margin-top: 10vh">
                        <h3>Criar</h3>
                        <img src="../img/linniê_logo_TCC_-_VERSÃO_3.png" alt="LINNIEEEEEEEEEEEEEEEEE">
                    </a>
                    <a href="../pages/tela_explorar.php" class="text-decoration-none">
                        <h3>Explore</h3>
                        <img src="../img/linniê_logo_TCC_-_CROCHÊ_VERSÃO_2.png" alt="LINNIEEEEEEEEEEEEEEEEE">
                    </a>
                </div>
            </div>
        </div>
    </body>
</html>