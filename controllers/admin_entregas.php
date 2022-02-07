<?php
    require("models/envios.php");
    $modelsEnvios = new Envios();

    require("models/encomendas.php");
    $modelsEncomendas = new Encomendas();

    if($action = "listaEncomendasParaEntregar" && isset($_SESSION["codigo_conta"])){

        $dadosEntregue = $modelsEnvios->getEncomendasParaEntregar();

        require("views/listaEncomendasParaEntregar.php");
    }



?>