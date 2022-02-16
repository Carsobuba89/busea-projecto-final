<?php
    require("models/envios.php");
    $modelsEnvios = new Envios();

    require("models/encomendas.php");
    $modelsEncomendas = new Encomendas();

    

    if($action === "listaEncomendasParaEntregar" && isset($_SESSION["codigo_conta"])){

        $dadosEntregue = $modelsEnvios->getEncomendasParaEntregar();

        require("views/listaEncomendasParaEntregar.php");

    }
    if(!empty($action) && is_numeric($action) && isset($_SESSION["codigo_conta"])){

        /* $dadosEnvio = $modelEncomendas->getDadosEncomendaParaEnvio($action, $_SESSION["codigo_conta"]);
        */
        require("views/entregue.view.php");

    }
    else if(!isset($_SESSION["codigo_conta"])){

        header("Location:".ROOT."/acesso/login");
        
    }
    



?>