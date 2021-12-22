<?php
    require("models/paises.php");
    $modelPaises = new Paises();
    
    $paises = $modelPaises->getAll();

    if(isset($_SESSION["codigo_agente2"])){

        $perguntas_secretas = array(
            
            "marcaTelemovel" => "qual e a primeira marca de telemovel que usaste",
            "lugarNascimento" => "qual o nome do lugar onde nasceste",
            "nomeEscola" => "Como se chama a escola primaria que frequentaste",
            "nomeMae" => "qual e o primeiro nome da sua mae",
            "numeroSapato" => "qual e o numero dos seus calçados favoritos"

        );

    



        require("views/admin_agencia.php");
    }

   

?>