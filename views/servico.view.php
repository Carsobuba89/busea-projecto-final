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
    
    <title>Nosso Serviços</title>
</head>
<body>

	<header class="nav-header">
        <?php
            require("./views/templates/menu.php");
        ?>
    </header>
  
    <main>
        <div class="container-top-image">
            <div class="content-top-image service-img">
                <div class="bloc-text-top-image">
                    <h1>os serviços que prestamos</h1>
                    <p>Para beneficiar dos nossos serviços crie uma conta de 
                        forma gratuita e segura, depois podes monitorizar as suas encomendas facilmente e tambem vai
                    </p>
                    
                </div>
            </div><!--.agencia-container-->
        </div><!--Final top image agencia-->

        <div class="main-container">
            <div class="header-container">
                <div class="header-content">
                    <h2>Servicos mais relevantes </h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus animi voluptatum quia ipsum! Magni quidem similique architecto, id velit aperiam.</p>
                </div><!--.header-content-->
            </div><!--.header-container-->

            <div class="body-container">
                <div class="body-content-left">

                    <div class="wrap-aside">
                        <img src="../assets/images/img-page/pexels-tima-miroshnichenko-6168999.jpg" alt="" class="responsive-img">
                    </div>
                   
                </div><!--.body-content-left-->

                <div class="body-content-right">
                   <h1> main contente here </h1>
                    
                </div><!--.body-content-right-->
            </div><!--.body-container-->
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