<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>criar agencia</title>
</head>
<body>

<main>
        <div class="main-container-sign">
            <div class="header-container-sign">
                <div class="header-content-sign">
                    <article>
                        <h1>Faça o seu registo agora </h1>
                        <p>De acordo com a legislação, leia o seguinte texto na íntegra antes de continuar voluptatum quia ipsum! Magni quidem similique architecto, id velit aperiam.</p>
                    </article>
                </div><!--.header-content-->
                    
                </div><!--.header-container-->
        
            <div class="body-container-sign" >
                <div class="body content">

                    <div class="container-registo-form">
                        <div class="header-form">
                            <ol>
                                <li>2 informacoes sobre agencia</li>
                            </ol>
                        </div><!--.header-form-->
                     <div class="registo-form" >

                        <form method="post" action="./registar/agencia" enctype="multipart/form-data">
            
                            <h4>Criar uma agencia</h4>
                            <p>Todos campos sao obrigatorios.</p>

                            

                            <fieldset>
                                <legend>Informaçao da agencia</legend>

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
                                        <label for="nomeEmpresa">Descriçao da agencia</label>
                                    </div><!--.col-label-->
                                    <div class="col-textarea">
                                        <textarea name="descricao" id="descricao" cols="50" rows="6" required></textarea>
                                    </div><!--.col-textarea-->
                                    <span>Descreva a sua empresa de maneira breve.</span>
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
                                        <input type="text" id="hora_abertura" name="hora_abertura"  required>
                                    </div><!--.col-input-->
                                    <span></span>
                                </div><!--.form-group-->
                                <div class="form-group">
                                    <div class="col-label">
                                        <label for="contahora_fecho">Hora de fecho</label>
                                    </div><!--.col-label-->
                                    <div class="col-input">
                                        <input type="text" id="contahora_fecho" name="contahora_fecho" required>
                                    </div><!--.col-input-->
                                    <span></span>
                                </div><!--.form-group-->

                                <div class="form-group">
                                    <div class="col-label">
                                        <label for="pais">Pais</label>
                                    </div><!--.col-label-->
                                    <div class="col-select">
                                        <select name="pais" id="paisSelecionado">
                                            <option value=""> Escolha o pais</option>
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
                                        <label for="localidade">Cidade</label>
                                    </div><!--.col-label-->
                                    <div class="col-input">
                                        <input type="text" id="localidade" name="localidade" placeholder="Barreiro" required minlength="4" maxlength="40">
                                    </div><!--.col-input-->
                                    
                                </div><!--.form-group-->
                                <div class="form-group">
                                    <div class="col-label">
                                        <label for="adresso">Adresso</label>
                                    </div><!--.col-label-->
                                    <div class="col-input">
                                        <input type="text" id="adresso" name="adresso" placeholder="Av. Alfredo Dinis N 67 - 2 direita" required minlength="8" maxlength="120">
                                    </div><!--.col-input-->
                                    <span>Entrar adresso completo (codigo postal si for o caso).</span>
                                </div><!--.form-group-->

                                <div class="form-group">
                                    <div class="col-label">
                                        <label for="codigo_postal">Codigo postal</label>
                                    </div><!--.col-label-->
                                    <div class="col-input">
                                        <input type="text" id="codigo_postal" name="codigo_postal" placeholder="2835-202" required minlength="4" maxlength="20">
                                    </div><!--.col-input-->
                                    <span>Entrar adresso completo (codigo postal si for o caso).</span>
                                </div><!--.form-group-->

                                <div class="form-group">
                                    <div class="col-label">
                                        <label for="email">Email</label>
                                    </div><!--.col-label-->
                                    <div class="col-input">
                                        <input type="email" id="email" name="email" placeholder="carsobuba@yahoo.com" required>
                                    </div><!--.col-input-->
                                    <span></span>
                                </div><!--.form-group-->
                                <div class="form-group">
                                    <div class="col-label">
                                        <label for="num_telefone">Telefone</label>
                                    </div><!--.col-label-->
                                    <div class="col-input">
                                        <input type="text" id="num_telefone" name="num_telefone" placeholder="+351 932 303 976" required>
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