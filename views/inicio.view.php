<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <!--meta http-equiv="X-UA-Compatible" content="IE=edge"-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/normalize.css">
    <link rel="stylesheet" href="../assets/css/global-style.css">
    <!--link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;1,100&family=Roboto:ital,wght@1,100;1,300;1,400&display=swap" rel="stylesheet"-->

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

                <div class="slide">
                    <div class="slide-content slide-content-1">
                        <div class="slide-text-bloc">
                            <article>
                                <h1>Cria a sua conta agora</h1>
                                <p>
                                    Para beneficiar dos nossos serviços crie uma conta de 
                                    forma gratuita e segura, depois podes monitorizar as suas encomendas facilmente e tambem vai puder fazer seguimento de estado das encomendas.
                                </p>
                                <button class="btn-slide">
                                    <a href="sign-up-login.html" target="_blank">Saber mais</a>
                                </button>
                            </article>
                            
                        </div><!--.slide-text-bloc-->
                    </div><!--.slide-content .slide-content-1-->
                </div><!--.slide-->
                <div class="slide">
                    <div class="slide-content slide-content-2">
                        <div class="slide-text-bloc">
                            <article>
                                <h1>Faça seguimento da sua encomenda</h1>
                                <p>
                                    Para beneficiar dos nossos serviços crie uma conta de 
                                    forma gratuita e segura, depois podes monitorizar as suas encomendas facilmente e tambem vai puder fazer seguimento de estado das encomendas,  
                                    venha juntar.
                                </p>
                                <button class="btn-slide">
                                     <a href="seguimento-encomendas.html" target="_blank">Saber mais</a>
                                </button>
                            </article>
                            
                        </div><!--.slide-text-bloc-->
                    </div><!--.slide-content .slide-content-1-->
                </div><!--.slide-->
                <div class="slide">
                    <div class="slide-content slide-content-3">
                        <div class="slide-text-bloc">
                            <article>
                            <h1>Quer saber quanto custa um envio</h1>
                            <p>
                                Para beneficiar dos nossos serviços crie uma conta de 
                                forma gratuita e segura, depois podes monitorizar as suas encomendas facilmente e tambem vai puder fazer seguimento de estado das encomendas,  
                                venha juntar.
                            </p>
                            <button class="btn-slide">
                                 <a href="simular-encomendas.html" target="_blank">Saber mais</a>
                            </button>
                            </article>
                            
                        </div><!--.slide-text-bloc-->
                    </div><!--.slide-content .slide-content-1-->
                </div><!--.slide-->
                
            </div><!--.container-slides-->
                
        </div><!--#slide-->

        <section class="follow-up my-sections">
            <div class="follow-up-container">
                <div class="follow-up-div-text">
                    <p>Segue o estado da sua encomenda introduza o numero da referencia: &nbsp;</p>
                </div>
                <div class="follow-up-div-input">
                    <input type="text" id="seguimento" name="seguimento" class="follow-up-input">
                    <button type="button" class="btn-follow-up">Seguir</button>
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

                    <div id="bloc1" class="info-agency-bloc">
                        <div class="info-agency-text">
                            <h3>Agencia Bacar Nhabali</h3>
                            <p>
                                Agencia de bacar Nhabali situa se na Baixa da Banheira ao lado das Fontainhas Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi porro molestiae illum 
                                vero reprehenderit suscipit.
                            </p>
                            <button type="button" class="btn-info-agency">Contactar Bacar</button>
                        </div><!-- .info-agency-text-->
                        <div class="info-agency-img">
                            <a href="">
                                <img src="../assets/images/img-page/agency1.jpg" alt="" class="responsive-img">
                            </a>
                        </div><!-- .info-agency-img-->
            
                    </div><!-- .info-agency-wrap-->
            
                    <div id="bloc2" class="info-agency-bloc">
                        <div class="info-agency-text">
                            <h3>Agencia Joao Sanca</h3>
                            <p>
                                Agencia de bacar Nhabali situa se na Baixa da Banheira ao lado das Fontainhas Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi porro molestiae illum 
                                vero reprehenderit suscipit.
                            </p>
                            <button type="button" class="btn-info-agency">Contactar Joao</button>
                        </div><!-- .info-agency-text-->
                        <div class="info-agency-img">
                            <a href="">
                                <img src="../assets/images/img-page/pexels-craig-adderley-1543924.jpg" alt="" class="responsive-img">
                            </a>
                        
                        </div><!-- .info-agency-img-->
            
                    </div><!-- .info-agency-wrap-->
            
                    <div id="bloc3" class="info-agency-bloc">
                        <div class="info-agency-text">
                            <h3>Agencia Babundan Vaz</h3>
                            <p>
                                Babundan Monteiro agencia situa na Baixa da Banheira ao lado das Fontainhas Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi porro molestiae illum 
                                vero reprehenderit suscipit.
                            </p>
                            <button class="btn-info-agency">Contactar Babundan</button>
                        </div><!-- .info-agency-text-->
                        <div class="info-agency-img">
                            <a href="">
                                <img src="../assets/images/img-page/agency5.jpg" alt="" class="responsive-img">
                            </a>
                        </div><!-- .info-agency-img-->
            
                    </div><!-- .info-agency-wrap-->

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

        <script src="/assets/js/globalScript.js"></script> 
</body>
</html>