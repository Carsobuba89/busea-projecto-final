<?php

    //Invocaçao de tabela agentes no banco de dados
    require("models/agentes.php");
    $modelAgentes = new Agentes();

    //$agentes = $modelAgentes->getAll();

    /** ACTIVAR OU DISACTIVAR AGENTES Na pagina WELCOME e na gestao de agencias */
    if( 
        ($action === "activacao" || $action === "activacaoAdmin") && 
        isset($_SESSION["codigo_conta"])){

        if(isset($_POST["activar"]) && is_numeric($_POST["codigo_agente"])){

            $dados = array(
                "valorAInserir" => $_SESSION["codigo_conta"],
                "codigo_agente" => $_POST["codigo_agente"]
            );

            $modelAgentes->atualisarActivacao($dados);
            
            if($action === "activacao"){
                header("Location:".ROOT."/admin_agencias");
            }
            else if($action === "activacaoAdmin"){
                header("Location:".ROOT."/admin_agencias/admin_agencia");
            }
            
        }
        else if(isset($_POST["desactivar"]) && is_numeric($_POST["codigo_agente"])){

            $dados = array(
                "valorAInserir" => 0,
                "codigo_agente" => $_POST["codigo_agente"]
            );

            $modelAgentes->atualisarActivacao($dados);

            if($action === "activacao"){
                header("Location:".ROOT."/admin_agencias");
            }
            else if($action === "activacaoAdmin"){
                header("Location:".ROOT."/admin_agencias/admin_agencia");
            }
            
        }

    }

    //Invocaçao de tabela CONTAS no banco de dados
    require("models/agencias.php");
    $modelAgencias = new Agencias();

    /** INDICAR REPONSAVEL DA AGENCIA */
    if(
        ($action === "responsabilizacao" || $action === "responsabilizacaoAdmin") && 
        isset($_SESSION["codigo_conta"])){

        if(isset($_POST["responsabilizar"]) && is_numeric($_POST["codigo_agente"])){

            $dados = array(
                "codigo_agente" => $_POST["codigo_agente"],
                "codigo_conta" => $_SESSION["codigo_conta"]
            );

            $modelAgencias->atualisarResponsabilidade($dados);

            if($action === "responsabilizacao"){            
                header("Location:".ROOT."/admin_agencias");
            }
            else if($action === "responsabilizacaoAdmin"){
                header("Location:".ROOT."/admin_agencias/admin_agencia");
            }
            
        }

    }

    //Invocaçao de tabela paises no banco de dados
    require("models/paises.php");
    $modelPaises = new Paises();

    $paises = $modelPaises->getAll();

    //VIEW DA PAGINA ADMIN AGENCIA E WELCOME 
    if( $action === "admin_agencia" && isset($_SESSION["codigo_conta"])){

        //recuperar os dados de agentes pertencentes da agencia conectado
        $agentesAgencia = $modelAgentes->obterAgentes($_SESSION["codigo_conta"]);

        //Invocaçao de tabela contas no banco de dados
        require("models/contas.php");
        $modelContas = new Contas();

        //recuperar os dados da agencia correspondente
        $agencia = $modelAgencias->getItemAgencia($_SESSION["codigo_conta"]);

        //recuperar os dados da conta correspondente
        $conta = $modelContas->getItemConta($_SESSION["codigo_conta"]);

        //Invocaçao de tabela adresso no banco de dados
        require("models/adressos.php");
        $modelAdressos = new Adressos();

        //recuperar os dados de adresso correspondente
        $adresso = $modelAdressos->getItemAdresso($_SESSION["codigo_conta"]);

        //recuperar os dados de agente correspondente
        $agente = $modelAgentes->getItemAgente($_SESSION["codigo_conta"]);

        require("views/admin_agencia.php");

    }
    else if($action !== "admin_agencia" && isset($_SESSION["codigo_agente2"])){

        $perguntas_secretas = array(
            
            "marcaTelemovel" => "qual e a primeira marca de telemovel que usaste",
            "lugarNascimento" => "qual o nome do lugar onde nasceste",
            "nomeEscola" => "Como se chama a escola primaria que frequentaste",
            "nomeMae" => "qual e o primeiro nome da sua mae",
            "numeroSapato" => "qual e o numero dos seus calçados favoritos"

        );
        //recuperar os dados de agentes pertencentes da agencia conectado
        $agentesAgencia = $modelAgentes->obterAgentes($_SESSION["codigo_agencia"]);

        require("views/welcome_agencia.php");
    }
    
    

   

?>