
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
            <div class="header-content-admin">
                <div class="btn-criacao-encomenda">
                    <button class="btn btn-create">
                        <a href="/admin_encomendas/novo_encomenda">Criar Nova Encomenda</a>
                    </button>
                </div>
                <div class="header-top-encomenda">
                    <h2>Detalhes de Dados da encomenda</h2>
                    <p>
                        Nao esqueça de Guardar altercoes realizada no caso alterar alguma informçao Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab explicabo neque iusto fuga officia animi Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab explicabo neque iusto fuga officia animi iste unde, minus vel veritatis!
                    </p> 
                </div>
            </div><!--.header-content-->
       </div><!--.header-container-->

        <div class="body-container">
            <div class="body-content-left">
                <?php require("views/templates/sidebar_admin.php"); ?>
            </div>
            <div class="body-content-right div-form1">

                <div class="tabela-encomendas-prontas">

                    <form action="<?= ROOT ?>/admin_encomendas/criacaoEncomenda" method="post">

                    <fieldset>
                        <legend>Dados de quem está a enviar</legend>

                        <h3>Dados de remetente</h3>

                        <div class="form-group">
                            <div class="col-label">
                                <label for="nomeRemetente">Nome</label>
                            </div><!--.col-label-->
                            <div class="col-input">
                                <input value="<?= $detalhesEncomenda["nome_remetente"] ?>" type="text" id="nomeRemetente" name="nomeRemetente" required minlength="3" maxlength="60">
                            </div><!--.col-input-->
                            <!--  <span>Este Campo e obrigatorio</span>   -->
                        </div><!--.form-group-->

                        <div class="form-group">
                            <div class="col-label">
                                <label for="telefoneRemetente">Telefone</label>
                            </div><!--.col-label-->
                            <div class="col-input">
                                <input value="<?= $detalhesEncomenda["num_telefone_remetente"] ?>" type="text" id="telefoneRemetente" name="telefoneRemetente"  minlength="7" maxlength="21" required >
                            </div><!--.col-input-->
                            <span></span>
                        </div><!--.form-group-->

                        <div class="form-group">
                            <div class="col-label">
                                <label for="pais_remetente">Pais do Remetente</label>
                            </div><!--.col-label-->
                            <div class="col-select">
                                <select name="pais_remetente" id="pais_remetente">
                                    <?php
                                        foreach($paises as $pais){
                                            $selected = "";
                                            if($pais["codigo"] === $detalhesEncomenda["pais_remetente"]){
                                                $selected = "selected";
                                            }
                                            echo '
                                                <option value="'. $pais["codigo"] .'" '.$selected.'>'. $pais["nome"] .'</option>
                                            ';
                                        }
                                    ?>
                                </select>
                            </div><!--.col-select-->
                        </div><!--.form-group-->

                        <div class="form-group">
                            <div class="col-label">
                                <label for="numero_bi">Numero Documento</label>
                            </div><!--.col-label-->
                            <div class="col-input">
                                <input value="<?= $detalhesEncomenda["numero_doc_remetente"] ?>" type="text" id="numero_bi" name="numero_bi"  minlength="4" maxlength="14">
                            </div><!--.col-input-->
                        </div><!--.form-group-->

                        <div class="form-group">
                            <div class="col-label">
                                <label for="cidade">Cidade</label>
                            </div><!--.col-label-->
                            <div class="col-input">
                                <input value="<?= $detalhesEncomenda["cidade"] ?>" type="text" id="cidade" name="cidade"  minlength="4" maxlength="60">
                            </div><!--.col-input-->
                        </div><!--.form-group-->

                        <div class="form-group">
                            <div class="col-label">
                                <label for="adresso">Adresso</label>
                            </div><!--.col-label-->
                            <div class="col-input">
                                <input value="<?= $detalhesEncomenda["adresso_remetente"] ?>" type="text" id="adresso" name="adresso"   minlength="8" maxlength="120">
                            </div><!--.col-input-->
                        </div><!--.form-group-->

                        <div class="form-group">
                            <div class="col-label">
                                <label for="codigo_postal">Codigo postal</label>
                            </div><!--.col-label-->
                            <div class="col-input">
                                <input value="<?= $detalhesEncomenda["codigo_postal"] ?>" type="text" id="codigo_postal" name="codigo_postal"   minlength="4" maxlength="20">
                            </div><!--.col-input-->
                        </div><!--.form-group-->

                    </fieldset><!-- .Dados do remetente -->

                    <fieldset>
                        <legend>Informaçao da Encomenda </legend>

                        <h3>Dados de pacote ou remesa</h3>
                        <div class="form-group">
                            <div class="col-label">
                                <label for="descricao">Descrever a encomenda</label>
                            </div><!--.col-label-->
                            <div class="col-input-75">
                                <input value="<?= $detalhesEncomenda["descricao"] ?>" type="text" id="descricao" name="descricao" placeholder="Telemovel Samsung A20" required minlength="3" maxlength="120">
                            </div><!--.col-input-->
                            <!--    <span>Este Campo e obrigatorio</span> -->
                        </div><!--.form-group-->

                        <div class="form-group">
                            <div class="col-label">
                                <label for="valorEstimado">Valor da encomenda</label>
                            </div><!--.col-label-->
                            <div class="col-input-75">
                                <input value="<?= $detalhesEncomenda["valor_encomenda"] ?>" type="number" id="valorEstimado" name="valorEstimado" placeholder="100"  min="0" max="100000" step="any">
                            </div><!--.col-input-->
                            <!--    <span>Este Campo e obrigatorio</span> -->
                        </div><!--.form-group-->

                        <div class="form-group">
                            <div class="col-label">
                                <label for="tipo">Tipo</label>
                            </div><!--.col-label-->
                            <div class="col-input-25">
                                <select  id="tipo_encomenda" name="tipo_encomenda">
                                    <?php
                                        foreach($tipo_encomendas as $tipo){
                                            $selected = "";
                                            if($tipo["id_tipo_encomenda"] === $detalhesEncomenda["tipo_encomenda"]){
                                                $selected = "selected";
                                            }
                                            echo '
                                                <option value="'.$tipo["id_tipo_encomenda"].'"'.$selected.'>'.$tipo["descricao"].'</option>
                                            ';
                                        }
                                        var_dump($selected);
                                    ?>
                                </select>      
                            </div><!--.col-select-->
                        </div><!--.form-group--> 

                        <div class="form-group">
                            <div class="col-label">
                                <label for="quantidade">Quantidade</label>
                            </div><!--.col-label-->
                            <div class="col-input-25">
                                <input value="<?= $detalhesEncomenda["quantidade"] ?>" type="number" id="quantidade" name="quantidade" required min="1" max="1000" value="1">
                            </div><!--.col-input-->
                        </div><!--.form-group--> 

                        <div class="form-group">
                            <div class="col-label">
                                <label for="peso">Peso</label>
                            </div><!--.col-label-->
                            <div class="col-input-25">
                                <input value="<?= $detalhesEncomenda["peso"] ?>" type="number" id="peso" name="peso" placeholder="2" minlength="0"  maxlength="1000" step="any" >
                                <span class="medida">kg</span>
                            </div><!--.col-input-->
                        </div><!--.form-group-->

                        <div class="form-group">
                            <div class="col-label">
                                <label for="cumprimento">Volume por Metro cubico </label>
                            </div><!--.col-label-->
                            <div class="col-input-25">
                                <input value="<?= $detalhesEncomenda["volume"] ?>" type="number" id="volume" name="volume" min="1"  max="5">
                                <span class="medida">cm</span>
                            </div><!--.col-input-->
                        </div><!--.form-group-->

                    </fieldset><!-- .Dados de remesa -->

                    <fieldset>
                        <legend>Dados da pessoa que ira receber a encomenda ?</legend>

                        <h3>Dados do destinatario</h3>
                        <div class="form-group">
                            <div class="col-label">
                                <label for="nomeDestinatario">Nome </label>
                            </div><!--.col-label-->
                            <div class="col-input">
                                <input value="<?= $detalhesEncomenda["nome_destinatario"] ?>" type="text" id="nomeDestinatario" name="nomeDestinatario" placeholder="Carlos Antonio Silva" required minlength="3" maxlength="60">
                            </div><!--.col-input-->
                            <!--  <span>Este Campo e obrigatorio</span>   -->
                        </div><!--.form-group-->

                        <div class="form-group">
                            <div class="col-label">
                                <label for="telefoneDestinatario">Telefone</label>
                            </div><!--.col-label-->
                            <div class="col-input">
                                <input value="<?= $detalhesEncomenda["telefone_destinatario"] ?>" type="text" id="telefoneDestinatario" name="telefoneDestinatario"  minlength="7" maxlength="21" required >
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
                                        foreach($paises as $paisDestino){
                                            $selectedDestino = "";
                                            if($paisDestino["codigo"] === $detalhesEncomenda["pais_destinatario"]){
                                                $selectedDestino = "selected";
                                            }
                                            echo '
                                                <option value="'. $paisDestino["codigo"] .'" '.$selectedDestino.'>'. $paisDestino["nome"] .'</option>
                                            ';
                                        }
                                    ?>
                                </select>
                            </div><!--.col-select-->
                        </div><!--.form-group-->

                        <div class="form-group">
                            <div class="col-label">
                                <label for="cidade_destino">Cidade</label>
                            </div><!--.col-label-->
                            <div class="col-input">
                                <input value="<?= $detalhesEncomenda["cidade_destino"] ?>" type="text" id="cidade_destino" name="cidade_destino"  minlength="4" maxlength="60">
                            </div><!--.col-input-->
                        </div><!--.form-group-->

                        <div class="form-group">
                            <div class="col-label">
                                <label for="adresso_destino">Adresso</label>
                            </div><!--.col-label-->
                            <div class="col-input">
                                <input value="<?= $detalhesEncomenda["adresso_destino"] ?>" type="text" id="adresso_destino" name="adresso_destino"   minlength="8" maxlength="120">
                            </div><!--.col-input-->
                        </div><!--.form-group-->

                        <div class="form-group">
                            <div class="col-label">
                                <label for="codigo_postal_destino">Codigo postal</label>
                            </div><!--.col-label-->
                            <div class="col-input">
                                <input value="<?= $detalhesEncomenda["codigo_postal_destino"] ?>" type="text" id="codigo_postal_destino" name="codigo_postal_destino"   minlength="4" maxlength="20">
                            </div><!--.col-input-->
                        </div><!--.form-group-->

                    </fieldset><!-- .Dados do destinatario -->

                    <div class="form-group">
                        <button type="submit" name="alterarEncomenda">Guardar alteraçao realizada</button>
                        <button type="submit" name="cancelarEncomenda">Cancelar encomenda</button>
                    </div>                   


                    </form>
                    
                   
                </div><!-- . -->
            </div><!-- . -->
            

        </div><!--.body-container-admin -->

    </div><!--.main-container-->

    <?php
        require("views/templates/footer.admin.php");
    ?>

    