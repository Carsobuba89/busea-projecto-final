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
                <h2>Receçao da encomenda</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo quas veritatis, quasi perspiciatis delectus dignissimos laudantium modi laborum amet. Provident?
                </p> 
            </div><!--.header-content-->
       </div><!--.header-container-->

        <div class="body-container">
            <div class="body-content-left">
                <?php require("views/templates/sidebar_admin.php"); ?>
            </div><!-- .body-content-left -->
            <div class="body-content-right div-form1">

                <form action="<?= ROOT ?>/admin_rececao/rececaoEncomenda" method="post">

                    <fieldset>
                        <legend>Registra a receçao da encomenda</legend>

                            <div class="form-group">
                                <div class="col-label">
                                    <label for="data_recebido">Data da Receçao</label>
                                </div><!--.col-label-->
                                <div class="col-input">
                                    <input type="date" name="data_recebido" id="data_recebido" value="<?php echo date("Y-m-d")  ?>" required>
                                </div><!--.col-textarea-->
                            </div><!--.form-group-->

                            <div class="form-group">
                                <div class="col-label">
                                    <label for="estado_pacote">Estado da Pacote</label>
                                </div><!--.col-label-->
                                <div class="col-input-25">
                                    <select  id="estado_pacote" name="estado_pacote">
                                        
                                        <option value="1">Muito Bem</option>
                                        <option value="2">Estragado</option>
                                        <option value="3">Uma parte da encomenda</option>
                            
                                    </select>      
                                </div><!--.col-select-->
                            </div><!--.form-group--> 

                           

                            <input type="hidden" name="codigo_encomenda" value="<?= $dadosEnvio["codigo_encomenda"] ?>">

                            <div class="form-group">
                                <button type="submit" name="receberEncomenda">Registrar receçao</button>
                            </div>  

                    </fieldset>

                </form>

            
            </div><!--.body-content-right -->
            
        </div><!--.body-container -->
    
    </div><!--.main-container-->

    
        <?php
            require("views/templates/footer.admin.php");
        ?>