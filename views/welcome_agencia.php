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
    <title>Bem vindo</title>
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
                    Antes de mais indica o <strong> agente responsavel</strong> e <strong>activa os agentes</strong> para começar a monotorizar Encomendas.
                </p> 
                <p>No caso de algo que queira corrigir clique no butao alterar dados ou no menu gerir agencia</p>
            </div><!--.header-content-->
       </div><!--.header-container-->

        <div class="body-container-admin">

            <div class="div-form1 dados-activacao">
                <h3>Activar ou Desactivar agente</h3>
                <form method="post" action="<?= ROOT ?>/admin_page/activacao">
            
                    <div class="form-group">
                        <div class="col-label">
                            <label for="codigo_agente">Activaçao do Agente </label>
                        </div><!--.col-label-->
                        <div class="col-select">
                            <select name="codigo_agente" id="codigo_agente">
                                <option value="escolher"> Escolher agente </option>
                                <?php
                                    foreach($agentesAgencia as $agente){
                                        echo '
                                         <option value="'.$agente["codigo_agente"].'">'.$agente["nome"].'</option>
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

            <div class="div-form1 dados-responsavel">
       
                <h3>Indica o responsavel da sua agencia</h3>   
                    
                <form method="post" action="<?= ROOT ?>/admin_page/responsabilizacao">
            
                    <div class="form-group">
                        <div class="col-label">
                            <label for="codigo_agente">Indicar Agente</label>
                        </div><!--.col-label-->
                        <div class="col-select">
                            <select name="codigo_agente" id="codigo_agente">
                            <option value="escolher"> Escolher agente Responsavel </option>
                                <?php
                                    foreach($agentesAgencia as $agente){
                                        echo '
                                         <option value="'.$agente["codigo_agente"].'">'.$agente["nome"].'</option>
                                        ';
                                    }
                                ?>
                            </select>
                        </div><!--.col-select-->
                    </div><!--.form-group-->

                    <button type="submit" class="btn-registo" name="responsabilizar">Guardar</button>

                </form>

            </div><!--.div-form dados-responsavel -->

            <div class="div-form1 dados-agencia">

                <h3>Dados da agencia</h3>

                <div>

                    <div class="wrap-img"> 
                        <img src="../assets/images/img-agencias/<?= $_SESSION["caminho_img_agencia"] ?>" alt="imagem da agencia" class="responsive-img"> 
                    </div><!-- .wrap-img -->
                    <h4><?= $_SESSION["nome_agencia"] ?></h4>

                    <dl>
                        <dt>Descriçao da Agencia :</dt>
                        <dd><?= $_SESSION["descricao"] ?></dd>
                        <dt>Hora da Abertura</dt>
                        <dd><time><?= $_SESSION["hora_abertura"] ?></time></dd>
                        <dt>Hora de Fecho</dt>
                        <dd><time><?= $_SESSION["hora_fecho"] ?></time></dd>
                    </dl>                      

                </div>

            </div><!--.div-form dados-agencia -->

            <div class="div-form1 dados-conta">
                <h3>Dados da Conta de acesso da agencia</h3>

                <div>

                    <dl>
                        <dt>Nome de Utilisador</dt>
                        <dd><?= $_SESSION["nome_utilisador"] ?></dd>
                        <dt>Email</dt>
                        <dd><?= $_SESSION["email_utilisador"] ?></dd>
                        <dt>Pergunta Secreta</dt>
                        <dd><?= $_SESSION["perguntaSecreta"] ?></dd>
                        <dt>Resposta Secreta</dt>
                        <dd><?= $_SESSION["respostaSecreta"] ?></dd>
                    </dl>

                 </div>
                
            </div><!--.div-form dados-conta -->

            <div class="div-form1 dados-endereco">
                
                <h3>Endereço da Agencia</h3>

                <address>
                    Telefone : <a href="tel:<?= $_SESSION["num_telefone"] ?>"><?= $_SESSION["num_telefone"] ?></a><br>
                    Email : <a href="mailto:<?= $_SESSION["email_agencia"] ?>"><?= $_SESSION["email_agencia"] ?></a> <br>
                    Morada : <?= $_SESSION["adresso"] ?><br>
                    Codigo Postal : <?= $_SESSION["codigo_postal"] ?><br>
                    Cidade : <?= $_SESSION["cidade"] ?><br>
                    Pais : <?= $_SESSION["pais"] ?>
                </address>

            </div><!--.div-form dados-endereco -->

            <div class="div-form1 dados-agente1">
            
                <h3>Dados de agente <?= $_SESSION["nome_agente"] ?></h3>

                <div>

                    <div class="wrap-img"> 
                        <img src="../assets/images/img-agentes/<?= $_SESSION["caminho_img_agente"] ?>" alt="" class="responsive-img"> 
                    </div><!-- .wrap-img -->

                    <dl>
                        <dt>Data de Nascemento</dt>
                        <dd><?= $_SESSION["data_nascimento"] ?></dd>
                        <dt>Lugar de Nascimento</dt>
                        <dd><?= $_SESSION["lugar_nascimento"] ?></dd>
                        <dt>Numero de Identificaçao</dt>
                        <dd><?= $_SESSION["numero_bi"] ?></dd>
                        <dt>Genero</dt>
                        <dd><?php if($_SESSION["genero"] == "M"){ 
                                        echo "Masculino"; 
                                    }else if($_SESSION["genero"] == "F"){
                                        echo "Feminino"; 
                                    }
                            ?>
                        </dd>
                    </dl>

                    <p>Contactos de Agente</p>
                    <address>
                        Telefone : <a href="tel:<?= $_SESSION["num_telefone_agente"] ?>"><?= $_SESSION["num_telefone_agente"] ?></a><br>
                        Email : <a href="mailto:<?= $_SESSION["email_agente"] ?>"><?= $_SESSION["email_agente"] ?></a> <br>
                    </address>

                   <p>Residencia de Agente</p>
                    <address> 
                        Morada : <?= $_SESSION["adresso_agente"] ?><br>
                        Codigo Postal : <?= $_SESSION["codigo_postal_agente"] ?><br>
                        Cidade : <?= $_SESSION["cidade_agente"] ?><br>
                        Pais : <?= $_SESSION["pais_agente"] ?>
                    </address>

                </div>

            </div><!--.div-form dados-agente1 -->

            <div class="div-form1 dados-agente2">
                
                <h3>Dados de agente <?= $_SESSION["nome_agente2"] ?></h3>

                <div>

                    <div class="wrap-img"> 
                        <img src="../assets/images/img-agentes/<?= $_SESSION["caminho_img_agente2"] ?>" alt="" class="responsive-img"> 
                    </div><!-- .wrap-img -->

                    <dl>
                        <dt>Data de Nascemento</dt>
                        <dd><?= $_SESSION["data_nascimento2"] ?></dd>
                        <dt>Lugar de Nascimento</dt>
                        <dd><?= $_SESSION["lugar_nascimento2"] ?></dd>
                        <dt>Numero de Identificaçao</dt>
                        <dd><?= $_SESSION["numero_bi2"] ?></dd>
                        <dt>Genero</dt>
                        <dd><?php if($_SESSION["genero2"] == "M"){ 
                                        echo "Masculino"; 
                                    }else if($_SESSION["genero2"] == "F"){
                                        echo "Feminino"; 
                                    }
                            ?>
                        </dd>
                    </dl>

                    <p>Contactos de Agente</p>
                    <address>
                        Telefone : <a href="tel:<?= $_SESSION["num_telefone_agente2"] ?>"><?= $_SESSION["num_telefone_agente2"] ?></a><br>
                        Email : <a href="mailto:<?= $_SESSION["email_agente2"] ?>"><?= $_SESSION["email_agente2"] ?></a> <br>
                    </address>

                   <p>Residencia de Agente</p>
                    <address> 
                        Morada : <?= $_SESSION["adresso_agente2"] ?><br>
                        Codigo Postal : <?= $_SESSION["codigo_postal_agente2"] ?><br>
                        Cidade : <?= $_SESSION["cidade_agente2"] ?><br>
                        Pais : <?= $_SESSION["pais_agente2"] ?>
                    </address>

                </div>

            </div><!--.div-form dados-agente2 -->

        </div><!--.body-container-admin -->

       
        <nav class="nav-welcome">
            <a href="/admin_page/admin_agencia">Alterar Informaçao da Agencia</a>
            <a href="/encomendas/admin_encomenda">Tudo bem, Ir para Encomendas</a>
        </nav>
        


    </div><!--.main-container-->

</body>
</html>