<?php
    //recuperar todos os paises
    require("models/paises.php");
    $modelPaises = new Paises();
    $paises = $modelPaises->getAll();
    //recuperar codigo dos paises
    $codigo_paises = [];
        foreach($paises as $pais){
            $codigo_paises[] = $pais["codigo"];
        }
    //recuperar tipos de encomenda no banco dedados
    require("models/tipo_encomendas.php");
    $modelTipo_encomendas = new Tipo_encomendas();
    $tipo_encomendas = $modelTipo_encomendas->getAll();
    //recuperar codigo de tipo de encomenda
    $codigo_tipoEncomendas = [];
        foreach($tipo_encomendas as $tipo){
            $codigo_tipoEncomendas[] = $tipo["id_tipo_encomenda"];
        }
        
    //Invocar Calsse Agentes
    require("models/agentes.php");
    $modelAgentes = new Agentes();

    //Invocar classe Encomendas
    require("models/encomendas.php");
    $modelEncomendas = new Encomendas();

    if($action === "novo_encomenda" && isset($_SESSION["codigo_conta"])){

        require("views/createEncomendas.php");
        
    }
    else if($action === "criacaoEncomenda" && isset($_SESSION["codigo_conta"])){

        /* echo "<pre>"; print_r($_POST); echo "</pre>"; */

        /* $codigo_paises = [];
        foreach($paises as $pais){
            $codigo_paises[] = $pais["codigo"];
        }
         */
        /* $codigo_tipoEncomendas = [];
        foreach($tipo_encomendas as $tipo){
            $codigo_tipoEncomendas[] = $tipo["id_tipo_encomenda"];
        } */

        if(
            isset($_POST["criarEncomenda"]) && 
            in_array($_POST["pais_remetente"], $codigo_paises) &&
            in_array($_POST["pais_destino"], $codigo_paises) &&
            in_array($_POST["tipo_encomenda"], $codigo_tipoEncomendas)
         ){

            foreach($_POST as $key => $value){
                $_POST[$key] = trim(htmlspecialchars(strip_tags($value)));
            }

            if( !empty($_POST["numero_bi"]) ){

                if(
                     mb_strlen($_POST["numero_bi"]) < 4 ||
                     mb_strlen($_POST["numero_bi"]) > 14 
                ){
                    $message = "Numero de Documento Identificaçao deve ser superior a 4 e inferior a 14 digitos";
                    
                }
            } 

            if( !empty($_POST["cidade"]) || !empty($_POST["adresso"]) || !empty($_POST["codigo_postal"]) ){

                if(
                    (mb_strlen($_POST["cidade"]) < 4 || mb_strlen($_POST["cidade"]) > 60) ||
                    (mb_strlen($_POST["adresso"]) < 8 || mb_strlen($_POST["adresso"]) > 120) ||
                    (mb_strlen($_POST["codigo_postal"]) < 4 || mb_strlen($_POST["codigo_postal"]) > 20) 
                ){
                    
                    $message = "Dados de  endereço errado, entra os dados correctamente";
                    
                }
            } 

            if( !empty($_POST["valorEstimado"]) || !empty($_POST["peso"]) ){

                if( !is_numeric($_POST["valorEstimado"]) || !is_numeric($_POST["peso"]) )
                {
                    $message = "Valor ou peso devem ser valores numericos, entra os dados correctamente";
                    
                }
            }

            $volume = 0;
            if( !empty($_POST["cumprimento"]) && !empty($_POST["largura"]) && !empty($_POST["altura"])  ){

                if( 
                    is_numeric($_POST["cumprimento"]) && 
                    is_numeric($_POST["largura"]) && 
                    is_numeric($_POST["altura"]) 
                ){

                   $volume =  ($_POST["cumprimento"]/100) * ($_POST["largura"]/100) * ($_POST["altura"]/100);
                }
                else
                {

                    $message = "o volume deve ser valores numericos, entra os dados correctamente";
                    
                }
            }

            if( !empty($_POST["cidade_destino"]) || !empty($_POST["adresso_destino"]) || !empty($_POST["codigo_postal_destino"]) ){

                if(
                    (mb_strlen($_POST["cidade_destino"]) < 4 || mb_strlen($_POST["cidade_destino"]) > 60) ||
                    (mb_strlen($_POST["adresso_destino"]) < 8 || mb_strlen($_POST["adresso_destino"]) > 120) ||
                    (mb_strlen($_POST["codigo_postal_destino"]) < 4 || mb_strlen($_POST["codigo_postal_destino"]) > 20) 
                ){
                    
                    $message = "Dados de  endereço de destino esta errado, entra os dados correctamente";
                    
                }
            } 

            $agente = $modelAgentes->obterCodigoAgente($_SESSION["codigo_conta"], $_POST["pais_remetente"]);

            $dadosEncomenda = array(

                "nomeRemetente" => $_POST["nomeRemetente"],
                "telefoneRemetente" => $_POST["telefoneRemetente"],
                "pais_remetente" => $_POST["pais_remetente"],
                "numero_bi" => $_POST["numero_bi"],
                "cidade" => $_POST["cidade"],
                "adresso" => $_POST["adresso"],
                "codigo_postal" => $_POST["codigo_postal"],
                "descricao" => $_POST["descricao"],
                "valorEstimado" => $_POST["valorEstimado"],
                "tipo_encomenda" => $_POST["tipo_encomenda"],
                "quantidade" => $_POST["quantidade"],
                "peso" => $_POST["peso"],
                "volume" => $volume,
                "nomeDestinatario" => $_POST["nomeDestinatario"],
                "telefoneDestinatario" => $_POST["telefoneDestinatario"],
                "pais_destino" => $_POST["pais_destino"],
                "cidade_destino" => $_POST["cidade_destino"],
                "adresso_destino" => $_POST["adresso_destino"],
                "codigo_postal_destino" => $_POST["codigo_postal_destino"],
                "codigo_agente" => $agente["codigo_agente"]

            );

            $codigo_encomenda = $modelEncomendas->create($dadosEncomenda);

            if(!empty($codigo_encomenda)){

                if($volume === 0 && $_POST["peso"] > 0){

                    $_SESSION["valor_estimado"] = ($_POST["peso"] * $_POST["quantidade"]) * 10;
                }
                else if($volume > 0){
    
                    $_SESSION["valor_estimado"] = ($volume * 90) * 10;
                }
                else if( empty($volume) && empty($_POST["peso"]) ){

                    $_SESSION["valor_estimado"] = $_POST["quantidade"] * 10;
                }

                $_SESSION["codigo_encomenda"] = $codigo_encomenda;
                $_SESSION["descricao"] = $_POST["descricao"];

                foreach($paises as $pais){
                    if($pais["codigo"] == $_POST["pais_destino"]){
                        $_SESSION["pais_destino"] = $pais["nome"];
                    }
                }
                

                header("Location:".ROOT."/admin_pagamentos");
               
            }
        }
    }
    else if($action === "alteracaoEncomenda" && isset($_SESSION["codigo_conta"])){

        /* echo "<pre>"; print_r($_POST); echo "</pre>"; exit; */

        if(
            isset($_POST["alterarEncomenda"]) &&
            in_array($_POST["pais_remetente"], $codigo_paises) &&
            in_array($_POST["pais_destino"], $codigo_paises) &&
            in_array($_POST["tipo_encomenda"], $codigo_tipoEncomendas)
        ){

            foreach($_POST as $key => $value){
                $_POST[$key] = trim(htmlspecialchars(strip_tags($value)));
            }

            if( !empty($_POST["numero_bi"]) ){

                if(
                     mb_strlen($_POST["numero_bi"]) < 4 ||
                     mb_strlen($_POST["numero_bi"]) > 14 
                ){
                    $message = "Numero de Documento Identificaçao deve ser superior a 4 e inferior a 14 digitos";
                    
                }
            } 

            if( !empty($_POST["cidade"]) || !empty($_POST["adresso"]) || !empty($_POST["codigo_postal"]) ){

                if(
                    (mb_strlen($_POST["cidade"]) < 4 || mb_strlen($_POST["cidade"]) > 60) ||
                    (mb_strlen($_POST["adresso"]) < 8 || mb_strlen($_POST["adresso"]) > 120) ||
                    (mb_strlen($_POST["codigo_postal"]) < 4 || mb_strlen($_POST["codigo_postal"]) > 20) 
                ){
                    
                    $message = "Dados de  endereço errado, entra os dados correctamente";
                    
                }
            } 

            if( !empty($_POST["valorEstimado"]) || !empty($_POST["peso"]) ){

                if( !is_numeric($_POST["valorEstimado"]) || !is_numeric($_POST["peso"]) )
                {
                    $message = "Valor ou peso devem ser valores numericos, entra os dados correctamente";
                    
                }
            }

            if( !empty($_POST["cidade_destino"]) || !empty($_POST["adresso_destino"]) || !empty($_POST["codigo_postal_destino"]) ){

                if(
                    (mb_strlen($_POST["cidade_destino"]) < 4 || mb_strlen($_POST["cidade_destino"]) > 60) ||
                    (mb_strlen($_POST["adresso_destino"]) < 8 || mb_strlen($_POST["adresso_destino"]) > 120) ||
                    (mb_strlen($_POST["codigo_postal_destino"]) < 4 || mb_strlen($_POST["codigo_postal_destino"]) > 20) 
                ){
                    
                    $message = "Dados de  endereço de destino esta errado, entra os dados correctamente";
                    
                }
            } 

            $resultadoUpdate = $modelEncomendas->alterarDadosEncomendas($_POST);

            if(isset($resultadoUpdate) && $resultadoUpdate === TRUE){

                $message = "Dados da Encomenda alterados com sucesso";

                header("Location:".ROOT."/admin_encomendas/".$_POST["codigo_encomenda"]);
               
            }


        }

        if(isset($_POST["cancelarEncomenda"]) && isset($_SESSION["codigo_conta"])){

            $resultadoUpdate = $modelEncomendas->alterarEstadoEncomenda($_POST["codigo_encomenda"]);

            if(isset($resultadoUpdate) && $resultadoUpdate === TRUE){

                $message = "Dados da Encomenda alterados com sucesso";

                header("Location:".ROOT."/admin_encomendas");
               
            }

        }

    }
    else if(!empty($action) && isset($_SESSION["codigo_conta"])){

        $detalhesEncomenda = $modelEncomendas->getDetalhesEncomenda($_SESSION["codigo_conta"], $action);

        require("views/encomenda_detalhes.php");
    }
    else if(isset($_SESSION["codigo_conta"])){

        $encomendas = $modelEncomendas->getNovosEncomendas($_SESSION["codigo_conta"]);

        require("models/pagamentos.php");
        $modelPagamentos = new Pagamentos();

        $pagamentos = $modelPagamentos->getAllCodigos();

        $codigo_pagamentos = [];
        foreach($pagamentos as $pagamento){
            $codigo_pagamentos[] = $pagamento["codigo_encomenda"];
        }

        //var_dump($pagamentos);
        require("views/admin_encomenda.php");
    }
    
    
    
    
    
?>