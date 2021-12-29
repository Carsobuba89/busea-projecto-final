
        <?php
            require("./views/templates/menu.php");
        ?>
  
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
            <h3>As Agencias parceiras em Portugal</h3>
                <div class="agencia-content">
                
                        <?php foreach($agenciasPortugal as $key => $value){ ?>
                        <div class="agencia-bloco">
                            <a href="/agencias/<?= $agenciasPortugal[$key]["codigo_agencia"] ?>">
                                <div class="agencia-info">
                                    <h4><?= $agenciasPortugal[$key]["nome_agencia"] ?></h4>
                                    <address>
                                        <?= $agenciasPortugal[$key]["adresso"] ?> <br>
                                        <?= $agenciasPortugal[$key]["cidade"] ?>
                                        <?= $agenciasPortugal[$key]["codigo_postal"] ?>
                                    </address>
                                    <label>Abre as <strong><?= $agenciasPortugal[$key]["hora_abertura"] ?></strong></label>
                                    <label>e fecha as <strong><?= $agenciasPortugal[$key]["hora_fecho"] ?></strong></label><br>
                                    <label>Email : <?= $agenciasPortugal[$key]["email"] ?></label><br>
                                    <label>Telefone : <?= $agenciasPortugal[$key]["telefone"] ?></label>
                                </div><!-- .agencia-info-->
                                <div class="wrap-img-agencia">
                                    <img src="../assets/images/img-agencias/<?= $agenciasPortugal[$key]["imagem_agencia"] ?>" alt="imagem da agencia" class="responsive-img">
                                </div><!-- .wrap-img-agencia -->
                            </a>
                        </div><!-- .agencia-bloco -->
                        <?php } ?>    

                </div><!-- .agencia-content -->
                
                <h3>As Agencias parceiras em Guiné Bissau</h3>
                <div class="agencia-content">
    
                <?php foreach($agenciasGBissau as $key => $value){ ?>
                        <div class="agencia-bloco">
                            <a href="/agencias/<?= $agenciasGBissau[$key]["codigo_agencia"] ?>">
                                <div class="agencia-info">
                                    <h4><?= $agenciasGBissau[$key]["nome_agencia"]  ?></h4>
                                    <address>
                                        <?= $agenciasGBissau[$key]["adresso"] ?> <br>
                                        <?= $agenciasGBissau[$key]["cidade"] ?>
                                        <?= $agenciasGBissau[$key]["codigo_postal"] ?>
                                    </address>
                                    <label>Abre as <strong><?= $agenciasGBissau[$key]["hora_abertura"] ?></strong></label>
                                    <label>e fecha as <strong><?= $agenciasGBissau[$key]["hora_fecho"] ?></strong></label><br>
                                    <label>Email : <?= $agenciasGBissau[$key]["email"] ?></label><br>
                                    <label>Telefone : <?= $agenciasGBissau[$key]["telefone"] ?></label>
                                </div><!-- .agencia-info-->
                                <div class="wrap-img-agencia">
                                    <img src="../assets/images/img-agencias/<?= $agenciasGBissau[$key]["imagem_agencia"] ?>" alt="imagem da agencia" class="responsive-img">
                                </div><!-- .wrap-img-agencia -->
                            </a>
                        </div><!-- .agencia-bloco -->
                        <?php } ?>    

                </div><!-- .agencia-content -->
                

                <h3>As Agencias parceiras em Angola </h3>
                <div class="agencia-content">
                     
                    <?php foreach($agenciasAngola as $key => $value){ ?>
                        <div class="agencia-bloco">
                            <a href="/agencias/<?= $agenciasAngola[$key]["codigo_agencia"]  ?>">
                                <div class="agencia-info">
                                    <h4><?= $agenciasAngola[$key]["nome_agencia"] ?></h4>
                                    <address>
                                        <?= $agenciasAngola[$key]["adresso"] ?> <br>
                                        <?= $agenciasAngola[$key]["cidade"] ?>
                                        <?= $agenciasAngola[$key]["codigo_postal"] ?>
                                    </address>
                                    <label>Abre as <strong><?= $agenciasAngola[$key]["hora_abertura"] ?></strong></label>
                                    <label>e fecha as <strong><?= $agenciasAngola[$key]["hora_fecho"] ?></strong></label><br>
                                    <label>Email : <?= $agenciasAngola[$key]["email"] ?></label><br>
                                    <label>Telefone : <?= $agenciasAngola[$key]["telefone"] ?></label>
                                </div><!-- .agencia-info-->
                                <div class="wrap-img-agencia">
                                    <img src="../assets/images/img-agencias/<?= $agenciasAngola[$key]["imagem_agencia"] ?>" alt="imagem da agencia" class="responsive-img">
                                </div><!-- .wrap-img-agencia -->
                            </a>
                        </div><!-- .agencia-bloco -->
                    <?php } ?>    

                </div><!-- .agencia-content -->
                
                <h3>As Agencias parceiras em Cabo Verde</h3>
                <div class="agencia-content">
                    
                    <?php foreach($agenciasCaboverde as $key => $value){ ?>
                        <div class="agencia-bloco">
                            <a href="/agencias/<?= $agenciasCaboverde[$key]["codigo_agencia"]  ?>">
                                <div class="agencia-info">
                                    <h4><?= $agenciasCaboverde[$key]["nome_agencia"] ?></h4>
                                    <address>
                                        <?= $agenciasCaboverde[$key]["adresso"] ?> <br>
                                        <?= $agenciasCaboverde[$key]["cidade"] ?>
                                        <?= $agenciasCaboverde[$key]["codigo_postal"] ?>
                                    </address>
                                    <label>Abre as <strong><?= $agenciasCaboverde[$key]["hora_abertura"] ?></strong></label>
                                    <label>e fecha as <strong><?= $agenciasCaboverde[$key]["hora_fecho"] ?></strong></label><br>
                                    <label>Email : <?= $agenciasCaboverde[$key]["email"] ?></label><br>
                                    <label>Telefone : <?= $agenciasCaboverde[$key]["telefone"] ?></label>
                                </div><!-- .agencia-info-->
                                <div class="wrap-img-agencia">
                                    <img src="../assets/images/img-agencias/<?= $agenciasCaboverde[$key]["imagem_agencia"] ?>" alt="imagem da agencia" class="responsive-img">
                                </div><!-- .wrap-img-agencia -->
                            </a>
                        </div><!-- .agencia-bloco -->
                    <?php } ?>       

                </div><!-- .agencia-content -->
                

                
            </div><!--.agencia-container-->
        </div><!--.main-container-->
    </main>

        <?php
            require("views/templates/footer.php");
        ?> 
