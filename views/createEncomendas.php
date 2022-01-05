
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
            <div class="body-content-right div-form1">

                <form action="<?= ROOT ?>/admin_encomendas/criacaoEncomenda" method="post">

                    <fieldset>
                        <legend>Quem está a enviar ?</legend>

                        <h3>Dados de remetente</h3>

                        <div class="form-group">
                            <div class="col-label">
                                <label for="nomeRemetente">Nome</label>
                            </div><!--.col-label-->
                            <div class="col-input">
                                <input type="text" id="nomeRemetente" name="nomeRemetente" placeholder="Carlos Antonio Silva" required minlength="3" maxlength="60">
                            </div><!--.col-input-->
                            <!--  <span>Este Campo e obrigatorio</span>   -->
                        </div><!--.form-group-->

                        <div class="form-group">
                            <div class="col-label">
                                <label for="telefoneRemetente">Telefone</label>
                            </div><!--.col-label-->
                            <div class="col-input">
                                <input type="text" id="telefoneRemetente" name="telefoneRemetente"  minlength="7" maxlength="21" required >
                            </div><!--.col-input-->
                            <span></span>
                        </div><!--.form-group-->

                        <div class="form-group">
                            <div class="col-label">
                                <label for="pais_remetente">Pais do Remetente</label>
                            </div><!--.col-label-->
                            <div class="col-select">
                                <select name="pais_remetente" id="pais_remetente">
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
                        
                        <div id="detailsEndereco" name="detailsEndereco">Mais Detalhes</div>

                        <div class="detalheRemetente">

                            <div class="form-group">
                                <div class="col-label">
                                    <label for="numero_bi">Numero Documento</label>
                                </div><!--.col-label-->
                                <div class="col-input">
                                    <input type="text" id="numero_bi" name="numero_bi"  minlength="4" maxlength="14">
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


                        </div><!-- .detalhesRemetente -->

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
                                    <label for="valorEstimado">Valor da encomenda</label>
                                </div><!--.col-label-->
                                <div class="col-input-75">
                                    <input type="number" id="valorEstimado" name="valorEstimado" placeholder="100"  min="0" max="100000" step="any">
                                </div><!--.col-input-->
                                <!--    <span>Este Campo e obrigatorio</span> -->
                            </div><!--.form-group-->

                            <div class="form-group">
                                <div class="col-label">
                                    <label for="tipo">Tipo</label>
                                </div><!--.col-label-->
                                <div class="col-input-25">
                                    <select  id="tipo_encomenda" name="tipo_encomenda">
                                        <option value="escolher">Escolher tipo encomenda</option>
                                        <?php
                                            foreach($tipo_encomendas as $tipo){
                                                echo '
                                                    <option value="'.$tipo["id_tipo_encomenda"].'">'.$tipo["descricao"].'</option>
                                                ';

                                            }
                                        ?>
                                    </select>      
                                </div><!--.col-select-->
                            </div><!--.form-group--> 

                            <div class="form-group">
                                <div class="col-label">
                                    <label for="quantidade">Quantidade</label>
                                </div><!--.col-label-->
                                <div class="col-input-25">
                                    <input type="number" id="quantidade" name="quantidade" required min="1" max="1000" value="1">
                                </div><!--.col-input-->
                            </div><!--.form-group--> 

                            <div class="form-group">
                                <div class="col-label">
                                    <label for="peso">Peso</label>
                                </div><!--.col-label-->
                                <div class="col-input-25">
                                    <input type="number" id="peso" name="peso" placeholder="2" minlength="0"  maxlength="1000" step="any" >
                                    <span class="medida">kg</span>
                                </div><!--.col-input-->
                            </div><!--.form-group-->

                            <div class="form-group">
                                <div class="col-label">
                                    <label for="cumprimento">Cumprimento </label>
                                </div><!--.col-label-->
                                <div class="col-input-25">
                                    <input type="number" id="cumprimento" name="cumprimento" placeholder="300" min="1"  max="500">
                                    <span class="medida">cm</span>
                                </div><!--.col-input-->
                            </div><!--.form-group-->

                            <div class="form-group">
                                <div class="col-label">
                                    <label for="largura">Largura</label>
                                </div><!--.col-label-->
                                <div class="col-input-25">
                                    <input type="number" id="largura" name="largura" placeholder="80" min="1"  max="400" step="any" > 
                                    <span class="medida">cm</span>
                                </div><!--.col-input-->
                            </div><!--.form-group-->

                            <div class="form-group"> 
                                <div class="col-label">
                                    <label for="altura">Altura*</label>
                                </div><!--.col-label-->
                                <div class="col-input-25">
                                    <input type="number" id="altura" name="altura" placeholder="100" min="1"  max="300" step="any" >               
                                    <span class="medida">cm</span>
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
                                <input type="text" id="nomeDestinatario" name="nomeDestinatario" placeholder="Carlos Antonio Silva" required minlength="3" maxlength="60">
                            </div><!--.col-input-->
                            <!--  <span>Este Campo e obrigatorio</span>   -->
                        </div><!--.form-group-->

                        <div class="form-group">
                            <div class="col-label">
                                <label for="telefoneDestinatario">Telefone</label>
                            </div><!--.col-label-->
                            <div class="col-input">
                                <input type="text" id="telefoneDestinatario" name="telefoneDestinatario"  minlength="7" maxlength="21" required >
                            </div><!--.col-input-->
                            <span></span>
                        </div><!--.form-group-->

                        <div class="form-group">
                            <div class="col-label">
                                <label for="pais_destino">Pais </label>
                            </div><!--.col-label-->
                            <div class="col-select">
                                <select name="pais_destino" id="pais_destino">
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

                        <div id="detailsEnderecoDestino" name="detailsEnderecoDestino">Mais Detalhes</div>

                        <div class="detalheDestino">


                            <div class="form-group">
                                <div class="col-label">
                                    <label for="cidade_destino">Cidade</label>
                                </div><!--.col-label-->
                                <div class="col-input">
                                    <input type="text" id="cidade_destino" name="cidade_destino"  minlength="4" maxlength="60">
                                </div><!--.col-input-->
                            </div><!--.form-group-->

                            <div class="form-group">
                                <div class="col-label">
                                    <label for="adresso_destino">Adresso</label>
                                </div><!--.col-label-->
                                <div class="col-input">
                                    <input type="text" id="adresso_destino" name="adresso_destino"   minlength="8" maxlength="120">
                                </div><!--.col-input-->
                            </div><!--.form-group-->

                            <div class="form-group">
                                <div class="col-label">
                                    <label for="codigo_postal_destino">Codigo postal</label>
                                </div><!--.col-label-->
                                <div class="col-input">
                                    <input type="text" id="codigo_postal_destino" name="codigo_postal_destino"   minlength="4" maxlength="20">
                                </div><!--.col-input-->
                            </div><!--.form-group-->


                        </div><!-- .detalhesDestino -->

                    </fieldset><!-- .Dados do destinatario -->

                     <div class="form-group">
                        <button type="submit" name="criarEncomenda">Guardar encomenda</button>
                     </div>                   
                    

                </form>
                
                
            </div><!--.body-content-right -->
            
        </div><!--.body-container-admin -->

    </div><!--.main-container-->

    
    

    <?php
        require("views/templates/footer.admin.php");
    ?>


    