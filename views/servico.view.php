
        <?php
            require("views/templates/menu.php");
        ?>

    <main>
        <div class="container-top-image">
            <div class="content-top-image service-img">
                <div class="bloc-text-top-image">
                    <h1><?= $servico[0]["titulo"] ?></h1>
                    <p>
                        <?= substr($servico[0]["conteudo"], 0, 189) ?>
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

                        <div id="encomenda-reverse" class="encomenda-bloco">
                            <div class="encomenda-img">
                                <img src="../assets/images/img-page/<?= $servico[1]["imagem"] ?>" alt="" class="responsive-img">
                            </div><!--.encomenda-img-->
                            <div class="encomenda-texto">
                                <article>
                                    <h3><?= $servico[1]["titulo"] ?></h3>
                                    <p><?= substr($servico[1]["conteudo"], 0, 220) ?></p>
                                    <button class="btn-encomenda"><a href="/conteudo_details/<?= $servico[1]["codigo"] ?>">mais detalhes</a></button>
                                </article><br>
                            </div><!--.encomenda-texto-->
                        </div><!--.encomenda-bloco-->


                        <h3>Tipos de envios</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae corrupti blanditiis inventore, aliquam ullam hic labore accusantium accusamus odio vero quibusdam, porro aut! Natus, sunt aperiam sint animi fugit eligendi odio quod nihil praesentium molestiae!</p>

                        <div class="info-agency-body">

                            <div id="bloc1" class="info-agency-bloc">
                                
                                <div class="info-agency-img">
                                    <a href="/conteudo_details/<?= $servico[2]["codigo"] ?>">
                                        <img src="../assets/images/img-page/<?= $servico[2]["imagem"] ?>" alt="" class="responsive-img">
                                    </a>
                                </div><!-- .info-agency-img-->

                                <div class="info-agency-text">
                                    <h3><?= $servico[2]["titulo"] ?></h3>
                                    <p>
                                        <?= substr($servico[2]["conteudo"], 0, 100) ?>
                                    </p>
                                   
                                </div><!-- .info-agency-text-->
                    
                            </div><!-- .info-agency-wrap-->
                    
                            <div id="bloc2" class="info-agency-bloc">
                                
                                <div class="info-agency-img">
                                    <a href="/conteudo_details/<?= $servico[3]["codigo"] ?>">
                                        <img src="../assets/images/img-page/<?= $servico[3]["imagem"] ?>" alt="" class="responsive-img">
                                    </a>
                                </div><!-- .info-agency-img-->
                                <div class="info-agency-text">
                                    <h3><?= $servico[3]["titulo"] ?></h3>
                                    <p>
                                        <?= substr($servico[3]["conteudo"], 0, 100) ?>
                                    </p>
                                </div><!-- .info-agency-text-->
                    
                            </div><!-- .info-agency-wrap-->
                    
                            <div id="bloc3" class="info-agency-bloc">
                                
                                <div class="info-agency-img">
                                    <a href="/conteudo_details/<?= $servico[4]["codigo"] ?>">
                                        <img src="../assets/images/img-page/<?= $servico[4]["imagem"] ?>" alt="" class="responsive-img">
                                    </a>
                                </div><!-- .info-agency-img-->

                                <div class="info-agency-text">
                                    <h3><?= $servico[4]["titulo"] ?></h3>
                                    <p>
                                        <?= substr($servico[4]["conteudo"], 0, 100) ?>
                                    </p>
                    
                                </div><!-- .info-agency-text-->
                    
                            </div><!-- .info-agency-wrap-->

                        </div><!-- .info-agency-body-->

                        <div class="encomenda-bloco">
                            <div class="encomenda-img">
                                <img src="../assets/images/img-page/<?= $servico[5]["imagem"] ?>" alt="" class="responsive-img">
                            </div><!--.encomenda-img-->
                            <div class="encomenda-texto">
                                <article>
                                    <h3><?= $servico[5]["titulo"] ?></h3>
                                    <p><?= substr($servico[5]["conteudo"], 0, 250) ?></p>
                                    <button class="btn-encomenda"><a href="/conteudo_details/<?= $servico[5]["codigo"] ?>">mais detalhes</a></button>
                                </article>
                            </div><!--.encomenda-texto-->
                        </div><!--.encomenda-bloco-->


                    </div><!-- .content-services -->                
                </div><!--.body-content-right-->

                
            </div><!--.body-container-->
        </div><!--.main-container-->
    </main>

        <?php
            require("views/templates/footer.php");
        ?>    
