<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/normalize.css">
    <link rel="stylesheet" href="../assets/css/global-style.css">
    <!--Google Fonts Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;1,100&family=Roboto:ital,wght@1,100;1,300;1,400&display=swap" rel="stylesheet">
    <!--FontAwesome Icons -->
    <script src="https://kit.fontawesome.com/2f1b3770e6.js" crossorigin="anonymous"></script>
    <title>Gestao de agencias</title>
</head>
<body>

    <header class="nav-header">  
        <?php
            require("views/templates/menu.admin.php");
        ?>
    </header>
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
                <h2>A sua conta, agencia e agentes foram criados com sucesso, antes de mais confirme os dados</h2>
                <p>
                    Aqui pode actualizar os seus dados si necessario, antes de mais indica o <strong> agente responsavel</strong> e <strong>activa os agentes</strong> para começar a monotorizar encomendas de melhor forma.
                </p> 
                <p>Nao precisa de fazer nada si tudo esta correcto, caso acontrario corrija a informaçao e guarda a alteraçao</p>
            </div><!--.header-content-->
       </div><!--.header-container-->

        <div class="body-container-admin">

            <div class="div-form dados-activacao">
                activacao
            </div><!--.div-form dados-activacao -->

            <div class="div-form dados-responsavel">
                
                <h3>Indica o responsavel da sua agencia</h3>   
                    
                <form method="post" action="">
            
                    <div class="form-group">
                        <div class="col-label">
                            <label for="responsavel">Agente Responsavel </label>
                        </div><!--.col-label-->
                        <div class="col-select">
                            <select name="responsavel" id="responsavel">
                                <option value="escolher"> Escolher agente</option>
                                <option value="">Agente 1</option>
                                <option value="">agente 2</option>
                            </select>
                        </div><!--.col-select-->
                    </div><!--.form-group-->

                    <button type="submit" class="btn-registo" name="send">Registar-se</button>

                </form>

            </div><!--.div-form dados-responsavel -->

            <div class="div-form dados-agencia">
                <h3>Dados da agencia</h3>

                <form action="">
                    
                    <div class="form-group">
                        <div class="col-label">
                            <label for="nome_agencia">Nome da agencia</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input value="<?= $_SESSION["nome_agencia"] ?>" type="text" id="nome_agencia" name="nome_agencia" required minlength="6" maxlength="120">
                        </div><!--.col-input-->
                    </div><!--.form-group-->
                    <div class="form-group">
                        <div class="col-label">
                            <label for="descricao">Descriçao da agencia</label>
                        </div><!--.col-label-->
                        <div class="col-textarea">
                            <textarea name="descricao" id="descricao" cols="25" rows="8" minlength="60" required><?= $_SESSION["descricao"] ?></textarea>
                        </div><!--.col-textarea--> 
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="imagem_agencia">Imagem da agencia </label>
                        </div><!--.col-label-->
                        <div class="col-input-file">
                            <input type="file" id="imagem_agencia" name="imagem_agencia" accept="image/*" required>
                            <div class="wrap-img"> 
                                <img src="../assets/images/img-agencias/<?= $_SESSION["caminho_img_agencia"] ?>" alt="" class="responsive-img"> 
                            </div><!-- .wrap-img -->
                        </div><!--.col-input-file-->
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="hora_abertura">Hora de Abertura</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input value="<?= $_SESSION["hora_abertura"] ?>" type="text" id="hora_abertura" name="hora_abertura" minlength="3" maxlength="6" required>
                        </div><!--.col-input-->
                        <span></span>
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="hora_fecho">Hora de fecho</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input value="<?= $_SESSION["hora_fecho"] ?>" type="text" id="hora_fecho" name="hora_fecho" minlength="3" maxlength="6" required>
                        </div><!--.col-input-->
                        <span></span>
                    </div><!--.form-group-->          

                    <div class="btn-registo-wrap">
                        <button type="submit" class="btn-registo" name="send">Guardar Alteraçao</button>
                    </div>
    
                </form>

            </div><!--.div-form dados-agencia -->

            <div class="div-form dados-conta">
                <h3>Dados da Conta de acesso da agencia</h3>

                <form action="">

                    <div class="form-group">
                        <div class="col-label">
                            <label for="username">Nome de Utilisador </label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input value="<?= $_SESSION["nome_utilisador"] ?>" type="text" id="username" name="username" minlength="6" maxlength="30" required >
                        </div><!--.col-input-->
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="email">Email</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input value="<?= $_SESSION["email_utilisador"] ?>" type="email" id="email" name="email" minlength="8" maxlength="252" required>
                        </div><!--.col-input-->
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="perguntaSecreta">Pergunta Secreta</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input value="<?= $_SESSION["perguntaSecreta"] ?>" type="text" id="respostaSecreta" name="respostaSecreta" minlength="1" maxlength="30" required disabled>
                        </div><!--.col-input-->
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="respostaSecreta">Resposta Secreta</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input value="<?= $_SESSION["respostaSecreta"] ?>" type="text" id="respostaSecreta" name="respostaSecreta" minlength="1" maxlength="30" required>
                        </div><!--.col-input-->
                    </div><!--.form-group-->

                    <div class="form-group">
                        <button type="submit" class="btn-registo" name="send">Guardar alteraçao</button>
                    </div>

                </form>

                
            </div><!--.div-form dados-conta -->

            <div class="div-form dados-endereco">
                
                <h3>Endereço da Agencia</h3>

                <form action="">

                    <div class="form-group">
                        <div class="col-label">
                            <label for="pais">Pais</label>
                        </div><!--.col-label-->
                        <div class="col-select">
                            <select name="pais" id="pais">
                                <?php                                 
                                    foreach($paises as $pais){
                                        $selected = "";
                                        if($pais["codigo"] === $_SESSION["pais"]){
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
                            <label for="cidade">Cidade</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input value="<?= $_SESSION["cidade"] ?>" type="text" id="cidade" name="cidade" placeholder="Barreiro" minlength="4" maxlength="60">
                        </div><!--.col-input-->
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="adresso">Adresso</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input value="<?= $_SESSION["adresso"] ?>" type="text" id="adresso" name="adresso"   minlength="8" maxlength="120">
                        </div><!--.col-input-->
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="codigo_postal">Codigo postal</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input value="<?= $_SESSION["codigo_postal"] ?>" type="text" id="codigo_postal" name="codigo_postal"   minlength="4" maxlength="20">
                        </div><!--.col-input-->
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="email">Email</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input value="<?= $_SESSION["email_agencia"] ?>" type="email" id="email" name="email"   minlength="8" maxlength="252">
                        </div><!--.col-input-->
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="num_telefone">Telefone</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input value="<?= $_SESSION["num_telefone"] ?>" type="text" id="num_telefone" name="num_telefone"  minlength="7" maxlength="20" required>
                        </div><!--.col-input-->  
                    </div><!--.form-group-->

                    <div class="form-group">
                        <button type="submit" class="btn-registo" name="send">Guardar alteraçao</button>
                        <button type="submit" class="btn-registo" name="send">Adicionar um outro adresso</button>
                    </div>

                </form>

            </div><!--.div-form dados-endereco -->

            <div class="div-form dados-agente1">
            
                <h3>Dados de agente <?= $_SESSION["nome_agente"] ?></h3>

                <form method="post" action="<?php echo ROOT; ?>/alterar/agente" enctype="multipart/form-data">
                    <p>Guardar os dados depois de fazer alguma alteraçao.</p>

                    <div class="form-group">
                        <div class="col-label">
                            <label for="nome_agente">Nome da agente</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input value="<?= $_SESSION["nome_agente"] ?>" type="text" id="nome_agente" name="nome_agente" placeholder="ex: Bacar Nhabali" required minlength="6" maxlength="60">
                        </div><!--.col-input-->
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="imagem_agente">Avatar do agente</label>
                        </div><!--.col-label-->
                        <div class="col-input-file">
                            <input type="file" id="imagem_agente" name="imagem_agente" accept="image/*">
                            <div class="wrap-img"> 
                                <img src="../assets/images/img-agentes/<?= $_SESSION["caminho_img_agente"] ?>" alt="" class="responsive-img"> 
                            </div><!-- .wrap-img -->
                        </div><!--.col-input-file-->
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="data_nascimento">Data de Nascemento</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input value="<?= $_SESSION["data_nascimento"] ?>" type="date" name="data_nascimento" id="data_nascimento" required>
                        </div><!--.col-textarea-->
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="lugar_nascimento">Lugar de Nascimento</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input value="<?= $_SESSION["lugar_nascimento"] ?>" type="text" id="lugar_nascimento" name="lugar_nascimento" minlength="3" maxlength="60" required>
                        </div><!--.col-input-->
                        <span></span>
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="numero_bi">Numero de Identificaçao</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input value="<?= $_SESSION["numero_bi"] ?>" type="text" id="numero_bi" name="numero_bi" minlength="3" maxlength="14" required>
                        </div><!--.col-input-->
                        <span></span>
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="genero">Genero</label>
                        </div><!--.col-label-->
                        <div class="col-input genero-style">
                            <input type="checkbox" name="masculino" id="masculino" <?php if($_SESSION["genero"] == "M"){ echo "checked";} ?> >
                            <label for="masculino"> M </label>
                            <input type="checkbox" name="feminino" id="feminino" <?php if($_SESSION["genero"] == "F"){ echo "checked";} ?> >
                            <label for="feminino"> F </label>
                        </div><!--.col-input-->
                        <span></span>
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="pais">Pais de Residencia</label>
                        </div><!--.col-label-->
                        <div class="col-select">
                            <select name="pais" id="paisSelecionado">
                                <!-- <option value="escolha"> Escolha o pais</option> -->
                                <?php                                 
                                    foreach($paises as $pais){
                                        $selected = "";
                                        if($pais["codigo"] === $_SESSION["pais_agente"]){
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
                            <label for="cidade">Cidade</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input value="<?= $_SESSION["cidade_agente"] ?>" type="text" id="cidade" name="cidade" value="<?= $_SESSION["cidade"]; ?>" minlength="4" maxlength="60">
                        </div><!--.col-input-->
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="adresso">Adresso</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input value="<?= $_SESSION["adresso_agente"] ?>" type="text" id="adresso" name="adresso" value="<?= $_SESSION["adresso"]; ?>" minlength="8" maxlength="120">
                        </div><!--.col-input-->
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="codigo_postal">Codigo postal</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input value="<?= $_SESSION["codigo_postal_agente"] ?>" type="text" id="codigo_postal" name="codigo_postal" value="<?= $_SESSION["codigo_postal"]; ?>" minlength="4" maxlength="20">
                        </div><!--.col-input-->
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="email">Email</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input value="<?= $_SESSION["email_agente"] ?>" type="email" id="email" name="email"  minlength="8" maxlength="252">
                        </div><!--.col-input-->
                        <span></span>
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="num_telefone">Telefone</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input value="<?= $_SESSION["num_telefone_agente"] ?>" type="text" id="num_telefone" name="num_telefone" value="<?= $_SESSION["num_telefone"]; ?>"  minlength="7" maxlength="20" >
                        </div><!--.col-input-->
                        <span></span>
                    </div><!--.form-group-->

                    <div class="btn-registo-wrap">
                        <button type="submit" class="btn-registo" name="send">Guardar alteraçao</button>
                    </div>

                </form>

            </div><!--.div-form dados-agente1 -->

            <div class="div-form dados-agente2">
                
                <h3>Dados de agente <?= $_SESSION["nome_agente2"] ?></h3>

                <form method="post" action="<?php echo ROOT; ?>/alterar/agente" enctype="multipart/form-data">
                    <p>Guardar os dados depois de fazer alguma alteraçao.</p>

                    <div class="form-group">
                        <div class="col-label">
                            <label for="nome_agente">Nome da agente</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input value="<?= $_SESSION["nome_agente2"] ?>" type="text" id="nome_agente" name="nome_agente" placeholder="ex: Bacar Nhabali" required minlength="6" maxlength="60">
                        </div><!--.col-input-->
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="imagem_agente">Avatar do agente</label>
                        </div><!--.col-label-->
                        <div class="col-input-file">
                            <input type="file" id="imagem_agente" name="imagem_agente" accept="image/*" required>
                            <div class="wrap-img"> 
                                <img src="../assets/images/img-agentes/<?= $_SESSION["caminho_img_agente2"] ?>" alt="" class="responsive-img"> 
                            </div><!-- .wrap-img -->
                        </div><!--.col-input-file-->
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="data_nascimento">Data de Nascemento</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input value="<?= $_SESSION["data_nascimento2"] ?>" type="date" name="data_nascimento" id="data_nascimento" required>
                        </div><!--.col-textarea-->
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="lugar_nascimento">Lugar de Nascimento</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input value="<?= $_SESSION["lugar_nascimento2"] ?>" type="text" id="lugar_nascimento" name="lugar_nascimento" minlength="3" maxlength="60" required>
                        </div><!--.col-input-->
                        <span></span>
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="numero_bi">Numero de Identificaçao</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input value="<?= $_SESSION["numero_bi2"] ?>" type="text" id="numero_bi" name="numero_bi" minlength="3" maxlength="14" required>
                        </div><!--.col-input-->
                        <span></span>
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="genero">Genero</label>
                        </div><!--.col-label-->
                        <div class="col-input genero-style">
                            <input type="checkbox" name="masculino" id="masculino" <?php if($_SESSION["genero2"] == "M"){ echo "checked";} ?> >
                            <label for="masculino"> M </label>
                            <input type="checkbox" name="feminino" id="feminino" <?php if($_SESSION["genero2"] == "F"){ echo "checked";} ?> >
                            <label for="feminino"> F </label>
                        </div><!--.col-input-->
                        <span></span>
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="pais">Pais de Residencia</label>
                        </div><!--.col-label-->
                        <div class="col-select">
                            <select name="pais" id="paisSelecionado">
                                <!-- <option value="escolha"> Escolha o pais</option> -->
                                <?php                                 
                                    foreach($paises as $pais){
                                        $selected = "";
                                        if($pais["codigo"] === $_SESSION["pais_agente2"]){
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
                            <label for="cidade">Cidade</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input value="<?= $_SESSION["cidade_agente2"] ?>" type="text" id="cidade" name="cidade" value="<?= $_SESSION["cidade"]; ?>" minlength="4" maxlength="60">
                        </div><!--.col-input-->
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="adresso">Adresso</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input value="<?= $_SESSION["adresso_agente2"] ?>" type="text" id="adresso" name="adresso" value="<?= $_SESSION["adresso"]; ?>" minlength="8" maxlength="120">
                        </div><!--.col-input-->
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="codigo_postal">Codigo postal</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input value="<?= $_SESSION["codigo_postal_agente2"] ?>" type="text" id="codigo_postal" name="codigo_postal" value="<?= $_SESSION["codigo_postal"]; ?>" minlength="4" maxlength="20">
                        </div><!--.col-input-->
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="email">Email</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input value="<?= $_SESSION["email_agente2"] ?>" type="email" id="email" name="email"  minlength="8" maxlength="252">
                        </div><!--.col-input-->
                        <span></span>
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="num_telefone">Telefone</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input value="<?= $_SESSION["num_telefone_agente2"] ?>" type="text" id="num_telefone" name="num_telefone" value="<?= $_SESSION["num_telefone"]; ?>"  minlength="7" maxlength="20" >
                        </div><!--.col-input-->
                        <span></span>
                    </div><!--.form-group-->

                    <div class="btn-registo-wrap">
                        <button type="submit" class="btn-registo" name="send">Guardar alteraçao</button>
                    </div>

                </form>

            </div><!--.div-form dados-agente2 -->

        </div><!--.body-container-admin -->


    </div><!--.main-container-->

</body>
</html>