<!DOCTYPE html>
<html lang="en">
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
    
    <title>As agencias</title>
</head>
<body>

	<header class="nav-header">
        <?php
            require("./views/templates/menu.php");
        ?>
    </header>
  
    <main>
        <div class="container-top-image">
            <div class="content-top-image agencia-img">
                <div class="bloc-text-top-image">
                    <h1>Encontrar uma agencia</h1>
                    <p>Para beneficiar dos nossos serviços crie uma conta de 
                       lorem20 forma gratuita e segura, depois podes monitorizar as suas encomendas facilmente e tambem vai
                    </p>
                    
                </div>
            </div><!--.agencia-container-->
        </div><!--Final top image agencia-->

        <div class="main-container">
            <div class="header-container">
                <div class="header-content">
                    <h2>As agencias que nos fazem confiança </h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Possimus mollitia eveniet repudiandae assumenda vero maiores corporis, dignissimos fugiat saepe velit. ipsum dolor sit amet consectetur adipisicing elit. Possimus animi voluptatum quia ipsum! Magni quidem similique architecto, id velit aperiam.</p>
                </div><!--.header-content-->
            </div><!--.header-container-->

            <div class="agencia-container">
                <div class="agencia-content">
                <h3>As Agencias parceiras em Portugal</h3>
                    <div class="agencia-bloco">
                        <div class="agencia-info">
                            <label> Agencia Bacar Nhabali</label>
                            <address>
                               Avenida Alfredo Dinis Lote N 67 - 1 Direita <br>
                               Vale da Amoreira - Moita 
                               2835-202 - Setubal 
                            </address>
                            <label>bacarnhabali2@gmail.com</label><br>
                            <label>+351 934 343 243</label>
                        </div>
                        <div class="">
                            <img src="https://via.placeholder.com/350x200.png" alt="">
                        </div>
                    </div>
                </div>
                
                <div class="agencia-content">
                    <h3>As Agencias parceiras em Guiné Bissau</h3>
                    <div class="agencia-bloco">
                        <div class="agencia-info">
                            <label>Agencia So Balde Multiservices</label>
                            <address>
                               Rua 75 ao atras do Mercado<br>
                               Bairro Militar - SAB<br>
                               Bissau - Guiné Bissau
                            </address>
                            <label>bacarnhabali2@gmail.com</label><br>
                            <label>+351 934 343 243</label>
                        </div>
                        <div class="">
                            <img src="https://via.placeholder.com/350x200.png" alt="">
                        </div>
                    </div>
                </div>
                
                <div class="agencia-content">
                     <h3>As Agencias parceiras em Angola </h3>
                    <div class="agencia-bloco">
                        <div class="agencia-info">
                            <label> Agencia Bacar Nhabali</label>
                            <address>
                               Avenida Alfredo Dinis Lote N 67 - 1 Direita <br>
                               Vale da Amoreira - Moita 
                               2835-202 - Setubal 
                            </address>
                            <label>bacarnhabali2@gmail.com</label><br>
                            <label>+351 934 343 243</label>
                        </div>
                        <div class="">
                            <img src="https://via.placeholder.com/350x200.png" alt="">
                        </div>
                    </div>
                </div>
                
                <div class="agencia-content">
                    <h3>As Agencias parceiras em Cabo Verde</h3>
                    <div class="agencia-bloco">
                        <div class="agencia-info">
                            <label> Agencia Bacar Nhabali</label>
                            <address>
                               Avenida Alfredo Dinis Lote N 67 - 1 Direita <br>
                               Vale da Amoreira - Moita 
                               2835-202 - Setubal 
                            </address>
                            <label>bacarnhabali2@gmail.com</label><br>
                            <label>+351 934 343 243</label>
                        </div>
                        <div class="">
                            <img src="https://via.placeholder.com/350x200.png" alt="">
                        </div>
                    </div>
                </div>
                

                
            </div><!--.agencia-container-->
        </div><!--.main-container-->
    </main>

    <footer>
        <?php
            require("views/templates/footer.php");
        ?>    
    </footer>

    
    <script src="js/globalScript.js"></script>
</body>
</html>