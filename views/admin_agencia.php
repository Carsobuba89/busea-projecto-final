<html lang="pt">
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
                <h2>Painel de administraçao da agencia</h2>
                <p>
                    Aqui pode alterar os dados da agencia, enderço, conta da agencia e os dados dos agentes activos si necessario, tambem pode alterar o <strong> agente responsavel</strong> e <strong>activar ou desactivar os agentes</strong> da sua agencia.
                </p> 
                <p>Depois de qualquer alteraçao deve salvar os dados em clicar no butao de Guardar Alteraçao </p>
            </div><!--.header-content-->
       </div><!--.header-container-->

        <div class="body-container-admin">

            <div class="div-form dados-activacao">

                <h3>Activar ou Desactivar agente</h3>
                <form method="post" action="<?= ROOT ?>/admin_agencias/activacaoAdmin">
            
                    <div class="form-group">
                        <div class="col-label">
                            <label for="codigo_agente">Activaçao do Agente </label>
                        </div><!--.col-label-->
                        <div class="col-select">
                            <select name="codigo_agente" id="codigo_agente">
                                <option value="escolher"> Escolher agente </option>
                                <?php
                                    foreach($agentesAgencia as $agenteAgencia){
                                        echo '
                                         <option value="'.$agenteAgencia["codigo_agente"].'">'.$agenteAgencia["nome"].'</option>
                                        ';
                                    }           
                                ?>
                            </select>
                        </div><!--.col-select-->
                    </div><!--.form-group-->

                    <button type="submit" class="btn-registo" name="activar">Activar</button>
                    <button type="submit" class="btn-registo" name="desactivar">Desactivar</button>

                </form>

            </div><!--.div-form dados-activacao -->

            <div class="div-form dados-responsavel">
                
                <h3>Alterar o responsavel da sua agencia</h3>   
                    
                <form method="post" action="<?= ROOT ?>/admin_agencias/responsabilizacaoAdmin">
            
                    <div class="form-group">
                        <div class="col-label">
                            <label for="codigo_agente">Indicar Agente Responsavel</label>
                        </div><!--.col-label-->
                        <div class="col-select">
                            <select name="codigo_agente" id="codigo_agente">
                            <option value="escolher"> Escolher agente Responsavel </option>
                                <?php
                                    foreach($agentesAgencia as $agenteAgencia){
                                        echo '
                                         <option value="'.$agenteAgencia["codigo_agente"].'">'.$agenteAgencia["nome"].'</option>
                                        ';
                                    }
                                ?>
                            </select>
                        </div><!--.col-select-->
                    </div><!--.form-group-->

                    <button type="submit" class="btn-registo" name="responsabilizar">Guardar</button>

                </form>

            </div><!--.div-form dados-responsavel -->

            <div class="div-form dados-agencia-admin">
                <h3>Dados da agencia</h3>

                <form method="post" action="<?= ROOT ?>/admin_agencias/alteracaoDadosAgencia" enctype="multipart/form-data">
                    
                    <div class="form-group">
                        <div class="col-label">
                            <label for="nome_agencia">Nome da agencia</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input value="<?= $agencia["nome_agencia"] ?>" type="text" id="nome_agencia" name="nome_agencia" required minlength="6" maxlength="120">
                        </div><!--.col-input-->
                    </div><!--.form-group-->
                    <div class="form-group">
                        <div class="col-label">
                            <label for="descricao">Descriçao da agencia</label>
                        </div><!--.col-label-->
                        <div class="col-textarea">
                            <textarea name="descricao" id="descricao" cols="25" rows="8" minlength="60" required><?= $agencia["descricao_agencia"] ?></textarea>
                        </div><!--.col-textarea--> 
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="imagem_agencia">Imagem da agencia </label>
                        </div><!--.col-label-->
                        <div class="col-input-file">
                            <input type="file" id="imagem_agencia" name="imagem_agencia" accept="image/*">
                            <input type="hidden" name="imagem_agencia_old" value="<?= $agencia["imagem_agencia"] ?>">
                            <div class="wrap-img"> 
                                <img src="../assets/images/img-agencias/<?= $agencia["imagem_agencia"] ?>" alt="" class="responsive-img"> 
                            </div><!-- .wrap-img -->
                        </div><!--.col-input-file-->
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="hora_abertura">Hora de Abertura</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input value="<?= $agencia["hora_abertura"] ?>" type="text" id="hora_abertura" name="hora_abertura" minlength="3" maxlength="6" required>
                        </div><!--.col-input-->
                        <span></span>
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="hora_fecho">Hora de fecho</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input value="<?= $agencia["hora_fecho"] ?>" type="text" id="hora_fecho" name="hora_fecho" minlength="3" maxlength="6" required>
                        </div><!--.col-input-->
                        <span></span>
                    </div><!--.form-group-->          

                    <input type="hidden" name="codigo_agencia" value="<?= $agencia["codigo_agencia"] ?>">
                    <div class="btn-registo-wrap">
                        <button type="submit" class="btn-registo" name="alterarDadosAgencia">Guardar Alteraçao</button>
                    </div>
    
                </form>

            </div><!--.div-form dados-agencia -->

            <div class="div-form dados-conta">
                <h3>Dados atuais da Conta de acesso da agencia</h3>

                <form method="post" action="<?= ROOT ?>/acesso/alteracaoConta">

                    <div class="form-group">
                        <div class="col-label">
                            <label for="username">Nome de Utilisador </label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input value="<?= $conta["nome_utilisador"] ?>" type="text" id="username" name="username" minlength="6" maxlength="30" required >
                        </div><!--.col-input-->
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="email">Email</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input value="<?= $conta["email"] ?>" type="email" id="email" name="email" minlength="8" maxlength="252" required>
                        </div><!--.col-input-->
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="perguntaSecreta">Pergunta Secreta</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input value="<?= $conta["pergunta_secreta"]  ?>" type="text" id="perguntaSecreta" name="perguntaSecreta" minlength="1" maxlength="30" required>
                        </div><!--.col-input-->
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="respostaSecreta">Resposta Secreta</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input value="<?= $conta["resposta_secreta"] ?>" type="text" id="respostaSecreta" name="respostaSecreta" minlength="1" maxlength="30" required>
                        </div><!--.col-input-->
                    </div><!--.form-group-->

                    <div class="form-group">
                        <button type="submit" class="btn-registo" name="alterarConta">Guardar alteraçao</button>
                    </div>

                </form>
                
            </div><!--.div-form dados-conta -->

            <div class="div-form dados-endereco">
                
                <h3>Atualisar o endereço da Agencia principal</h3>

                <form method="post" action="<?php ROOT ?>/admin_agencias/alteracaoEndereco">

                    <div class="form-group">
                        <div class="col-label">
                            <label for="pais">Localizaçao da agencia principal</label>
                        </div><!--.col-label-->
                        <div class="col-select">
                            <select name="pais" id="pais">
                                <?php                                 
                                    foreach($paises as $pais){
                                        $selected = "";
                                        if($pais["codigo"] === $adresso["pais"]){
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
                            <input value="<?= $adresso["cidade"] ?>" type="text" id="cidade" name="cidade"  minlength="4" maxlength="60">
                        </div><!--.col-input-->
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="adresso">Adresso</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input value="<?= $adresso["adresso"] ?>" type="text" id="adresso" name="adresso"   minlength="8" maxlength="120">
                        </div><!--.col-input-->
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="codigo_postal">Codigo postal</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input value="<?= $adresso["codigo_postal"] ?>" type="text" id="codigo_postal" name="codigo_postal"   minlength="4" maxlength="20">
                        </div><!--.col-input-->
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="email">Email</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input value="<?= $adresso["email"] ?>" type="email" id="email" name="email"   minlength="8" maxlength="252">
                        </div><!--.col-input-->
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="num_telefone">Telefone</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input value="<?= $adresso["telefone"] ?>" type="text" id="num_telefone" name="num_telefone"  minlength="7" maxlength="20" required>
                        </div><!--.col-input-->  
                    </div><!--.form-group-->

                    <input type="hidden" name="codigo_adresso" value="<?= $adresso["codigo"] ?>">

                    <div class="form-group">
                        <button type="submit" class="btn-registo" name="alterarEndereco">Guardar alteraçao</button>
                        <button type="submit" class="btn-registo" name="guardarNovoEndereco" disabled>Adicionar um outro Endereço</button>
                    </div>

                </form>

            </div><!--.div-form dados-endereco -->

            <div class="div-form dados-agente1">
            
                <h3>Dados de agente <?= $agente[0]["nome"] ?></h3>

                <form method="post" action="<?php echo ROOT; ?>/agentes/alteracaoAgente" enctype="multipart/form-data">
                    <p>Guardar os dados depois de fazer alguma alteraçao.</p>

                    <div class="form-group">
                        <div class="col-label">
                            <label for="nome_agente">Nome da agente</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input value="<?= $agente[0]["nome"] ?>" type="text" id="nome_agente" name="nome_agente" placeholder="ex: Bacar Nhabali" required minlength="6" maxlength="60">
                        </div><!--.col-input-->
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="imagem_agente">Carregar a imagem do agente</label>
                        </div><!--.col-label-->
                        <div class="col-input-file">
                            <input type="file" id="imagem_agente" name="imagem_agente" accept="image/*">
                            <input type="hidden" name="imagem_agente_old" value="<?= $agente[0]["avatar"] ?>">
                            <div class="wrap-img"> 
                                <img src="../assets/images/img-agentes/<?= $agente[0]["avatar"] ?>" alt="" class="responsive-img"> 
                            </div><!-- .wrap-img -->
                        </div><!--.col-input-file-->
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="data_nascimento">Data de Nascemento</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input value="<?= $agente[0]["data_nascimento"] ?>" type="date" name="data_nascimento" id="data_nascimento" required>
                        </div><!--.col-textarea-->
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="lugar_nascimento">Lugar de Nascimento</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input value="<?= $agente[0]["lugar_nascimento"] ?>" type="text" id="lugar_nascimento" name="lugar_nascimento" minlength="3" maxlength="60" required>
                        </div><!--.col-input-->
                        <span></span>
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="numero_bi">Numero de Identificaçao</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input value="<?= $agente[0]["num_doc_identificacao"] ?>" type="text" id="numero_bi" name="numero_bi" minlength="3" maxlength="14" required>
                        </div><!--.col-input-->
                        <span></span>
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="genero">Genero</label>
                        </div><!--.col-label-->
                        <div class="col-input genero-style">
                            <input type="checkbox" name="masculino" id="masculino" <?php if($agente[0]["genero"] == "M"){ echo "checked";} ?> >
                            <label for="masculino"> M </label>
                            <input type="checkbox" name="feminino" id="feminino" <?php if($agente[0]["genero"] == "F"){ echo "checked";} ?> >
                            <label for="feminino"> F </label>
                        </div><!--.col-input-->
                        <span></span>
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="pais">Pais da Residencia</label>
                        </div><!--.col-label-->
                        <div class="col-select">
                            <select name="pais" id="pais">
                                <!-- <option value="escolha"> Escolha o pais</option> -->
                                <?php                                 
                                    foreach($paises as $pais){
                                        $selected = "";
                                        if($pais["codigo"] === $agente[0]["pais"]){
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
                            <input value="<?= $agente[0]["cidade"] ?>" type="text" id="cidade" name="cidade"  minlength="4" maxlength="60">
                        </div><!--.col-input-->
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="adresso">Adresso</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input value="<?= $agente[0]["adresso"] ?>" type="text" id="adresso" name="adresso"  minlength="8" maxlength="120">
                        </div><!--.col-input-->
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="codigo_postal">Codigo postal</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input value="<?= $agente[0]["codigo_postal"] ?>" type="text" id="codigo_postal" name="codigo_postal"  minlength="4" maxlength="20">
                        </div><!--.col-input-->
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="email">Email</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input value="<?= $agente[0]["email"] ?>" type="email" id="email" name="email"  minlength="8" maxlength="252">
                        </div><!--.col-input-->
                        <span></span>
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="num_telefone">Telefone</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input value="<?= $agente[0]["numero_telefone"] ?>" type="text" id="num_telefone" name="num_telefone"  minlength="7" maxlength="20" >
                        </div><!--.col-input-->
                        <span></span>
                    </div><!--.form-group-->

                    <input type="hidden" name="codigo_agente" value="<?= $agente[0]["codigo_agente"] ?>">
                    <div class="btn-registo-wrap">
                        <button type="submit" class="btn-registo" name="alterarAgente">Guardar alteraçao</button>
                    </div>

                </form>

            </div><!--.div-form dados-agente1 -->

            <div class="div-form dados-agente2">
                
                <h3>Dados de agente <?= $agente[1]["nome"] ?></h3>

                <form method="post" action="<?php echo ROOT; ?>/agentes/alteracaoAgente2" enctype="multipart/form-data">
                    <p>Guardar os dados depois de fazer alguma alteraçao.</p>

                    <div class="form-group">
                        <div class="col-label">
                            <label for="nome_agente">Nome da agente</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input value="<?= $agente[1]["nome"] ?>" type="text" id="nome_agente" name="nome_agente" placeholder="ex: Bacar Nhabali" required minlength="6" maxlength="60">
                        </div><!--.col-input-->
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="imagem_agente">Avatar do agente</label>
                        </div><!--.col-label-->
                        <div class="col-input-file">
                            <input type="file" id="imagem_agente" name="imagem_agente" accept="image/*">
                            <input type="hidden" name="imagem_agente_old" value="<?= $agente[1]["avatar"] ?>">
                            <div class="wrap-img"> 
                                <img src="../assets/images/img-agentes/<?= $agente[1]["avatar"] ?>" alt="" class="responsive-img"> 
                            </div><!-- .wrap-img -->
                        </div><!--.col-input-file-->
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="data_nascimento">Data de Nascemento</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input value="<?= $agente[1]["data_nascimento"] ?>" type="date" name="data_nascimento" id="data_nascimento" required>
                        </div><!--.col-textarea-->
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="lugar_nascimento">Lugar de Nascimento</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input value="<?= $agente[1]["lugar_nascimento"] ?>" type="text" id="lugar_nascimento" name="lugar_nascimento" minlength="3" maxlength="60" required>
                        </div><!--.col-input-->
                        <span></span>
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="numero_bi">Numero de Identificaçao</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input value="<?= $agente[1]["num_doc_identificacao"] ?>" type="text" id="numero_bi" name="numero_bi" minlength="3" maxlength="14" required>
                        </div><!--.col-input-->
                        <span></span>
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="genero">Genero</label>
                        </div><!--.col-label-->
                        <div class="col-input genero-style">
                            <input type="checkbox" name="masculino" id="masculino" <?php if($agente[1]["genero"] == "M"){ echo "checked";} ?> >
                            <label for="masculino"> M </label>
                            <input type="checkbox" name="feminino" id="feminino" <?php if($agente[1]["genero"] == "F"){ echo "checked";} ?> >
                            <label for="feminino"> F </label>
                        </div><!--.col-input-->
                        <span></span>
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="pais">Pais de Residencia</label>
                        </div><!--.col-label-->
                        <div class="col-select">
                            <select name="pais" id="pais">
                                <!-- <option value="escolha"> Escolha o pais</option> -->
                                <?php                                 
                                    foreach($paises as $pais){
                                        $selected = "";
                                        if($pais["codigo"] === $agente[1]["pais"]){
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
                            <input value="<?= $agente[1]["cidade"] ?>" type="text" id="cidade" name="cidade" minlength="4" maxlength="60">
                        </div><!--.col-input-->
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="adresso">Adresso</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input value="<?= $agente[1]["adresso"] ?>" type="text" id="adresso" name="adresso" minlength="8" maxlength="120">
                        </div><!--.col-input-->
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="codigo_postal">Codigo postal</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input value="<?= $agente[1]["codigo_postal"] ?>" type="text" id="codigo_postal" name="codigo_postal" minlength="4" maxlength="20">
                        </div><!--.col-input-->
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="email">Email</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input value="<?= $agente[1]["email"] ?>" type="email" id="email" name="email"  minlength="8" maxlength="252">
                        </div><!--.col-input-->
                        <span></span>
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="num_telefone">Telefone</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input value="<?= $agente[1]["numero_telefone"] ?>" type="text" id="num_telefone" name="num_telefone"  minlength="7" maxlength="20" >
                        </div><!--.col-input-->
                        <span></span>
                    </div><!--.form-group-->

                    <input type="hidden" name="codigo_agente" value="<?= $agente[1]["codigo_agente"] ?>">
                    <div class="btn-registo-wrap">
                        <button type="submit" class="btn-registo" name="alterarAgente2">Guardar alteraçao</button>
                    </div>

                </form>

            </div><!--.div-form dados-agente2 -->

        </div><!--.body-container-admin -->


    </div><!--.main-container-->

</body>
</html>