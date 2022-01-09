
        <?php
            require("./views/templates/menu.php");
        ?>

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

        <!-- <section class="follow-up my-sections">
            <div class="follow-up-container">
                <div class="follow-up-div-text">
                    <p>Segue o estado da sua encomenda introduza o numero da referencia: &nbsp;</p>
                </div>
                <div class="follow-up-div-input">
                    <form method="post" action="/seguimentos/estadoEncomenda">
                        <input type="text" id="seguimento" name="seguimento" class="follow-up-input">
                        <button type="submit" class="btn-follow-up" name="seguirEncomenda">Seguir encomenda </button>
                    </form>
                    
                </div>
            </div>
        </section> -->


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

                        <?php foreach($noticias as $key => $value){ ?>

                            <div id="news-bloco1" class="news-body-bloc">
                                <article>
                                    <h3><?= $noticias[$key]["titulo"] ?></h3>
                                    <p><?= $noticias[$key]["conteudo"] ?></p>
                                    <time datetime="2021-07-22"><?= $noticias[$key]["data_criacao"] ?></time>
                                    <a href="/conteudo_details/<?= $noticias[$key]["codigo"] ?>">Ler mais</a>
                                </article>
                            </div><!-- .news-body-bloc-->

                        <?php } ?>    

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

                <?php foreach($infoEncomendas as $key => $value){ 
                        if($infoEncomendas[$key]["codigo"] % 2 == 0){
                            echo '<div class="encomenda-bloco">';
                        }else{
                            echo '<div id="encomenda-reverse" class="encomenda-bloco">';
                        }
                    ?>  
                        <div class="encomenda-img">
                            <img src="../assets/images/img-page/<?= $infoEncomendas[$key]["imagem"] ?>" alt="" class="responsive-img">
                        </div><!--.encomenda-img-->
                        <div class="encomenda-texto">
                            <article>
                                <h3><?= $infoEncomendas[$key]["titulo"] ?></h3>
                                <p>
                                 <?= $infoEncomendas[$key]["conteudo"] ?>
                                </p>
                                <button class="btn-encomenda"><a href="/conteudo_details/<?= $infoEncomendas[$key]["codigo"] ?>">mais detalhes</a></button>
                            </article>
                        </div><!--.encomenda-texto-->
                    </div><!--.encomenda-bloco-->

                <?php } ?>

            
            </div><!--.encomenda-container-->

        </section><!--#encomenda-sections-->
    </main>
    
        <?php
            require("views/templates/footer.php");
        ?>