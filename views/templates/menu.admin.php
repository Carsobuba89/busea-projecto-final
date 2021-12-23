
<nav class="navegation">
    
    <div class="navbar">
        <div class="navbar-left">
            <div class="logo">
                <a href="/" >Busea
                    <!--img src="#" alt="BUSEA"-->
                </a>
            </div>

            <ul class="nav-menu">
                <li class="nav-item"><a href="/encomendas" class="nav-link active-link">Encomendas</a></li>
                <li class="nav-item"><a href="/admin_page/admin_agencia" class="nav-link">Gerir Agencia</a></li> 
                <li class="nav-item"><a href="/" class="nav-link">Gestao de Conteudos</a></li>
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
        