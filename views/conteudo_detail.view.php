<div>
    <article>
        <h1><?= $content["titulo"] ?></h1>

        <div> <?php if($content["tipo_conteudo"] ==  1){ ?>
            <img src="../assets/images/slides-img/<?= $content["imagem"] ?>" class="responsive-img" alt="" width="50%" >
            <?php }else if($content["tipo_conteudo"] ==  2){ ?>
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