
        <?php
            require("./views/templates/menu.php");
        ?>

    <main>
        <div class="container-top-image">
            <div class="content-top-image seguimento-img">
                <div class="bloc-text-top-image">
                    <h1><?= $seguimento[0]["titulo"] ?></h1>
                    <p>
                        <?= substr($seguimento[0]["conteudo"], 0, 200) ?>     
                    </p>
                </div>
            </div><!--.agencia-container-->
        </div><!--Final top image agencia-->

        <div class="main-container">
            <div class="header-container">
                <div class="header-content">
                    <h2>Seguimento de uma encomenda</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus animi voluptatum quia ipsum! Magni quidem similique architecto, id velit aperiam.</p>
                </div><!--.header-content-->
            </div><!--.header-container-->

            <div class="body-container">
                <div class="body-content-left">

                    <div class="wrap-aside">
                        <img src="../assets/images/img-page/<?= $seguimento[1]["imagem"] ?>" alt="" class="responsive-img">
                    </div>
                   
                </div><!--.body-content-left-->

                <div class="body-content-right">

                <div class="card-container">
                    <div class="header-card">
                        <h2>Veja onde esta a sua encomenda</h2>
                        <a href="#">Ajuda ?</a>
                    </div><!--.header-card-->
    
                    <div class="body-card">
                        <div class="form-request">
                            <form action="">
                                <div class="form-group-card">

                                    <input type="search" name="numero-referncia" id="numReferencia" aria-label="Search through site content"
                                     pattern="[A-z]{2}[0-9]{4}" class="num-referencia" placeholder="Entra referencia correcta AW2341" 
                                     required size="35">

                                    <button type="button" class="btn-seguir">Encontrar</button>

                                </div><!--.form-group-card-->
                                <span class="ref-errado">Campo Vazio, entra os dados correctamente</span>
                                <span class="ref-errado-1">Referencia errada, verifica os dados e prencha o campo correctamente</span>
                            </form>
                        </div><!--.form-header-->
                       
                        <div class="form-reponse ">
                            <form action="">
    
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Referencia</th>
                                           <!--  <th>Descriçao</th> -->
                                            <th>Proveniencia</th>
                                            <th>Destino</th>
                                            <th>Estado</th>
                                            <th>Mais</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>AW2341</td>
                                            <!-- <td>Telemovel Galaxi S21</td> -->
                                            <td>Lisboa</td>
                                            <td>Bissau</td>
                                            <td>Nao enviado</td>
                                            <td><em><a href="">Detalhes</a> </em></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>
                        </div><!--.form-reponse-->
                    </div><!--.body-card-->
                </div><!--.card-container-->

                <div class="info-seguimento">
                    <article>
                        <h2><?= $seguimento[1]["titulo"] ?></h2>
                        <?= $seguimento[1]["conteudo"] ?>
                    </article>
                </div>
                    
                </div><!--.body-content-right-->
            </div><!--.body-container-->
        </div><!--.main-container-->
    </main>

        <?php
            require("views/templates/footer.php");
        ?>    