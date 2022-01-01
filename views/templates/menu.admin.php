<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/normalize.css">
    <link rel="stylesheet" href="../assets/css/global-style.css">
    <!--Google Fonts Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;1,100&family=Roboto:ital,wght@1,100;1,300;1,400&display=swap" rel="stylesheet">
    <!--FontAwesome Icons -->
    <script src="https://kit.fontawesome.com/2f1b3770e6.js" crossorigin="anonymous"></script>
    <title>Gestao de Encomendas</title>
</head>
<body>

    <header class="nav-header">  

        <nav class="navegation">
            
            <div class="navbar">
                <div class="navbar-left">
                    <div class="logo">
                        <a href="/" >Busea
                            <!--img src="#" alt="BUSEA"-->
                        </a>
                    </div>

                    <ul class="nav-menu">
                        <li class="nav-item"><a href="/admin_encomendas" class="nav-link active-link">Encomendas</a></li>
                        <li class="nav-item"><a href="/admin_agencias/admin_agencia" class="nav-link">Gerir Agencia</a></li> 
                        <li class="nav-item"><a href="/admin_conteudos" class="nav-link">Gerir Conteudos</a></li>
                    </ul>
                </div><!-- .navbar-left -->
            

                <div class="account">
                    <?php
                        if( isset($_SESSION["codigo_conta"]) ){
                        
                            echo '<a> Ola ' .$_SESSION["nome_utilisador"]. '!</a>
                                <a href="'. ROOT .'/acesso/logout">Terminar sessao</a>';
                        }else{
                            echo '<li><a href="'. ROOT .'/registar/conta">Criar Conta</a></li>
                                <li><a href="'. ROOT .'/acesso/login">Iniciar Sessao</a></li>
                            ';
                        }
                    ?>
                </div>

                <!-- <div class="account">
                    <a href="sign-up-login.html"><i class="far fa-user-circle"></i></a> 
                </div> -->

                <div class="hamburger">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>

                </div>
            </div><!-- .navbar -->
        </nav>
    </header>