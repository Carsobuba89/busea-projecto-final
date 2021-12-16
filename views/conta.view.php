<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/normalize.css">
    <link rel="stylesheet" href="../assets/css/global-style.css">
     <!--FontAwesome Icons -->
     <script src="https://kit.fontawesome.com/2f1b3770e6.js" crossorigin="anonymous"></script>

    <title>Criar Conta</title>

   
</head>
<body>
    

<main>
    <?php
        if(isset($message)){
            echo '<p role="alert">'.$message.'</p>';
        }

        require("views/templates/menu.registro.php");
    ?>
        <div class="main-container-sign">
            <div class="header-container-sign">
                <div class="header-content-sign">
                    <article>
                        <h1>Faça o seu registo agora </h1>
                        <p>De acordo com a legislação, leia o seguinte texto na íntegra antes de continuar voluptatum quia ipsum! Magni quidem similique architecto, id velit aperiam.</p>
                    </article>
                </div><!--.header-content-->
                    <div class="terms-of-contrat">
                        <article>
                            <h2>Informaçao de Dados pessoais </h2>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officiis, pariatur. Mollitia laboriosam explicabo sapiente quis voluptatibus quia eos, voluptatum nobis.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur natus voluptas, consequatur vero veritatis deserunt?</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae eveniet corrupti blanditiis molestiae architecto sed? Illum, accusamus cupiditate sed quos pariatur quia hic? Ad saepe sunt quos, ratione quidem magni, iste sapiente in, pariatur veniam quae omnis asperiores esse deleniti.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque culpa totam pariatur ullam doloremque vel, porro quae facilis quisquam eum, vitae nostrum aut fugiat quas.</p>
                            <p>Para qualquer problema ligado à gestão dos seus dados pessoais, o Utilizador terá o direito de apresentar queixa junto de qualquer autoridade de supervisão competente. Pode optar por impedir que este site agregue e analise as ações que fizer aqui. Ao fazer isto irá proteger a sua privacidade, mas irá também impedir o proprietário do site de aprender com as suas ações e de criar uma melhor experiência para si e para outros utilizadores. </p>
                            <p><strong>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi quasi quia, deleniti a odio illum!</strong></p>
                            <div>
                                <input type="checkbox" name="consentimento" id="consentimento" checked>
                                <label for="consentimento"> Não deixou de participar. Desmarque esta caixa para cancelar participação.</label>
                                <label for="consentimento" style="display: none;">Atualmente está excluído. Marque esta caixa para participar.</label>
                            </div>
                        </article>
                    </div><!--.terms-of-contrat-->    
                </div><!--.header-container-->
        
            <div class="body-container-sign" >
                <div class="body content">
                    <div class="info-sign-up-wrap">
                        <h3>O registo por completo é efectuado em 2 etapas, prencha os dados correctamente e segue </h3>
                    </div>

                    <div class="container-registo-form">
                        <div class="header-form">
                            <ol>
                                <li>1 criaçao da conta</li>
                            </ol>
                        </div><!--.header-form-->
                     <div class="registo-form" >

                        <form method="post" action="<?php echo ROOT; ?>/registar/conta">
            
                            <h4>Regista-se na Busea</h4>
                            <p>Todos campos sao obrigatorios.</p>

                            <fieldset>
                                <legend>criaçao da conta</legend>

                                <div class="form-group">
                                    <div class="col-label">
                                        <label for="username">Nome de Utilisador </label>
                                    </div><!--.col-label-->
                                    <div class="col-input">
                                        <input type="text" id="username" name="username" placeholder="ex: Carso89" minlength="6" maxlength="30" required>
                                     </div><!--.col-input-->
                                    <span>Usar no minino 6 caracteres</span> 
                                </div><!--.form-group-->

                                <div class="form-group">
                                    <div class="col-label">
                                        <label for="email">Email</label>
                                    </div><!--.col-label-->
                                    <div class="col-input">
                                        <input type="email" id="email" name="email" placeholder="carsobuba@gmail.com" minlength="8" maxlength="252" required>
                                     </div><!--.col-input-->
                                <span>Entrar um email valido,incluindo @ e .</span> 
                                </div><!--.form-group-->

                                <div class="form-group">
                                    <div class="col-label">
                                        <label for="password">Palavra-passe</label>
                                    </div><!--.col-label-->
                                    <div class="col-input">
                                        <input type="password" id="password" name="password" minlength="8" maxlength="1000" required>
                                    </div><!--.col-input-->
                                    <span>A senha deve incluir pelo menos 8 caracteres e uma letra maiúscula, uma letra minúscula e um caractere numérico.</span>
                                </div><!--.form-group-->

                                <div class="form-group">
                                    <div class="col-label">
                                        <label for="passwordRepeated">Repetir a Palavra-passe</label>
                                    </div><!--.col-label-->
                                    <div class="col-input">
                                        <input type="password" id="passwordRepeated" name="passwordRepeated" minlength="8" maxlength="1000" required>
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

                            </fieldset><!--.informaçao da conta-->



                            <fieldset>
                                <legend>Termos e Condiçoes</legend>
                                <p>Eu li, entendi e concordo com o seguinte. Também compreendo como a Busea pretende usar minhas informações.</p>
                                <ul>
                                    <li><a href="#">Termos de Uso Busea</a></li>
                                    <li><a href="#">Politica de Privacidade</a></li>
                                </ul>
                                <div>
                                    <input type="checkbox" name="consentimento" id="consentimento" >
                                    <label for="consentimento"> Aceito os Termos & Condições.*</label>
                                </div>
                            </fieldset>

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