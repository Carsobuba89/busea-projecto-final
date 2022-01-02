<?php

    require("models/paises.php");
    $modelPaises = new Paises();

    $paises = $modelPaises->getAll();

    require("models/tipo_encomendas.php");
    $modelTipo_encomendas = new Tipo_encomendas();

    $tipo_encomendas = $modelTipo_encomendas->getAll();

    if($action === "novo_encomenda" && isset($_SESSION["codigo_conta"])){

        require("views/createEncomendas.php");
    }
    else if(isset($_SESSION["codigo_conta"])){


        require("views/admin_encomenda.php");
    }

    require("models/encomendas.php");
    $modelEncomendas = new Encomendas();

    if($action === "create" && isset($_SESSION["codigo_conta"])){

        echo "<pre>"; print_r($_POST); echo "</pre>";

        $codigo_paises = [];
        foreach($paises as $pais){
            $codigo_paises[] = $pais["codigo"];
        }

        $codigo_tipoEncomendas = [];
        foreach($tipo_encomendas as $tipo){
            $codigo_tipoEncomendas[] = $tipo["id_tipo_encomenda"];
        }

        if(
            isset($_POST["create"]) && 
            in_array($_POST["pais_remetente"], $codigo_paises) &&
            in_array($_POST["pais_destino"], $codigo_paises) &&
            in_array($_POST["tipo_encomenda"], $codigo_tipoEncomendas)
         ){

            foreach($_POST as $key => $value){
                $_POST[$key] = trim(htmlspecialchars(strip_tags($value)));
            }

            if( !empty($_POST["numero_bi"]) ){

                if(
                     mb_strlen($_POST["numero_bi"]) < 4 &&
                     mb_strlen($_POST["numero_bi"]) > 14 
                ){
                    $message = "Numero de Documento Identificaçao deve ser superior a 4 e inferior a 14 digitos";
                    return;
                }
            } 

            if( !empty($_POST["cidade"]) || !empty($_POST["adresso"]) || !empty($_POST["codigo_postal"]) ){

                if(
                    (mb_strlen($_POST["cidade"]) < 4 && mb_strlen($_POST["cidade"]) > 60) ||
                    (mb_strlen($_POST["adresso"]) < 8 && mb_strlen($_POST["adresso"]) > 120) ||
                    (mb_strlen($_POST["codigo_postal"]) < 4 && mb_strlen($_POST["codigo_postal"]) > 20) 
                ){
                    
                    $message = "Dados de  endereço errado, entra os dados correctamente";
                    return;
                }
            } 

            if( !empty($_POST["valorEstimado"]) || !empty($_POST["peso"]) ){

                if( !is_numeric($_POST["valorEstimado"]) || !is_numeric($_POST["peso"]) )
                {
                    $message = "Valor ou peso devem ser valores numericos, entra os dados correctamente";
                    return;
                }
            }

            $volume = 0;
            if( !empty($_POST["cumprimento"]) && !empty($_POST["largura"]) && !empty($_POST["altura"])  ){

                if( 
                    is_numeric($_POST["cumprimento"]) && 
                    is_numeric($_POST["largura"]) && 
                    is_numeric($_POST["altura"]) 
                ){
                   $volume =  $_POST["cumprimento"] * $_POST["largura"] * $_POST["altura"];
                }
                else
                {
                    $message = "o volume deve ser valores numericos, entra os dados correctamente";
                    return;
                }
            }

            require("models/agentes.php");
            $modelAgentes = new Agentes();

            $agente = $modelAgentes->obterCodigoAgente($_SESSION["codigo_conta"], $_POST["pais_remetente"]);


            $codigo_encomenda = $modelEncomendas->create($_POST, $volume, $agente["codigo_agente"]);

            if(!empty($codigo_encomenda)){
                header("Location:".ROOT."/admin_pagamentos");
            }



         }
    }
    
    
    
?>