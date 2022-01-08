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
                <h2>Envio da encomenda</h2>
                <p>
                    Estas pronto para enviar a encomenda com a referencia <strong> <?= $dadosEnvio["referencia"] ?></strong> para <strong><?= $dadosEnvio["nomePais"] ?></strong> que content <strong> <?= $dadosEnvio["descricao"] ?> </strong>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo quas veritatis, quasi perspiciatis delectus dignissimos laudantium modi laborum amet. Provident?
                </p> 
            </div><!--.header-content-->
       </div><!--.header-container-->

        <div class="body-container">
            <div class="body-content-left">
                <?php require("views/templates/sidebar_admin.php"); ?>
            </div><!-- .body-content-left -->
            <div class="body-content-right div-form1">

                <form action="<?= ROOT ?>/admin_envios/criacaoEnvio" method="post">

                    <fieldset>
                        <legend>Registra o seu envio</legend>

                            <div class="form-group">
                                <div class="col-label">
                                    <label for="data_previsto_chegada">Data previsto de chegada</label>
                                </div><!--.col-label-->
                                <div class="col-input">
                                    <input type="date" name="data_previsto_chegada" id="data_previsto_chegada" value="<?php echo date("Y-m-d", time() + (86400 * 2))  ?>" required>
                                </div><!--.col-textarea-->
                            </div><!--.form-group-->

                            <div class="form-group">
                                <div class="col-label">
                                    <label for="tipo_envio">Tipo de envio</label>
                                </div><!--.col-label-->
                                <div class="col-input-25">
                                    <select  id="tipo_envio" name="tipo_envio">
                                        <?php
                                            foreach($envios as $envio){
                                                echo '
                                                    <option value="'.$envio["codigo"].'">'.$envio["nome"].'</option>
                                                ';

                                            }
                                        ?>
                                    </select>      
                                </div><!--.col-select-->
                            </div><!--.form-group--> 

                           

                            <input type="hidden" name="codigo_encomenda" value="<?= $dadosEnvio["codigo_encomenda"] ?>">

                            <div class="form-group">
                                <button type="submit" name="criarEnvio">Registrar envio</button>
                            </div>  

                    </fieldset>

                </form>

            
            </div><!--.body-content-right -->
            
        </div><!--.body-container -->
    
    </div><!--.main-container-->

    
        <?php
            require("views/templates/footer.admin.php");
        ?>