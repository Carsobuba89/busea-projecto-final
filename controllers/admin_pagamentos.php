<?php
    require("models/formas_pagamento.php");
    $modelFpagamentos = new Formas_pagamento();

    $formas_pagamento = $modelFpagamentos->getAll();

    require("models/tipo_moeda.php");
    $modelMoedas = new Tipo_moeda();

    $moedas = $modelMoedas->getAll();

    require("models/pagamentos.php");
    $modelPagamentos = new Pagamentos();

    if($action === "criacaoPagamento" && isset($_SESSION["codigo_conta"]) ){

        if(
            isset($_POST["criarPagamento"]) &&
            is_numeric($_POST["valorPago"]) &&
            is_numeric($_POST["moeda"]) &&
            is_numeric($_POST["formaPagamento"])
        ){

            foreach($_POST as $key => $value){
                $_POST[$key] = trim(htmlspecialchars(strip_tags($value)));
            }

            if( !empty($_POST["detalhesPagamento"]) ){

                if(
                     mb_strlen($_POST["numero_bi"]) < 3 &&
                     mb_strlen($_POST["numero_bi"]) > 120 
                ){
                    $message = " Dados incorrectos";
                    exit;
                }
            } 

            $pagamento = $modelPagamentos->efectuarPagamento($_POST);

            if(!empty($pagamento)){

                header("Location:".ROOT."/admin_encomendas");
            
            }
        }

    }
    else if(isset($_SESSION["codigo_conta"])){

        require("views/pagamentos.view.php");
    }

?>