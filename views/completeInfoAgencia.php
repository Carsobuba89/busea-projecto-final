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


</div><!--.main-container-->
</main>


<?php
    require("views/templates/footer.php");
?> 