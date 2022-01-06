
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
                    <h2>Administraçao de pagamento das encomendas</h2>
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
                    <h3>Contruir filtro de dados aqui depois</h3>
                </div>

                <div class="tabela-encomendas-prontas">
                    <table>
                        <tr>
                            <th>Data Pago</th>
                            <th>Referencia</th>
                            <th>Descriçao</th>
                            <th>Valor Pago</th>
                            <th>Forma pago</th>
                            <th>Destino</th>
                        </tr>
                        <?php foreach($encomendaPagos as $encomendaPago) { ?>
                            <tr>
                                <td><?= date("d-m-y", strtotime($encomendaPago["data_pago"]) ) ?></td>
                                <td><?= $encomendaPago["referencia"] ?></td>
                                <td><?= $encomendaPago["descricao"] ?></td>
                                <td><?= $encomendaPago["valor_pago"] ?></td>
                                <td><?= $encomendaPago["formaPagamento"] ?></td>
                                <td><?= $encomendaPago["paisDestino"] ?></td>
                                
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
            

        </div><!--.body-container-admin -->

    </div><!--.main-container-->

    <?php
        require("views/templates/footer.admin.php");
    ?>

    