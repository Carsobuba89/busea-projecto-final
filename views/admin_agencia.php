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

    <?php
        echo "<pre>";    print_r( $_SESSION); echo "</pre>";
    ?>

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
                            <input type="text" id="nome_agencia" name="nome_agencia" placeholder="ex: Agencia Bacar Nhabali" required minlength="6" maxlength="120">
                        </div><!--.col-input-->
                    </div><!--.form-group-->
                    <div class="form-group">
                        <div class="col-label">
                            <label for="descricao">Descriçao da agencia</label>
                        </div><!--.col-label-->
                        <div class="col-textarea">
                            <textarea name="descricao" id="descricao" cols="25" rows="8" minlength="60" required></textarea>
                        </div><!--.col-textarea-->
                        
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="imagem_agencia">Imagem da agencia </label>
                        </div><!--.col-label-->
                        <div class="col-input-file">
                            <input type="file" id="imagem_agencia" name="imagem_agencia" accept="image/*" required>
                        </div><!--.col-input-file-->
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="hora_abertura">Hora de Abertura</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input type="text" id="hora_abertura" name="hora_abertura" minlength="3" maxlength="6" required>
                        </div><!--.col-input-->
                        <span></span>
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="hora_fecho">Hora de fecho</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input type="text" id="hora_fecho" name="hora_fecho" minlength="3" maxlength="6" required>
                        </div><!--.col-input-->
                        <span></span>
                    </div><!--.form-group-->          

                    <div class="btn-registo-wrap">
                        <button type="submit" class="btn-registo" name="send">Registar-se</button>
                    </div>
    
                </form>

            </div><!--.div-form dados-agencia -->

            <div class="div-form dados-conta">
                <h3>Dados da Conta de agencia</h3>

                <form action="">

                    <div class="form-group">
                        <div class="col-label">
                            <label for="username">Nome de Utilisador </label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input type="text" id="username" name="username" placeholder="ex: Carso89" minlength="6" maxlength="30" required>
                        </div><!--.col-input-->
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="email">Email</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input type="email" id="email" name="email" placeholder="carsobuba@gmail.com" minlength="8" maxlength="252" required>
                        </div><!--.col-input-->
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="perguntaSecreta">Pergunta Secreta</label>
                        </div><!--.col-label-->
                        <div class="col-select">
                            <select name="perguntaSecreta" id="perguntaSecreta">
                                <option value="escolher"> Escolher um pergunta secreta</option>
                                <option value="marcaTelemovel">qual e a primeira marca de telemovel que usaste</option>
                                <option value="lugarNascimento">qual o nome do lugar onde nasceste</option>
                                <option value="nomeEscola">Como se chama a escola primaria que frequentaste</option>
                                <option value="nomeMae">qual e o primeiro nome da sua mae</option>
                                <option value="numeroSapato">qual e o numero dos seus calçados favoritos</option>
                            </select>
                        </div><!--.col-select-->
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="respostaSecreta">Resposta Secreta</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input type="text" id="respostaSecreta" name="respostaSecreta" minlength="1" maxlength="30" required>
                        </div><!--.col-input-->
                    </div><!--.form-group-->

                    <div class="btn-registo-wrap">
                        <button type="submit" class="btn-registo" name="send">Registar-se</button>
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

                    <div class="form-group">
                        <div class="col-label">
                            <label for="cidade">Cidade</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input type="text" id="cidade" name="cidade" placeholder="Barreiro" minlength="4" maxlength="60">
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

                    <div class="form-group">
                        <div class="col-label">
                            <label for="email">Email</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input type="email" id="email" name="email"   minlength="8" maxlength="252">
                        </div><!--.col-input-->
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="num_telefone">Telefone</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input type="text" id="num_telefone" name="num_telefone"  minlength="7" maxlength="20" required>
                        </div><!--.col-input-->  
                    </div><!--.form-group-->

                    <div class="btn-registo-wrap">
                        <button type="submit" class="btn-registo" name="send">Registar-se</button>
                    </div>

                </form>

            </div><!--.div-form dados-endereco -->

            <div class="div-form dados-agente1">
            
            <h3>Agente Aissatu So, Portugal</h3>

                <form method="post" action="<?php echo ROOT; ?>/alterar/agente" enctype="multipart/form-data">
                    <p>Guardar os dados depois de fazer alguma alteraçao.</p>

                    <div class="form-group">
                        <div class="col-label">
                            <label for="nome_agente">Nome da agente</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input type="text" id="nome_agente" name="nome_agente" placeholder="ex: Bacar Nhabali" required minlength="6" maxlength="60">
                        </div><!--.col-input-->
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="imagem_agente">Avatar do agente</label>
                        </div><!--.col-label-->
                        <div class="col-input-file">
                            <input type="file" id="imagem_agente" name="imagem_agente" accept="image/*" required>
                        </div><!--.col-input-file-->
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="data_nascimento">Data de Nascemento</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input type="date" name="data_nascimento" id="data_nascimento" value="1989-05-09" required>
                        </div><!--.col-textarea-->
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="lugar_nascimento">Lugar de Nascimento</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input type="text" id="lugar_nascimento" name="lugar_nascimento" minlength="3" maxlength="60" required>
                        </div><!--.col-input-->
                        <span></span>
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="numero_bi">Numero de Identificaçao</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input type="text" id="numero_bi" name="numero_bi" minlength="3" maxlength="14" required>
                        </div><!--.col-input-->
                        <span></span>
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="genero">Genero</label>
                        </div><!--.col-label-->
                        <div class="col-input genero-style">
                            <input type="checkbox" name="masculino" id="masculino" >
                            <label for="masculino"> M </label>
                            <input type="checkbox" name="feminino" id="feminino" >
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
                        <span>por momento Busea actua so nos paises que fazem parte de CPLP excepto no Brazil</span>
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="cidade">Cidade</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input type="text" id="cidade" name="cidade" value="<?= $_SESSION["cidade"]; ?>" minlength="4" maxlength="60">
                        </div><!--.col-input-->
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="adresso">Adresso</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input type="text" id="adresso" name="adresso" value="<?= $_SESSION["adresso"]; ?>" minlength="8" maxlength="120">
                        </div><!--.col-input-->
                        <span>Entrar adresso completo (codigo postal si for o caso).</span>
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="codigo_postal">Codigo postal</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input type="text" id="codigo_postal" name="codigo_postal" value="<?= $_SESSION["codigo_postal"]; ?>" minlength="4" maxlength="20">
                        </div><!--.col-input-->
                        <span>Entrar adresso completo (codigo postal si for o caso).</span>
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="email">Email</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input type="email" id="email" name="email"  minlength="8" maxlength="252">
                        </div><!--.col-input-->
                        <span></span>
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="num_telefone">Telefone</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input type="text" id="num_telefone" name="num_telefone" value="<?= $_SESSION["num_telefone"]; ?>"  minlength="7" maxlength="20" >
                        </div><!--.col-input-->
                        <span></span>
                    </div><!--.form-group-->

                    <div class="btn-registo-wrap">
                        <button type="submit" class="btn-registo" name="send">Registar-se</button>
                    </div>

                </form>

            </div><!--.div-form dados-agente1 -->

            <div class="div-form dados-agente2">
                
                <h3>Agente Duarte Correia, Portugal</h3>

                <form method="post" action="<?php echo ROOT; ?>/alterar/agente" enctype="multipart/form-data">
                    <p>Guardar os dados depois de fazer alguma alteraçao.</p>

                    <div class="form-group">
                        <div class="col-label">
                            <label for="nome_agente">Nome da agente</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input type="text" id="nome_agente" name="nome_agente" placeholder="ex: Bacar Nhabali" required minlength="6" maxlength="60">
                        </div><!--.col-input-->
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="imagem_agente">Avatar do agente</label>
                        </div><!--.col-label-->
                        <div class="col-input-file">
                            <input type="file" id="imagem_agente" name="imagem_agente" accept="image/*" required>
                        </div><!--.col-input-file-->
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="data_nascimento">Data de Nascemento</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input type="date" name="data_nascimento" id="data_nascimento" value="1989-05-09" required>
                        </div><!--.col-textarea-->
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="lugar_nascimento">Lugar de Nascimento</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input type="text" id="lugar_nascimento" name="lugar_nascimento" minlength="3" maxlength="60" required>
                        </div><!--.col-input-->
                        <span></span>
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="numero_bi">Numero de Identificaçao</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input type="text" id="numero_bi" name="numero_bi" minlength="3" maxlength="14" required>
                        </div><!--.col-input-->
                        <span></span>
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="genero">Genero</label>
                        </div><!--.col-label-->
                        <div class="col-input genero-style">
                            <input type="checkbox" name="masculino" id="masculino" >
                            <label for="masculino"> M </label>
                            <input type="checkbox" name="feminino" id="feminino" >
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
                        <span>por momento Busea actua so nos paises que fazem parte de CPLP excepto no Brazil</span>
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="cidade">Cidade</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input type="text" id="cidade" name="cidade" value="<?= $_SESSION["cidade"]; ?>" minlength="4" maxlength="60">
                        </div><!--.col-input-->
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="adresso">Adresso</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input type="text" id="adresso" name="adresso" value="<?= $_SESSION["adresso"]; ?>" minlength="8" maxlength="120">
                        </div><!--.col-input-->
                        <span>Entrar adresso completo (codigo postal si for o caso).</span>
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="codigo_postal">Codigo postal</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input type="text" id="codigo_postal" name="codigo_postal" value="<?= $_SESSION["codigo_postal"]; ?>" minlength="4" maxlength="20">
                        </div><!--.col-input-->
                        <span>Entrar adresso completo (codigo postal si for o caso).</span>
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="email">Email</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input type="email" id="email" name="email"  minlength="8" maxlength="252">
                        </div><!--.col-input-->
                        <span></span>
                    </div><!--.form-group-->

                    <div class="form-group">
                        <div class="col-label">
                            <label for="num_telefone">Telefone</label>
                        </div><!--.col-label-->
                        <div class="col-input">
                            <input type="text" id="num_telefone" name="num_telefone" value="<?= $_SESSION["num_telefone"]; ?>"  minlength="7" maxlength="20" >
                        </div><!--.col-input-->
                        <span></span>
                    </div><!--.form-group-->

                    <div class="btn-registo-wrap">
                        <button type="submit" class="btn-registo" name="send">Registar-se</button>
                    </div>

                </form>

            </div><!--.div-form dados-agente2 -->

        </div><!--.body-container-admin -->


    </div><!--.main-container-->

</body>
</html>