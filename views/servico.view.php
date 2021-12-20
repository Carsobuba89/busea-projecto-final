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
            require("views/templates/menu.php");
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

                    <?php
                        require("views/templates/sidebar_servicos.php");

                    ?>

                </div><!--.body-content-left-->

                <div class="body-content-right">

                    <div class="content-services">

                        <h3>Utilize os nossos serviços do envio especializado.</h3>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos veritatis corporis alias fugit esse dicta blanditiis soluta! Veniam nemo, distinctio itaque blanditiis et iusto! Aperiam ex, excepturi eveniet laborum, amet rem impedit beatae ipsum cupiditate doloremque consequuntur praesentium porro recusandae iste iure, distinctio expedita eos.
                            <img src="https://via.placeholder.com/300x200" alt="">
                        </p>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus tempora facilis repellendus iure doloremque inventore libero eveniet hic magnam obcaecati nostrum illum quos ipsam, nesciunt ducimus. Ducimus aut sunt expedita repellat? Maxime molestiae odit obcaecati!
                        </p>

                    </div><!-- .content-services -->

                    <div class="content-services">

                        <h3>Tipos de envios</h3>

                        <div class="slides-service-container">

                            <div class="slide-service-content">
                                <div class="slide-service-img">
                                     <img src="https://via.placeholder.com/200x120.png" alt="">
                                </div><!-- .slide-service-img -->
                               
                                <div class="slide-service-description">
                                     <h4>Titulo de slides</h4>
                                     <p>
                                         Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id, hic! Lorem ipsum dolor sit amet.
                                     </p>
                                </div><!-- .slide-service -->
                            </div><!-- .slide-service-content -->

                            <div class="slide-service-content">
                                <div class="slide-service-img">
                                     <img src="https://via.placeholder.com/200x120.png" alt="">
                                </div><!-- .slide-service-img -->
                               
                                <div class="slide-service-description">
                                     <h4>Titulo de slides</h4>
                                     <p>
                                         Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id, hic! Lorem ipsum dolor sit amet.
                                     </p>
                                </div><!-- .slide-service -->
                            </div><!-- .slide-service-content -->

                            <div class="slide-service-content">
                                <div class="slide-service-img">
                                     <img src="https://via.placeholder.com/200x120.png" alt="">
                                </div><!-- .slide-service-img -->
                               
                                <div class="slide-service-description">
                                     <h4>Titulo de slides</h4>
                                     <p>
                                         Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id, hic! Lorem ipsum dolor sit amet.
                                     </p>
                                </div><!-- .slide-service -->
                            </div><!-- .slide-service-content -->

                        </div><!-- .slides-service-container -->

                        <div class="content-services">
                            <article>
                                <h3>O que fazer antes de contactar uma agencia</h3>
                                <p>
                                    <img src="https://via.placeholder.com/300x200" alt="">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos veritatis corporis alias fugit esse dicta blanditiis soluta! Veniam nemo, distinctio itaque blanditiis et iusto! Aperiam ex, excepturi eveniet laborum, amet rem impedit beatae ipsum cupiditate doloremque consequuntur praesentium porro recusandae iste iure, distinctio expedita eos.
                                </p>
                            </article>

                            <article>
                                <h3>Saiba como fazer envios frequentes</h3>
                                <p>
                                    <img src="https://via.placeholder.com/300x200" alt="">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos veritatis corporis alias fugit esse dicta blanditiis soluta! Veniam nemo, distinctio itaque blanditiis et iusto! Aperiam ex, excepturi eveniet laborum, amet rem impedit beatae ipsum cupiditate doloremque consequuntur praesentium porro recusandae iste iure, distinctio expedita eos.
                                </p>
                            </article>   
                        </div><!-- .content-services -->
                    </div><!-- .content-services -->                
                </div><!--.body-content-right-->

                
            </div><!--.body-container-->
        </div><!--.main-container-->
    </main>

    <footer>
        <?php
            require("views/templates/footer.php");
        ?>    
    </footer>

    
   <!--  <script src="js/globalScript.js"></script> -->
</body>
</html>