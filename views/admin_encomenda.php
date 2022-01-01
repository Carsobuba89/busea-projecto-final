
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
            <div class="header-content-admin">
                <div class="btn-criacao-encomenda">
                    <button class="btn btn-create">
                        <a href="/admin_encomendas/novo_encomenda">Criar Nova Encomenda</a>
                    </button>
                </div>
                <div class="header-top-encomenda">
                    <h2>Painel de administraçao das encomendas</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab explicabo neque iusto fuga officia animi Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab explicabo neque iusto fuga officia animi iste unde, minus vel veritatis!
                    </p> 
                </div>
            </div><!--.header-content-->
       </div><!--.header-container-->

        <div class="body-container">
            <div class="body-content-left">
                <?php require("views/templates/sidebar_admin.php"); ?>
            </div>
            <div class="body-content-right">
                <div class="bloco-busca">
                    <form action="">
                         <input type="text" name="buscar">
                         <button type="submit" name="search">Encontrar</button>
                    </form>
                </div>

                <div class="tabela-encomendas-prontas">
                    <table>
                        <tr>
                            <th>Referencia</th>
                            <th>Data Criaçao</th>
                            <th>Descriçao</th>
                            <th>Detalhes</th>
                            <th>Enviar</th>
                            <th>Pagamento</th>
                        </tr>
                        <tr>
                            <td>3112GW1</td>
                            <td>31/12/2021</td>
                            <td>Telemovel Samsung A12</td>
                            <td>+</td>
                            <td>Enviado</td>
                            <td>Pago</td>
                        </tr>
                    </table>
                </div>
            </div>
            

        </div><!--.body-container-admin -->

    </div><!--.main-container-->

    <?php
        require("views/templates/footer.admin.php");
    ?>

    