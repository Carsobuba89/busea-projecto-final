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
        <?php
            require("views/templates/menu.admin.php");
        ?>
    </header>
    <div >
        <?php
            if(isset($message)){
                echo '<p role="alert">'.$message.'</p>';
            }
        ?>
    </div>
    <div class="main-container">
       <div class="header-container">
            <div class="header-content">
                <h2>Painel de administraçao das encomendas</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab explicabo neque iusto fuga officia animi Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab explicabo neque iusto fuga officia animi iste unde, minus vel veritatis!
                </p> 
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, earum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, earum.
                </p>
            </div><!--.header-content-->
       </div><!--.header-container-->

        <div class="body-container-admin_encomendas">

            <h1>Painel de Monotorizaçao das Encomendas</h1>

        </div><!--.body-container-admin -->

    </div><!--.main-container-->

</body>
</html>