<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de saias</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/saias.css">

    <!-- Icons -->
    <script src="https://kit.fontawesome.com/561da19351.js" crossorigin="anonymous"></script>
</head>
<body>
<!-- Incluindo a navbar na página -->
    <?php require_once("../includes/header.php");?>
    
    <div class="container" style="padding: 75px 20px;">
        <div class="row">
            <div class="col-md-5">
                <button class="modelos" onclick="viewModels()"><h2>Modelos de Saia<i class="fa-solid fa-chevron-down mx-2" id="icon"></i></h2></button>
                <select class="form-select saias shadow-none" id="models" multiple>
                    <option selected>Saia Circular</option>
                    <option>Saia Semi Circular</option>
                    <option>Saia Tres Quartos</option>
                </select>
                
                <img src="../img/fundp.png" alt="fundo" style="width: 30vw;">
                <script>
                    var models = document.getElementById('models');
                    var icon = document.getElementById('icon');
                    function viewModels(){
                        if (models.style.visibility === 'hidden') {
                            models.style.visibility = 'visible';
                            models.style.animation = 'showEffect 1s';
                            icon.style.animation = 'giro 0.2s';
                        } else {
                            models.style.visibility = 'hidden';
                            models.style.animation = 'hiddenEffect 1s';
                            icon.style.animation = 'igiro 0.2s';
                        }
                    }
                </script>
            </div>
            <div class="col-md-6">
                <form class=" d-flex flex-column align-self-start  align-items-center" action="" method="post">
                    <h3 class="mb-4">Centimetros ou polegadas?</h3>
                    <div class="mb-5"> 
                        <div class="form-check form-check-inline ">
                            <input class="btn-check" type="checkbox" id="check-1" value="cm" checked>
                            <label class="btn btn-c25e84 shadow-none" for="check-1">cm</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="btn-check" type="checkbox" id="check-2" value="in">
                            <label class="btn btn-fcd074 shadow-none" for="check-2">in</label>
                        </div>
                    </div>
                    <h3>Medida da cintura</h3>
                    <div class="d-flex mb-5">
                        <input class="form-control mx-3 shadow-none" type="text">
                        <button class="btn btn-c25e84 shadow-none" type="submit">Enviar</button>
                    </div>
                    <h3>Medida de centimetro</h3>
                    <div class="d-flex mb-5">
                        <input class="form-control mx-3 shadow-none" type="text">
                        <button class="btn btn-fcd074 shadow-none" type="submit">Enviar</button>
                    </div>
                </form>
            </div>


        </div>
    </div>

</body>
</html>