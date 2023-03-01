    <header>
        <!-- Criando a Navbar -->
        <nav class="navbar">
            <!-- Criando links com icones na Navbar -->
            <div class="nav_icons">
                <ul>
                    <li><a href="../pages/home_page.php"><i class="fa-solid fa-house"></i></a></li>
                    <li><a href="../pages/tela_explorar.php"><i class="fa-solid fa-tag"></i></a></li>
                    <li><a href="../pages/tela_saias.php"><i class="fa-solid fa-palette"></i></a></li>
                </ul>
            </div>
            <!-- Criando a barra de pesquisa Navbar -->
            <div class="nav_search form-group">
                <span class="fa fa-search form-control-feedback"></span>
                <input type="text" class="form-control shadow-none" placeholder="Search">
            </div>
            <!-- Criando uma div especifica pra parte direita da Navbar -->
            <div class="nav_right">
                <ul>
                    <!-- Criando botões de Login e R -->
                    <li class="nav_user" id="register">
                        <a href="../pages/tela_login.php    " class="ms-2 btn border-none shadow-none btn-c25e84">Entrar</a>
                        <a href="../pages/tela_cadastro.php" class="ms-2 btn shadow-none btn-fcd074">Cadastre-se</a>
                    </li>
                    <!-- Criando uma imagem com dropdown -->
                    <li class="dd_main" id="dropdown">
                        <img src="../img/user_icon.png">
                        <div class="dd_menu">
                            <!-- Implementando os itens do dropdown -->
                            <div class="dd_items">
                                <ul>
                                    <li><a href="../pages/tela_perfil.php">Perfil</a></li>
                                    <li><a href="">Ajuda</a></li>
                                    <li><a href="">Configurações</a></li>
                                    <li><a>Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <script>
        //Definindo variaveis
        /** 
         * isRegistered = check pra saber se o usuario está cadastrado
         * register = variável armazenando os botôes de cadastro e login da navbar
         * dropdown =  variável armazenando o dropdown da navbar
         * 
         * Neste script estamos configurando o dropdown e um check pra saber se o usuario tem ou não uma conta existente
        */
        var isRegistered = true;
        let register = document.getElementById("register");
        let dropdown = document.getElementById("dropdown");

        if (isRegistered == false) {
            register.style.display="block";
            dropdown.style.display="none";
        }
        else{
            register.style.display="none";
            dropdown.style.display="block";
        }
    
        dropdown.addEventListener("click", function(){
            this.classList.toggle("active");
        })
    </script>