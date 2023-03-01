<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Exploração</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="../css/style.css">

    <!-- Icons -->
    <script src="https://kit.fontawesome.com/561da19351.js" crossorigin="anonymous"></script>

</head>
<body>
<!-- Incluindo a navbar na página -->
    <?php require_once("../includes/header.php");?>
    <div class="container mt-5">
        <div class="d-flex flex-column align-items-center">
            <h1>O melhor do ebaA</h1>
            <p>os projetos no destaque de hoje</p>
        </div>
        <div class="row">

        <?php for ($i=0; $i < 8; $i++) {?>
            <div class="col-md-3 mb-5">
                <a href="" class="text-decoration-none" style="color: black;">
                    <div class="shadow-lg card card-link">
                        <img src="" alt="Molde" class="card-img-top" style="height: 300px;">
                        <div class="card-footer d-inline-flex justify-content-between">
                            <!-- Usuario -->
                            <div class="user d-inline-flex">    
                                <img src="../img/user_icon.png" alt="" style="width: 26px; height: 26px;">
                                <p class="ms-1">lorem ipsum</p>
                            </div>

                            <!-- Favoritos -->
                            <div class="d-inline-flex">
                                <i class="fa-regular fa-heart" style="margin-top: 0.7vh;"></i>
                                <p class="ms-1">123</p>
                            </div>    
                        </div>
                    </div>
                </a>
            </div>
        <?php } ?>

        </div>
    </div>
</body>
</html>