<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/normalize.css">
    <link rel="stylesheet" href="../assets/css/global-style.css">
    
     <!--Google Fonts styles-->
     <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;1,100&family=Roboto:ital,wght@1,100;1,300;1,400&display=swap" rel="stylesheet">

     <!--FontAwesome Icons -->
     <script src="https://kit.fontawesome.com/2f1b3770e6.js" crossorigin="anonymous"></script>
    <title>Iniciar Sessao </title>
</head>
<body>
<header class="nav-header">
    <?php
        if(isset($message)){
            echo '<p role="alert">'.$message.'</p>';
        }

        require("views/templates/menu.acesso.php");
    ?>
</header>

  

    <main>
        <div class="main-container">
            <div class="header-container-sign">
                <div class="header-content">
                    <article>
                        <h1>Iniciar a Sessao</h1>
                        <p>Entra o nome de utilisador e a palavra passe para aceder as suas encomendas, todos os campos sao obrigatorios uptatum quia ipsum! Magn, id velit aperiam.</p>
                    </article>
                </div><!--.header-content-->
                      
            </div><!--.header-container-->
        
            <div class="body-container-sign" >
                <div class="body content">
                   <!--  <div class="btn-sign-up-wrap">
                        <button type="button" class="btn btn-login"> Faça o login </button>
                        <button type="button" class="btn btn-registo ">Registar-se </button>
                    </div> -->

                    <div class="container-login-form">
                        <div class="content-login-form">
                            <form method="post" action="<?php echo ROOT; ?>/acesso/login">
                                <h3>Inicio de Sessao</h3>
        
                                <div class="form-group">
                                    <div class="col-label">
                                        <label for="username">Nome de utilizador</label>
                                    </div><!--.col-label-->
                                    <div class="col-input">
                                        <input type="text" id="username" name="username" placeholder="carsobuba12" minlength="6" maxlength="30" required>
                                    </div><!--.col-input-->
                                        <span class="erocampoe"></span> 
                                </div><!--.form-group-->

                                <div class="form-group">
                                    <div class="col-label">
                                        <label for="password">Palavra-passe</label>
                                    </div><!--.col-label-->
                                    <div class="col-input">
                                        <input type="password" id="password" name="password" minlength="8" maxlength="1000" required>
                                    </div><!--.col-input-->
                                    <span class="erocampop">Este Campo e obrigatorio deve conter pelo menos um numero</span>
                                </div><!--.form-group-->
        
                                <p>Esqueceste da palavra passe ou de login ? <a href="#" class="blue">Recupera o agora</a></p>
                                <div class="btn-sign-up-wrap">
                                <button type="submit" class="btn-iniciar-sessao" name="send">Iniciar Sessao</button>
                                </div>
                            </form>

                        </div>
                    </div><!--.login-form-->

                   
               

                </div><!--body-content-->
            </div><!--.body-container-->
        </div><!--.main-container-->
        <hr>
        

    </main>

   
    <!-- <script src="js/globalScript.js"></script> 
    <script src="js/loginSignUp.js"></script> -->
</body>
</html>