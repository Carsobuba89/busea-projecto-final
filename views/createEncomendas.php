
        <?php
            require("views/templates/menu.admin.php");
        ?>
   
    <div >
        <?php
            if(isset($message)){
                echo '<p role="alert">'.$message.'</p>';
            }
        ?>
    </div>
    <div class="main-container">
       <div class="header-container">
            <div class="header-content">
                <h2>Criaçao de nova encomendas</h2>
                <p>
                    Lorem iusto fuga officia, adipisicing elit. Ab explicabo neque iusto fuga officia animi iste unde, minus vel veritatis!
                </p> 
            </div><!--.header-content-->
       </div><!--.header-container-->

        <div class="body-container">
            <div class="body-content-left">
                <?php require("views/templates/sidebar_admin.php"); ?>
            </div>
            <div class="body-content-right">

                <form action="<?= ROOT ?>/admin_encomendas/create" method="post">

                    <fieldset>
                        <legend>Quem está a enviar ?</legend>

                        <h3>Dados de remetente</h3>

                        <div class="form-group">
                            <div class="col-label">
                                <label for="nomeRemetente">Nome  de Remetente</label>
                            </div><!--.col-label-->
                            <div class="col-input">
                                <input type="text" id="nomeRemetente" name="nomeRemetente" placeholder="Carlos Antonio Silva" required minlength="3" maxlength="120">
                            </div><!--.col-input-->
                            <!--  <span>Este Campo e obrigatorio</span>   -->
                        </div><!--.form-group-->

                        <div class="form-group">
                            <div class="col-label">
                                <label for="num_telefone">Telefone</label>
                            </div><!--.col-label-->
                            <div class="col-input">
                                <input type="text" id="num_telefone" name="num_telefone"  minlength="7" maxlength="20" required >
                            </div><!--.col-input-->
                            <span></span>
                        </div><!--.form-group-->

                        <div class="form-group">
                            <div class="col-label">
                                <label for="pais">Pais do Remetente</label>
                            </div><!--.col-label-->
                            <div class="col-select">
                                <select name="pais" id="pais">
                                    <option value="escolha"> Escolha o pais</option>
                                    <?php
                                        foreach($paises as $pais){
                                            echo '
                                                <option value="'. $pais["codigo"] .'">'. $pais["nome"] .'</option>
                                            ';
                                        }
                                    ?>
                                </select>
                            </div><!--.col-select-->
                        </div><!--.form-group-->

                        <button type="buttom" name="detailsEndereco">Dados Complementares</button>
                        <div class="detalheRemetente">

                            <div class="form-group">
                                <div class="col-label">
                                    <label for="numero_bi">Numero Documento</label>
                                </div><!--.col-label-->
                                <div class="col-input">
                                    <input type="text" id="cidnumero_biade" name="numero_bi"  minlength="4" maxlength="14">
                                </div><!--.col-input-->
                            </div><!--.form-group-->

                            <div class="form-group">
                                <div class="col-label">
                                    <label for="cidade">Cidade</label>
                                </div><!--.col-label-->
                                <div class="col-input">
                                    <input type="text" id="cidade" name="cidade"  minlength="4" maxlength="60">
                                </div><!--.col-input-->
                            </div><!--.form-group-->

                            <div class="form-group">
                                <div class="col-label">
                                    <label for="adresso">Adresso</label>
                                </div><!--.col-label-->
                                <div class="col-input">
                                    <input type="text" id="adresso" name="adresso"   minlength="8" maxlength="120">
                                </div><!--.col-input-->
                            </div><!--.form-group-->

                            <div class="form-group">
                                <div class="col-label">
                                    <label for="codigo_postal">Codigo postal</label>
                                </div><!--.col-label-->
                                <div class="col-input">
                                    <input type="text" id="codigo_postal" name="codigo_postal"   minlength="4" maxlength="20">
                                </div><!--.col-input-->
                            </div><!--.form-group-->


                        </div>

                    </fieldset><!-- .Dados do remetente -->

                    <fieldset>
                        <legend>O que ?</legend>

                        <h3>Dados de pacote ou remesa</h3>
                            <div class="form-group">
                                <div class="col-label">
                                    <label for="descricao">Descrever a encomenda</label>
                                </div><!--.col-label-->
                                <div class="col-input-75">
                                    <input type="text" id="descricao" name="descricao" placeholder="Telemovel Samsung A20" required minlength="3" maxlength="120">
                                </div><!--.col-input-->
                                <!--    <span>Este Campo e obrigatorio</span> -->
                            </div><!--.form-group-->

                            <div class="form-group">
                                <div class="col-label">
                                    <label for="quantidade">Quantidade</label>
                                </div><!--.col-label-->
                                <div class="col-input-25">
                                    <input type="number" id="quantidade" name="quantidade" placeholder="1" required minlength="1" maxlength="99">
                                </div><!--.col-input-->
                            </div><!--.form-group--> 

                            <div class="form-group">
                                <div class="col-label">
                                    <label for="tipo">Tipo</label>
                                </div><!--.col-label-->
                                <div class="col-input-25">
                                    <select  id="tipo" name="tipo">
                                        <option value="caixa">Caixa</option>
                                        <option value="palete">Palete</option>
                                        <option value="envelope">Envelope</option>
                                    </select>      
                                </div><!--.col-select-->
                            </div><!--.form-group--> 

                            <div class="form-group">
                                <div class="col-label">
                                    <label for="cumprimento">Cumprimento </label>
                                </div><!--.col-label-->
                                <div class="col-input-25">
                                    <input type="number" id="cumprimento" name="cumprimento" placeholder="30" required minlength="1"  maxlength="9" step="any">
                                    <span class="medida">cm</span>
                                </div><!--.col-input-->
                            </div><!--.form-group-->

                            <div class="form-group">
                                <div class="col-label">
                                    <label for="largura">Largura</label>
                                </div><!--.col-label-->
                                <div class="col-input-25">
                                    <input type="number" id="largura" name="largura" placeholder="10" required minlength="1"  maxlength="9" step="any" > 
                                    <span class="medida">cm</span>
                                </div><!--.col-input-->
                            </div><!--.form-group-->

                            <div class="form-group"> 
                                <div class="col-label">
                                    <label for="altura">Altura*</label>
                                </div><!--.col-label-->
                                <div class="col-input-25">
                                    <input type="number" id="altura" name="altura" placeholder="10" required minlength="1"  maxlength="9" step="any" >               
                                    <span class="medida">cm</span>
                                </div><!--.col-input-->
                            </div><!--.form-group-->

                            <div class="form-group">
                                <div class="col-label">
                                    <label for="peso">Peso*</label>
                                </div><!--.col-label-->
                                <div class="col-input-25">
                                    <input type="number" id="peso" name="peso" placeholder="2" required minlength="1"  maxlength="9" step="any" >
                                    <span class="medida">kg</span>
                                </div><!--.col-input-->
                            </div><!--.form-group-->

                    </fieldset><!-- .Dados de remesa -->

                    <fieldset>
                        <legend>Para Quem ?</legend>

                        <h3>Dados do destinatario</h3>
                        <div class="form-group">
                            <div class="col-label">
                                <label for="nomeDestinatario">Nome </label>
                            </div><!--.col-label-->
                            <div class="col-input">
                                <input type="text" id="nomeDestinatario" name="nomeDestinatario" placeholder="Carlos Antonio Silva" required minlength="3" maxlength="120">
                            </div><!--.col-input-->
                            <!--  <span>Este Campo e obrigatorio</span>   -->
                        </div><!--.form-group-->

                        <div class="form-group">
                            <div class="col-label">
                                <label for="telefoneDestinatario">Telefone</label>
                            </div><!--.col-label-->
                            <div class="col-input">
                                <input type="text" id="telefoneDestinatario" name="telefoneDestinatario"  minlength="7" maxlength="20" required >
                            </div><!--.col-input-->
                            <span></span>
                        </div><!--.form-group-->

                        <div class="form-group">
                            <div class="col-label">
                                <label for="pais">Pais </label>
                            </div><!--.col-label-->
                            <div class="col-select">
                                <select name="pais" id="pais">
                                    <option value="escolha"> Escolha o pais</option>
                                    <?php
                                        foreach($paises as $pais){
                                            echo '
                                                <option value="'. $pais["codigo"] .'">'. $pais["nome"] .'</option>
                                            ';
                                        }
                                    ?>
                                </select>
                            </div><!--.col-select-->
                        </div><!--.form-group-->
                    </fieldset><!-- .Dados do destinatario -->

                    <button type="submit" name="create">Guardar encomenda</button>

                </form>
                
                
            </div><!--.body-content-right -->
            
        </div><!--.body-container-admin -->

    </div><!--.main-container-->

    <?php
        require("views/templates/footer.admin.php");
    ?>

    