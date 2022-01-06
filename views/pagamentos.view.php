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
                <h2>Pagamento da encomenda</h2>
                <p>
                    Efectue pagamento de envio da encomenda de 
                    <strong> <?= $dadosPagamento[0]["descricao"] ?? $_SESSION["descricao"] ?></strong>.
                    para<strong> <?= $dadosPagamento[0]["nome"] ?? $_SESSION["pais_destino"] ?></strong>  com toda segurança!
                </p> 
            </div><!--.header-content-->
       </div><!--.header-container-->

        <div class="body-container">
            <div class="body-content-left">
                <?php require("views/templates/sidebar_admin.php"); ?>
            </div><!-- .body-content-left -->
            <div class="body-content-right div-form1">

                <form action="<?= ROOT ?>/admin_pagamentos/criacaoPagamento" method="post">

                    <fieldset>
                        <legend>Registra o seu pagamento</legend>

                            <div class="form-group">
                                <div class="col-label">
                                    <label for="valorPago">Valor para pagar</label>
                                </div><!--.col-label-->
                                <div class="col-input-75">
                                    <input value="<?= $valorAPagar ?? $_SESSION["valor_estimado"] ?>" type="number" id="valorPago" name="valorPago" placeholder="100"  min="0" max="100000" step="any">
                                </div><!--.col-input-->
                                <!--    <span>Este Campo e obrigatorio</span> -->
                            </div><!--.form-group-->

                            <div class="form-group">
                                <div class="col-label">
                                    <label for="moeda">Tipo de moeda</label>
                                </div><!--.col-label-->
                                <div class="col-input-25">
                                    <select  id="moeda" name="moeda">
                                        <?php
                                            foreach($moedas as $moeda){
                                                echo '
                                                    <option value="'.$moeda["codigo"].'">'.$moeda["moeda"].'</option>
                                                ';

                                            }
                                        ?>
                                    </select>      
                                </div><!--.col-select-->
                            </div><!--.form-group--> 

                            <div class="form-group">
                                <div class="col-label">
                                    <label for="formaPagamento">Forma de Pagamento</label>
                                </div><!--.col-label-->
                                <div class="col-input-25">
                                    <select  id="formaPagamento" name="formaPagamento">
                                        <?php
                                            foreach($formas_pagamento as $forma){
                                                echo '
                                                    <option value="'.$forma["codigo"].'">'.$forma["descricao"].'</option>
                                                ';

                                            }
                                        ?>
                                    </select>      
                                </div><!--.col-select-->
                            </div><!--.form-group--> 

                            <div class="form-group">
                                <div class="col-label">
                                    <label for="detalhesPagamento">Mais detalhes</label>
                                </div><!--.col-label-->
                                <div class="col-input-75">
                                    <input type="text" id="detalhesPagamento" name="detalhesPagamento" minlength="3" maxlength="120">
                                </div><!--.col-input-->
                                <!--    <span>Este Campo e obrigatorio</span> -->
                            </div><!--.form-group-->

                            <input type="hidden" name="codigo_encomenda" value="<?= $dadosPagamento[0]["codigo_encomenda"] ?? $_SESSION["codigo_encomenda"] ?>">

                            <div class="form-group">
                                <button type="submit" name="criarPagamento">Efectuar Pagamento</button>
                            </div>  

                    </fieldset>

                </form>

            
            </div><!--.body-content-right -->
            
        </div><!--.body-container -->
    
    </div><!--.main-container-->

    
        <?php
            require("views/templates/footer.admin.php");
        ?>