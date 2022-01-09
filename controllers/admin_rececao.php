<?php 

    require("models/envios.php");
    $modelEnvios = new Envios();

    require("models/encomendas.php");
    $modelEncomendas = new Encomendas();

    if($action === "listaEncomendasParaReceber" && isset($_SESSION["codigo_conta"])){

        $envios = $modelEnvios->getEncomendasParaReceber();

        require("views/listaEncomendasParaReceber.view.php");

    }
    else if($action === "rececaoEncomenda" && isset($_SESSION["codigo_conta"])){

        /* echo "<pre>"; print_r($_POST); echo "</pre>"; exit; */

        if(isset($_POST["receberEncomenda"])){

            $resultadoUpdate = $modelEnvios->receberEncomenda($_POST);

            if(!empty($resultadoUpdate)){
                header("Location:".ROOT."/admin_rececao/listaEncomendasParaReceber");
            }
        }


    }
    else if(!empty($action) && isset($_SESSION["codigo_conta"])){

        $dadosEnvio = $modelEncomendas->getDadosEncomendaParaEnvio($action, $_SESSION["codigo_conta"]);

        require("views/rececao.view.php");

    }
    

?>