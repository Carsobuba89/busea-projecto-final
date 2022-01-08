
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
                <h2>Criaçao de Novo conteudo publico no site</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab explicabo neque iusto fuga officia animi Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab explicabo neque iusto fuga officia animi iste unde, minus vel veritatis!
                </p> 
            
            </div><!--.header-content-->
       </div><!--.header-container-->

        <div class="body-container-admin_conteudo">
            <div class="content-admin-conteudo div-form1">

                <fieldset>
                    <legend>Criar novo Conteudo</legend>
            
                    <form method="post" action="<?= ROOT ?>/admin_conteudos/criacaoConteudo" enctype="multipart/form-data">
                        
                        <div class="form-group">
                            <div class="col-label">
                                <label for="titulo">Titulo de Conteudo</label>
                            </div><!--.col-label-->
                            <div class="col-input">
                                <input type="text" id="titulo" name="titulo" required minlength="6" maxlength="120">
                            </div><!--.col-input-->
                        </div><!--.form-group-->

                        <div class="form-group">
                            <div class="col-label">
                                <label for="descricao">Descriçao Conteudo</label>
                            </div><!--.col-label-->
                            <div class="col-textarea">
                                <textarea name="descricao" id="descricao" cols="25" rows="8" minlength="60" maxlength="65535" required></textarea>
                            </div><!--.col-textarea--> 
                        </div><!--.form-group-->

                        <div class="form-group">
                            <div class="col-label">
                                <label for="imagem">Imagem de Conteudo </label>
                            </div><!--.col-label-->
                            <div class="col-input-file">
                                <input type="file" id="imagem" name="imagem" accept="image/*" >
                            </div><!--.col-input-file-->
                        </div><!--.form-group-->

                        <div class="form-group">
                            <div class="col-label">
                                <label for="tipo_conteudo">Tipo de Conteudo</label>
                            </div><!--.col-label-->
                            <div class="col-select">
                                <select name="tipo_conteudo" id="tipo_conteudo">
                                    <option value="escolha">escolher tipo conteudo</option>
                                    <?php
                                        foreach($tiposConteudo as $tipoConteudo){
                                            echo '
                                                <option value="'. $tipoConteudo["codigo"] .'">'. $tipoConteudo["nome"] .'</option>
                                            ';
                                        }
                                    ?>
                                </select>
                            </div><!--.col-select-->
                        </div><!--.form-group-->          

                        <div class="btn-registo-wrap">
                            <button type="submit" class="btn-registo" name="criarConteudo">Guardar</button>
                        </div>
        
                    </form>
                </fieldset>
            </div><!-- .content-admin-conteudo div-form1 -->
        </div><!--.body-container-admin -->
    </div><!--.main-container-->

    <?php
        require("views/templates/footer.admin.php");
    ?>