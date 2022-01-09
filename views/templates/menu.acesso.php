<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/normalize.css">
    <link rel="stylesheet" href="../assets/css/global-style.css">
     <!--FontAwesome Icons -->
     <script src="https://kit.fontawesome.com/2f1b3770e6.js" crossorigin="anonymous"></script>

    <title>Criar Conta</title>

</head>
<body>

<header class="nav-header">
    <nav class="navegation">
        
        <div class="navbar">
            <div class="logo">
                <a href="/" >Busea
                    <!--img src="#" alt="BUSEA"-->
                </a>
            </div>

            <ul class="nav-menu">
                <!-- <li class="nav-item"><a href="/inicio" class="nav-link active-link">Iniciar Sessao</a></li>
                <li class="nav-item"><a href="servico-encomendas.html" class="nav-link">Criar Conta</a></li>
                <li class="nav-item"><a href="servico-encomendas.html" class="nav-link">Logout</a></li>-->
                <?php
                if(isset($_SESSION["codigo_conta"])){
                
                    echo ' Ola ' .$_SESSION["nome_utilisador"]. '!
                    <li class="nav-item"><a href="'. ROOT .'/acesso/logout" class="nav-link">Terminar sessao</a></li>';
                }else{
                    echo '<li class="nav-item"><a href="'. ROOT .'/registar/conta" class="nav-link">Criar Conta</a></li>
                        <li class="nav-item"><a href="'. ROOT .'/acesso/login" class="nav-link">Iniciar Sessao</a></li>
                    ';
                }
            ?>
                
            </ul>

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
        