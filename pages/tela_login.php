<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Cadastro</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/login.css">

    <!-- Icons -->
    <script src="https://kit.fontawesome.com/561da19351.js" crossorigin="anonymous"></script>
    
</head>
<body>
<!-- Incluindo a navbar na página -->
    <?php require_once("../includes/header.php");?>
    <div class="container mt-3 d-flex flex-column align-items-center">
        <div class="content">
            <form method="post" action="">
                <h4>Seja Bem Vindo</h4>
                <p>
                    <label for="email_cadastro">Email</label>
                    <input name="nome_cadastro" type="text" required="required" placeholder="Ex. contato@contato.com">
                </p>

                <p>
                    <label for="senha_cadastro">Senha</label>
                    <input name="nome_cadastro" type="text" required="required" placeholder="Ex. senha">
                </p>
                
                <div class="d-flex flex-column align-items-center"><button class="btn btn-dark" type="submit">Logar</button></div>
                

                <div class="d-flex flex-row">
                    <p class="me-5">Entrar por:</p>
                    <p>Não Tem Conta?</p>
                </div>
                <div class="d-flex flex-row">
                    <div class="cadastro_icones">
                        <i class="fa-brands fa-facebook"></i>
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-twitter"></i>
                    </div>
                    <a href="../pages/tela_cadastro.php" class="btn btn-dark ms-5">Cadastrar</a>
                </div>

            </form>
        </div>
    </div>

    
</body>
</html>