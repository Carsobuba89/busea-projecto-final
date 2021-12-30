<?php
    require("./views/templates/menu.php");
?>
<main>
<div class="main-container">
    <div class="header-container">
        <div class="header-content">
            <h2><?= $info_agencia["nome_agencia"] ?> </h2>
            
        </div><!--.header-content-->
    </div><!--.header-container--><br>

    <div id="encomenda-reverse" class="encomenda-bloco">
        <div class="encomenda-img">
            <img src="../assets/images/img-agencias/<?= $info_agencia["imagem_agencia"] ?>" alt="" class="responsive-img">
        </div><!--.encomenda-img-->
        <div class="encomenda-texto">
        <article>
            <?= $info_agencia["descricao_agencia"] ?>
        </article><br>
        <label>Hora de Abertura :</label>
        <?= $info_agencia["hora_abertura"] ?><br>
        <label>Hora de Fecho :</label>
        <?= $info_agencia["hora_fecho"] ?><br>
        <label>Criado desde :</label>
        <?= $info_agencia["data_criacao"] ?>
        </div><!--.encomenda-texto-->
    </div><!--.encomenda-bloco-->


    <h3>Pode Encontrar esta agencia nas localidades abaixo</h3>
    <div class="agencia-content">
        
        <?php foreach($info_adressos as $key => $value){ ?>
            <div class="agencia-bloco">
                
                    <div class="agencia-info">
                        <h4><?= $info_adressos[$key]["pais"] ?></h4>
                        <address>
                            <?= $info_adressos[$key]["adresso"] ?> <br>
                            <?= $info_adressos[$key]["cidade"] ?>
                            <?= $info_adressos[$key]["codigo_postal"] ?>
                        </address>
                        <label>Email : <?= $info_adressos[$key]["email"] ?></label><br>
                        <label>Telefone : <?= $info_adressos[$key]["telefone"] ?></label>
                    </div><!-- .agencia-info-->
             
            </div><!-- .agencia-bloco -->
        <?php } ?>       

    </div><!-- .agencia-content -->

    <h3>Os Agentes correspondentes desta agencia</h3>
    <div class="body-container-agente" >
        <?php foreach($info_agentes as $key => $value){ ?>
            <div class="div-form1 dados-agente1">     
                    <h4>Agente : <?= $info_agentes[$key]["nome"] ?></h4>
                    <div>
                        <div class="wrap-img"> 
                            <img src="../assets/images/img-agentes/<?= $info_agentes[$key]["avatar"] ?>" alt="imagem do agente" class="responsive-img"> 
                        </div><!-- .wrap-img -->

                        <p>Contactos de Agente</p>
                        <div>
                            <label>Telefone : <?= $info_agentes[$key]["numero_telefone"] ?></label><br>
                            <label>Email : <?= $info_agentes[$key]["email"] ?></label>
                        </div>
                    </div>
            </div><!--.div-form dados-agente1 -->
        <?php } ?> 
    </div><!-- .body-container-agentes -->


</div><!--.main-container-->
</main>


<?php
    require("views/templates/footer.php");
?> 