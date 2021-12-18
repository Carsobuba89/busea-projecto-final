
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

        <div class="account">
            <a href="sign-up-login.html"><i class="far fa-user-circle"></i></a> 
        </div>

        <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>

        </div>
    </div><!-- .navbar -->
</nav>
        