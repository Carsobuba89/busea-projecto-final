
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
                         <button type="submit" name="search" disabled>Encontrar</button>
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
                            <!-- <th>Estado</th> -->
                        </tr>
                        <?php foreach($encomendas as $encomenda) { ?>
                            <tr>
                                <td><?= $encomenda["referencia"] ?></td>
                                <td><?= date("d-m-y", strtotime($encomenda["data_criada"]) ) ?></td>
                                <td><?= $encomenda["descricao"] ?></td>
                                <td><a href="/admin_encomendas/<?= $encomenda["codigo_encomenda"] ?>">Ver +</a></td>
                                <td><button><a href="/admin_envios/<?= $encomenda["codigo_encomenda"] ?>">Enviar </a></button></td>
                                <td>
                                    <?php 
                                        if( in_array($encomenda["codigo_encomenda"], $codigo_pagamentos)){ 
                                            echo '<button disabled="disabled">Pago</button>';
                                        }else{
                                            echo '<button><a href="/admin_pagamentos/'. $encomenda["codigo_encomenda"] .'">Pagar </a></button>';
                                        }
                                        
                                    ?>
                                </td>
                                <!-- <td><button type="submit">Nao enviado</button></td> -->
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

    