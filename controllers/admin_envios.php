<?php
    require("models/tipo_envios.php");
    $modelTipoEnvios = new Tipo_envios();

    $envios = $modelTipoEnvios->getAll();

    $codigo_tipoEnvio = [];
    foreach($envios as $envio){
        $codigo_tipoEnvio[] = $envio["codigo"];
    }

    require("models/encomendas.php");
    $modelEncomendas = new Encomendas();

    require("models/envios.php");
    $modelEnvios = new Envios();

    if($action === "criacaoEnvio" && isset($_SESSION["codigo_conta"])){

        echo "<pre>"; print_r($_POST); echo "</pre>";

        if(isset($_POST["criarEnvio"]) && in_array($_POST["tipo_envio"], $codigo_tipoEnvio)){

            foreach($_POST as $key => $value){
                $_POST[$key] = trim(htmlspecialchars(strip_tags($value)));
            }

            if(empty($_POST["data_previsto_chegada"])){
                $message = "A data previsto de chegada é obrigatorio, entra os dados correctamente";
                exit;
            }

            $codigo_envio = $modelEnvios->registarEnvio($_POST);

            if(!empty($codigo_envio)){

                header("Location:".ROOT."/admin_encomendas");

            }
        }

    }
    else if($action === "listaEncomendasEnviados" && isset($_SESSION["codigo_conta"])){

        $envios = $modelEnvios->getAllEnvios();
        require("views/admin_envio.php");

    }
    else if(!empty($action) && $_SESSION["codigo_conta"]){

        

        $dadosEnvio = $modelEncomendas->getDadosEncomendaParaEnvio($action, $_SESSION["codigo_conta"]);

        require("views/envio.view.php");
    }

    
?>