<div>
    <article>
        <h1><?= $slide["titulo"] ?></h1>
        <div>

        </div>
        <img src="../assets/images/slides-img/<?= $slide["imagem"] ?>" class="responsive-img" alt="" width="50%" >
        <div>
            <?= $slide["conteudo"] ?>
        </div>
        <p>Criado no dia <?= $slide["data_criacao"] ?>  </p>
        <a href="/registar/conta">Criar Conta Agora</a>
    </article>
</div>