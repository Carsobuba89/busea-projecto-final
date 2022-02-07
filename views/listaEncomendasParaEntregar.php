
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
                    <h2>Painel de Entregue das encomendas</h2>
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
                         <button type="submit" name="search" disabled>Encontrar</button>
                    </form>
                </div>

                <div class="tabela-encomendas-prontas">
                    <table>
                        <tr>
                            <th>Data Recebida</th>
                            <th>Referencia</th>
                            <th>Descriçao</th>
                            <th>Nome Remetente</th>
                            <th>Nome Destinatario</th>
                            <th>Entregar</th>
                        </tr>
                        <?php foreach($dadosEntregue as $entregue) { ?>
                            <tr>
                                <td><?= date("d-m-y", strtotime($entregue["data_recebido"]) ) ?></td>
                                <td><?= $entregue["referencia"] ?></td>
                                <td><?= $entregue["descricao"] ?></td>
                                <td><?= $entregue["nome_remetente"] ?></td>
                                <td><?= $entregue["nome_destinatario"] ?></td>
                                <td>
                                    <a href="/admin_entregas/<?= $entregue["codigo_encomenda"] ?>">Entregar</a>
                                </td>  
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

    