<?php

    if($action === "novo_encomenda" && isset($_SESSION["codigo_conta"])){

        require("models/paises.php");
        $modelPaises = new Paises();

        $paises = $modelPaises->getAll();

        require("views/createEncomendas.php");
    }
    else if(isset($_SESSION["codigo_conta"])){




        require("views/admin_encomenda.php");
    }
    
    
    
?>