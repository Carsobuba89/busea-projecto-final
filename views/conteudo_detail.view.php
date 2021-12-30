<?php
    require("./views/templates/menu.php");
?>

<main>
<div class="main-container">
    <div class="header-container">
        <div class="header-content">
            <h2> <?= $content["titulo"] ?>  </h2>
            
        </div><!--.header-content-->
    </div><!--.header-container-->

    <div Style="width: 50%">
        <article>
           
            <div> <?php if($content["tipo_conteudo"] ==  1){ ?>
                <img src="../assets/images/slides-img/<?= $content["imagem"] ?>" class="responsive-img" alt="" width="50%" >
                <?php }else if(
                        $content["tipo_conteudo"] ==  2 || 
                        $content["tipo_conteudo"] ==  3 ||
                        $content["tipo_conteudo"] ==  7 
                    ){ ?>
                <img src="../assets/images/img-page/<?= $content["imagem"] ?>" class="responsive-img" alt="" width="50%" >
                    <?php }?>
            </div>
            
            <div>
                <?= $content["conteudo"] ?>
            </div>

            <p>Criado no dia <?= $content["data_criacao"] ?>  </p>
            
            <?php if($content["tipo_conteudo"] ==  1){ ?>
                <a href="/registar/conta">Criar Conta Agora</a>
            <?php } ?>
        </article>
    </div>


</div><!--.main-container-->
</main>
<?php
    require("views/templates/footer.php");
?> 