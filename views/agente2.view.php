<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/normalize.css">
    <link rel="stylesheet" href="../assets/css/global-style.css">
    <title>criar agente</title>
</head>
<body>
  <header class="nav-header">  
    <?php
        if(isset($message)){
            echo '<p role="alert">'.$message.'</p>';
        }

        require("views/templates/menu.acesso.php");
    ?>
  </header>
<main>
        <div class="main-container-sign">
            <div class="header-container-sign">
                <div class="header-content-sign">
                    <article>
                        <h1>Parabens acabaste de criar agente, <?php  echo $_SESSION["nome_agente"]; ?> para sua agencia, estas na ultima fassi deste processo</h1>
                        <p>Estas na 4 etapa da criacao da sua agencia oluptatum agni quidem similique architecto, id velit aperiam.</p>
                    </article>
                </div><!--.header-content-->
                    
                </div><!--.header-container-->
        
            <div class="body-container-sign" >
                <div class="body content">

                    <div class="container-registo-form">
                        <div class="header-form">
                            <ol>
                                <li>4 informacoes do seu segundo agente</li>
                            </ol>
                        </div><!--.header-form-->
                     <div class="registo-form" >

                        <form method="post" action="<?php echo ROOT; ?>/registar/agente2" enctype="multipart/form-data">
            
                            <h4>Criar agente de correspondencia</h4>
                            <p>Os campos de endereço nao sao obrigatorios.</p>

                            <fieldset>
                                <legend>Informaçao da agente</legend>

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
                                    <span>por momento Busea actua so nos paises que fazem parte de CPLP excepto no Brazil</span>
                                </div><!--.form-group-->

                                <div class="form-group">
                                    <div class="col-label">
                                        <label for="cidade">Cidade</label>
                                    </div><!--.col-label-->
                                    <div class="col-input">
                                        <input type="text" id="cidade" name="cidade" minlength="4" maxlength="60">
                                    </div><!--.col-input-->
                                    
                                </div><!--.form-group-->
                                <div class="form-group">
                                    <div class="col-label">
                                        <label for="adresso">Adresso</label>
                                    </div><!--.col-label-->
                                    <div class="col-input">
                                        <input type="text" id="adresso" name="adresso"  minlength="8" maxlength="120">
                                    </div><!--.col-input-->
                                    <span>Entrar adresso completo (codigo postal si for o caso).</span>
                                </div><!--.form-group-->

                                <div class="form-group">
                                    <div class="col-label">
                                        <label for="codigo_postal">Codigo postal</label>
                                    </div><!--.col-label-->
                                    <div class="col-input">
                                        <input type="text" id="codigo_postal" name="codigo_postal"  minlength="4" maxlength="20">
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
                                </div--><!--.form-group-->

                                <div class="form-group">
                                    <div class="col-label">
                                        <label for="num_telefone">Telefone</label>
                                    </div><!--.col-label-->
                                    <div class="col-input">
                                        <input type="text" id="num_telefone" name="num_telefone"  minlength="7" maxlength="20" >
                                    </div><!--.col-input-->
                                    <span></span>
                                </div><!--.form-group-->
                                
                            </fieldset><!--.informaçao de contacto-->

                              <div class="btn-registo-wrap">
                                <button type="submit" class="btn-registo" name="send">Registar-se</button>
                            </div>
        
                        </form>
                    </div><!--.registo-form-->
                </div><!--.container-registo-form-->

                </div><!--body-content-->
            </div><!--.body-container-->
        </div><!--.main-container-->
        
    </main>
    
</body>
</html>