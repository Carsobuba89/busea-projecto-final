
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
            <div class="header-content">
                <h2>Criaçao de nova encomendas</h2>
                <p>
                    Lorem iusto fuga officia, adipisicing elit. Ab explicabo neque iusto fuga officia animi iste unde, minus vel veritatis!
                </p> 
            </div><!--.header-content-->
       </div><!--.header-container-->

        <div class="body-container">
            <div class="body-content-left">
                <?php require("views/templates/sidebar_admin.php"); ?>
            </div>
            <div class="body-content-right">
                
                
            </div><!--.body-content-right -->
            

        </div><!--.body-container-admin -->

    </div><!--.main-container-->

    <?php
        require("views/templates/footer.admin.php");
    ?>

<script>
        const detalheRemetente = document.querySelector(".detalheRemetente");
        const detalhesEndereco = document.getElementById("detailsEndereco");
        detalhesEndereco.addEventListener("click", () => {
            detalheRemetente.classList.toggle("detalheRemetenteActive");
        });
        
    </script>


else if($action === "novo_encomenda" && isset($_SESSION["codigo_conta"])){

require("views/createEncomendas.php");

}
else if(isset($_SESSION["codigo_conta"])){

$encomendas = $modelEncomendas->getNovosEncomendas($_SESSION["codigo_conta"]);

require("views/admin_encomenda.php");
}


SELECT codigo_encomenda
FROM pagamentos
WHERE codigo_encomenda = 5