<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <!--meta http-equiv="X-UA-Compatible" content="IE=edge"-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/normalize.css">
    <link rel="stylesheet" href="../assets/css/global-style.css">
    <!--Google Fonts Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;1,100&family=Roboto:ital,wght@1,100;1,300;1,400&display=swap" rel="stylesheet">
    <!--FontAwesome Icons -->
    <script src="https://kit.fontawesome.com/2f1b3770e6.js" crossorigin="anonymous"></script>
    
    <title>Busea</title>
</head>
<body>

    <div class="global-container">

    <header class="nav-header">
        <?php
            require("./views/templates/menu.php");
        ?>
    </header>

    <main>  
        <div id="slides">
            <div class="container-button-arrows">
                <button class="slide-button slide-button-previous">
                    <!-- <span id="inferior" class="news-arrow">&lt;</span> -->
                    <i class="fas fa-angle-left"></i>
                </button>
                <button class="slide-button slide-button-next">
                <!--  <span id="superior" class="news-arrow">&gt;</span> -->
                    <i class="fas fa-angle-right"></i>
                </button>
            </div><!--.container-arrows-->

            <div class="container-slides">

                <?php foreach($slides as $key => $value) { ?>
                <div class="slide">

                    <img src="../assets/images/slides-img/<?= $slides[$key]["imagem"] ?>" class="responsive-img" alt="slides imagem">
                    
                    <div class="slide-content"> 

                        <div class="slide-text-bloc">
                            <article>
                                <h1><?= $slides[$key]["titulo"] ?></h1>
                                <p>
                                    <?= $slides[$key]["conteudo"] ?>
                                </p>
                                <button class="btn-slide">
                                    <a href="/conteudo_details/<?= $slides[$key]["codigo"] ?>" target="_blank">Saber mais</a>
                                </button>
                            </article>
                            
                        </div><!--.slide-text-bloc-->
                        
                    </div><!--.slide-content .slide-content-1-->
                </div><!--.slide-->
                <?php } ?> 
                
            </div><!--.container-slides-->
                
        </div><!--#slide-->

        <section class="follow-up my-sections">
            <div class="follow-up-container">
                <div class="follow-up-div-text">
                    <p>Segue o estado da sua encomenda introduza o numero da referencia: &nbsp;</p>
                </div>
                <div class="follow-up-div-input">
                    <form method="post" action="<?php echo ROOT; ?>/seguimentos/estadoEncomenda">
                        <input type="text" id="seguimento" name="seguimento" class="follow-up-input">
                        <button type="submit" class="btn-follow-up" name="seguirEncomenda">Seguir encomenda </button>
                    </form>
                    
                </div>
            </div>
        </section>


        <section class="info-agency my-sections">
            <div class="info-agency-container">
                <div class="info-agency-header">
                    
                    <div class="info-agency-header-bloc">
                        <h2>Agencias que nos faz confiança</h2>
                        <p>Saepe, illum consequuntur magnam molestiae aspernatur id laudantium vel minus ex vero ullam, tenetur doloremque sunt quod esse error ducimus voluptas similique nesciunt laboriosam! Corporis sint repudiandae velit?</p>
                    </div><!-- .info-agency-header-bloc-->
                </div><!-- .info-agency-header-->

                <div class="info-agency-body">
                    <?php foreach($agencias as $key => $value){ ?>
                    <div id="bloc1" class="info-agency-bloc">
                        <div class="info-agency-text">
                            <h3><?= $agencias[$key]["nome_agencia"] ?></h3>
                            <p>
                                <?= $agencias[$key]["descricao_agencia"] ?>
                            </p>
                            <button type="button" class="btn-info-agency"><a href="/agencias/<?= $agencias[$key]["codigo_agencia"] ?>">Contactar agencia</a></button>
                        </div><!-- .info-agency-text-->
                        <div class="info-agency-img">
                            <img src="../assets/images/img-agencias/<?= $agencias[$key]["imagem_agencia"] ?>" alt="imagem da agencia" class="responsive-img">
                        </div><!-- .info-agency-img-->
            
                    </div><!-- .info-agency-wrap-->
                    <?php } ?>    
                   

                </div><!-- .info-agency-body-->

            </div><!-- .info-agency-container-->

        </section><!-- SECTION AGENCY-->

        <section class="news my-sections">
            <div class="news-container">
                <div class="news-header">
                    <div class="news-title">
                        <h2>Consulte as Novidades das agencias</h2>
                    </div>
                    <div class="wrap-arrow">
                        <span id="btnPrecedente" class="news-arrow">&lt;</span>
                        <span id="btnSeguinte" class="news-arrow seguinte">&gt;</span>
                    </div>
                </div><!-- .news-header -->

                <div class="news-body">
                    <div class="news-body-carousel">
                        
                        <div id="news-bloco1" class="news-body-bloc">
                            <article>
                                <h3>Cuidado com Cuminicaçoes Fraudulentas</h3>
                                <p>Esteja atento a SMS ou e-mails que se identificam como a pedir pagamentos adicionais ou a convidar o destinatário a clicar numa ligação para seguir um pacote. Se a mensagem, a marca, o logótipo, a ligação ou outro elemento lhe parecer fraudulento, não partilhe quaisquer informações sensíveis, como dados de cartões de crédito. Em caso de dúvida, contacte a UPS.</p>
                                <time datetime="2021-07-22">13 de Octobro de 2020</time>
                                <a href="#">Ler mais</a>
                            </article>
                        </div><!-- .news-body-bloc-->
                        <div id="news-bloco2" class="news-body-bloc">
                            <article>
                                <h3>Atualização de Taxas de Época Especial</h3>
                                <p>Já estão disponíveis informações, incluindo novas Taxas deque estarão em vigor entre 4 de Julho de 2021 e permanecerão em vigor até nova notificação. sendo da UPS a pedir pagamentos adicionais ou a convidar o destinatário a clicar numa ligação para seguir um pacote. Se a mensagem, a marca, o logótipo, a ligação ou outro elemento lhe parecer fraudulento, não partilhe.</p>
                                <time datetime="2021-07-22">22 de Junho de 2021</time>
                                <a href="#">Ler mais</a>
                            </article>
                        </div><!-- .news-body-bloc-->
                        <div id="news-bloco3" class="news-body-bloc">
                            <article>
                                <h3>Novos Guias de Tarifas e Serviços</h3>
                                <p>A partir do dia 1 de Novembro de 2020 e até 16 de Janeiro de, a Busea irá 
                                    implementar uma taxa de Temporada Alta em vários países da Europa e Africa. As taxas 
                                    aplicar-se-ão apenas encomendas que cumpram as especificações para Pacotes
                                    de Grandes Dimensões, Acima dos Limites Máximos, bem como custos bem como custos bem como custos de Manuseamento
                                </p>
                                <time datetime="2021-07-22">09 de Março de 2021</time>
                                <a href="#">Ler mais</a>
                            </article>
                        </div><!-- .news-body-bloc-->
                        <div id="news-bloco4" class="news-body-bloc">
                            <article>
                                <h3>2021 Guias de Tarifas e Serviços</h3>
                                <p>Esteja atento a SMS ou e-mails que se identificam como a pedir pagamentos adicionais ou a convidar o destinatário a clicar numa ligação para seguir um pacote. Se a mensagem, a marca, o logótipo, a ligação ou outro elemento lhe parecer fraudulento, não partilhe quaisquer informações sensíveis, como dados de cartões de crédito. Em caso de dúvida, contacte a UPS.</p>
                                <time datetime="2021-07-22">13 de Octobro de 2020</time>
                                <a href="#">Ler mais</a>
                            </article>
                        </div><!-- .news-body-bloc-->
                        <div id="news-bloco5" class="news-body-bloc">
                            <article>
                                <h3>Prepare-se para as férias com a Busea</h3>
                                <p>Já estão disponíveis informações, incluindo novas Taxas de Época Especial que estarão em vigor entre 4 de Julho de 2021 e permanecerão em vigor até nova notificação. sendo da UPS a pedir pagamentos adicionais ou a convidar o destinatário a clicar numa ligação para seguir um pacote. Se a mensagem, a marca, o logótipo, a ligação ou outro elemento lhe parecer fraudulento, não partilhe.</p>
                                <time datetime="2021-07-22">22 de Junho de 2021</time>
                                <a href="#">Ler mais</a>
                            </article>
                        </div><!-- .news-body-bloc-->
                        <div id="news-bloco6" class="news-body-bloc">
                            <article>
                                <h3>Garantia de Reembolso Busea implementada</h3>
                                <p>A partir do dia 1 de Novembro de 2020 e até 16 de Janeiro de, a Busea irá 
                                    implementar uma taxa de Temporada Alta em vários países da Europa e Africa. As taxas 
                                    aplicar-se-ão apenas encomendas que cumpram as especificações para Pacotes
                                    de Grandes Dimensões, Acima dos Limites Máximos, bem como custos bem como custos bem como custos de Manuseamento
                                </p>
                                <time datetime="2021-07-22">09 de Março de 2021</time>
                                <a href="#">Ler mais</a>
                            </article>
                        </div><!-- .news-body-bloc-->

                    </div><!-- .news-body-carousel -->
                </div><!-- .news-body-->


            </div><!-- .news-container-->
        </section><!-- #news-sections-->

        <section id="encomenda-info" class="my-sections">
            <div class="encomenda-container">
                <div class="encomenda-header">
                    <div class="encomenda-header-bloc">
                        <h2>Informaçoes Importantes</h2>
                        <p>Saepe, illum consequu aspernatur id laudantium vel minus ex vero ullam, tenetur doloremque sunt quod esse error ducimus voluptas similique nesciunt laboriosam! Corporis sint repudiandae velit?</p>
                    </div><!-- .info-agency-header-bloc-->
                </div><!--.encomenda-header-->

                <div class="encomenda-bloco">
                    <div class="encomenda-img">
                        <img src="../assets/images/img-page/encomendas.jpg" alt="" class="responsive-img">
                    </div><!--.encomenda-img-->
                    <div class="encomenda-texto">
                        <article>
                            <h3>Como enviar uma encomenda</h3>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique aliquam 
                                impedit odio quae tempora quam soluta ea consequuntur possimus quis debitis, 
                                repudiandae! Corrupti dignissimos molestias iure, minus impedit nam odio 
                                architecto eius consectetur sequi pariatur voluptatibus rem optio?</p>
                            <button class="btn-encomenda"><a href="servico-encomendas.html">mais detalhes</a></button>
                        </article>
                    </div><!--.encomenda-texto-->
                </div><!--.encomenda-bloco-->

                <div id="encomenda-reverse" class="encomenda-bloco">
                    <div class="encomenda-img">
                        <img src="../assets/images/img-page/agencia2.jpg" alt="" class="responsive-img">
                    </div><!--.encomenda-img-->
                    <div class="encomenda-texto">
                        <article>
                            <h3>Como receber uma encomenda</h3>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique aliquam 
                                impedit odio quae tempora quam soluta ea consequuntur possimus quis debitis, 
                                repudiandae! Corrupti dignissimos molestias iure, minus impedit nam odio 
                                architecto eius consectetur sequi pariatur voluptatibus rem optio?</p>
                            <button class="btn-encomenda"><a href="servico-encomendas.html">mais detalhes</a></button>
                        </article>
                    </div><!--.encomenda-texto-->
                </div><!--.encomenda-bloco-->
            </div><!--.encomenda-container-->

        </section><!--#encomenda-sections-->
    </main>
    <footer>
        <?php
            require("views/templates/footer.php");
        ?>
            
    </footer>
 </div><!-- .global-container -->

        <script src="../assets/js/globalScript.js"></script> 
</body>
</html>