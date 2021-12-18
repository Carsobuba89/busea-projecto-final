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
    
    <title>Seguimento de encomendas</title>
</head>
<body>

    
	
	<header class="nav-header">
        <?php
            require("./views/templates/menu.php");
        ?>
    </header>

        
  

    <main>
        <div class="container-top-image">
            <div class="content-top-image seguimento-img">
                <div class="bloc-text-top-image">
                    <h1>Seguimento da sua encomenda</h1>
                    <p>Para beneficiar dos nossos serviços crie uma conta de 
                        forma gratuita e segura, depois podes monitorizar as suas encomendas facilmente e tambem vai
                    </p>
                    
                </div>
            </div><!--.agencia-container-->
        </div><!--Final top image agencia-->

        <div class="main-container">
            <div class="header-container">
                <div class="header-content">
                    <h2>Seguimento de uma encomenda</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus animi voluptatum quia ipsum! Magni quidem similique architecto, id velit aperiam.</p>
                </div><!--.header-content-->
            </div><!--.header-container-->

            <div class="body-container">
                <div class="body-content-left">

                    <div class="wrap-aside">
                        <img src="../assets/images/img-page/pexels-kindel-media-6868280.jpg" alt="" class="responsive-img">
                    </div>
                   
                </div><!--.body-content-left-->

                <div class="body-content-right">

                <div class="card-container">
                    <div class="header-card">
                        <h2>Seguir</h2>
                        <a href="#">Ajuda ?</a>
                    </div><!--.header-card-->
    
                    <div class="body-card">
                        <div class="form-request">
                            <form action="">
                                <div class="form-group-card">

                                    <input type="search" name="numero-referncia" id="numReferencia" aria-label="Search through site content"
                                     pattern="[A-z]{2}[0-9]{4}" class="num-referencia" placeholder="Entra referencia correcta AW2341" 
                                     required size="35">

                                    <button type="button" class="btn-seguir">Encontrar</button>

                                </div><!--.form-group-card-->
                                <span class="ref-errado">Campo Vazio, entra os dados correctamente</span>
                                <span class="ref-errado-1">Referencia errada, verifica os dados e prencha o campo correctamente</span>
                            </form>
                        </div><!--.form-header-->
                       
                        <div class="form-reponse ">
                            <form action="">
    
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Referencia</th>
                                           <!--  <th>Descriçao</th> -->
                                            <th>Proveniencia</th>
                                            <th>Destino</th>
                                            <th>Estado</th>
                                            <th>Mais</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>AW2341</td>
                                            <!-- <td>Telemovel Galaxi S21</td> -->
                                            <td>Lisboa</td>
                                            <td>Bissau</td>
                                            <td>Nao enviado</td>
                                            <td><em><a href="">Detalhes</a> </em></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>
                        </div><!--.form-reponse-->
                    </div><!--.body-card-->
                </div><!--.card-container-->

                <div class="info-seguimento">
                    <article>
                        <h2>Soluções de Seguimento Perfeitas</h2>
                        <p>Quer se tratem de 10 violinos para uma loja de música local ou 10 000 vacinas para uma clínica estrangeira, esse pacote tem muitas implicações. Mas as informações que necessita sobre o estado para gerir esses dois envios são completamente diferentes.</p>
                        <p>Foi por esse motivo que desenvolvemos uma gama de ferramentas de seguimento que lhe dão precisamente as informações que necessita, onde e quando as necessitar. Assim, pode reencaminhar esses violinos para chegarem à escola a tempo do primeiro dia de aulas. Ou estimar a entrega desse medicamento que salva vidas para que a clínica possa programar o pessoal.</p>
                    </article>
                </div>
                    
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