<!DOCTYPE html>
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
    
    <title>Simulador de envio </title>
</head>
<body>
	
	<header class="nav-header">
        <?php
            require("./views/templates/menu.php");
        ?>
    </header>

    <main>
        <div class="container-top-image">
            <div class="content-top-image simular-img">
                <div class="bloc-text-top-image">
                    <h1>Como saber o custo de envio de uma encomenda</h1>
                    <p>Para beneficiar dos nossos serviços crie uma conta de 
                        forma gratuita e segura, depois podes monitorizar as suas encomendas facilmente e tambem vai
                    </p>
                    
                </div>
            </div><!--.agencia-container-->
        </div><!--Final top image agencia-->

        <div class="main-container">
            <div class="header-container">
                <div class="header-content">
                    <h2>Simulador de custo de envio de encomenda </h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus animi voluptatum quia ipsum! Magni quidem similique architecto, id velit aperiam.</p>
                </div><!--.header-content-->
            </div><!--.header-container-->

            <div class="body-container">
                <div class="body-content-left">

                    <img class="responsive-img" src="../assets/images/img-page/pexels-liza-summer-6347539.jpg" alt="Liza delivering boxes">
                   
                </div><!--.body-content-left-->

                <div class="body-content-right ">
                   
                    <form action="" class="form-simular">
                        
                        <div class="form-group">
                            <div class="col-label">
                                <label for="proveniencia">De</label>
                            </div><!--.col-label-->
                            <div class="col-input-75">
                                <input type="text" id="proveniencia" name="proveniencia" placeholder="Pais, Cidade, Agencia" required minlength="3" maxlength="255">

                                </div><!--.col-input-->
                            <!--  <span>Este Campo e obrigatorio</span>   -->
                        </div><!--.form-group-->

                        <div class="form-group">
                            <div class="col-label">
                                <label for="distino">Para</label>
                            </div><!--.col-label-->
                            <div class="col-input-75">
                                <input type="text" id="distino" name="distino" placeholder="Pais, Cidade, Agencia" required minlength="3" maxlength="255">
                            </div><!--.col-input-->
                            <!--    <span>Este Campo e obrigatorio</span> -->
                        </div><!--.form-group-->

                            <div class="form-group">
                                <div class="col-label">
                                    <label for="quantidade">Quantidade</label>
                                </div><!--.col-label-->
                                <div class="col-input-25">
                                    <input type="number" id="quantidade" name="quantidade" placeholder="1" required minlength="1" maxlength="99">
                                    
                                </div><!--.col-input-->
                                <div class="col-label">
                                    <label for="tipo">Tipo</label>
                                </div><!--.col-label-->
                                <div class="col-input-25">
                                    <select  id="tipo" name="tipo">
                                        <option value="caixa">Caixa</option>
                                        <option value="palete">Palete</option>
                                        <option value="envelope">Envelope</option>
                                    </select>
                                    
                                </div><!--.col-select-->
                            </div><!--.form-group--> 
                            <div class="form-group">
                                <div class="col-label">
                                    <label for="cumprimento">Cumprimento </label>
                                </div><!--.col-label-->
                                <div class="col-input-25">
                                    <input type="number" id="cumprimento" name="cumprimento" placeholder="30" required minlength="1"  maxlength="9" step="any">
                                    <span class="medida">cm</span>
                                </div><!--.col-input-->
                                <div class="col-label">
                                    <label for="largura">Largura</label>
                                </div><!--.col-label-->
                                <div class="col-input-25">
                                    <input type="number" id="largura" name="largura" placeholder="10" required minlength="1"  maxlength="9" step="any" > 
                                    <span class="medida">cm</span>
                                </div><!--.col-input-->
                            </div><!--.form-group-->
                            <div class="form-group"> 
                                <div class="col-label">
                                    <label for="altura">Altura*</label>
                                </div><!--.col-label-->
                                <div class="col-input-25">
                                    <input type="number" id="altura" name="altura" placeholder="10" required minlength="1"  maxlength="9" step="any" >               
                                    <span class="medida">cm</span>
                                </div><!--.col-input-->
                                <div class="col-label">
                                    <label for="peso">Peso*</label>
                                </div><!--.col-label-->
                                <div class="col-input-25">
                                    <input type="number" id="peso" name="peso" placeholder="2" required minlength="1"  maxlength="9" step="any" >
                                    <span class="medida">kg</span>
                                </div><!--.col-input-->
                            </div><!--.form-group-->
                            
                            <div class="form-group-button">
                                <div class="btn-wrap">
                                    <!--  <button>Adicionar embalagem</button> -->
                                    <button type="button" class="btn-orcamento">Obter Orçamento</button>
                                </div>
                            </div>
                    </form>
                    <div>
                        <div class="resultado-simulacao-erro">Todos os Campos sao Obrigatorios, por favor prencha correctamente os dados !</div>
                        <div class="resultado-simulacao-sucesso"> </div>
                    </div>
                    
                </div><!--.body-content-right-->
            </div><!--.body-container-->
        </div><!--.main-container-->
    </main>

    <footer>
        <?php
            require("views/templates/footer.php");
        ?>    
    </footer>

    
    <script src="js/globalScript.js"></script>
</body>
</html>