<?php
    //Mostrar Dados de agencias por pais
    require("models/agencias.php");
    $modelAgencias = new Agencias();

    require("models/agentes.php");
    $modelAgentes = new Agentes();

    if(!empty($action) && is_numeric($action)){

        require("models/adressos.php");
        $modelAdressos = new Adressos();

        $info_agencia = $modelAgencias->getInfoAgencia($action);

        $info_adressos = $modelAdressos->getAllAdressosAgencia($action);

        $info_agentes = $modelAgentes->infoAgentesAgencia($action);
        
        require("views/completeInfoAgencia.php");
        
    }
    else{

        //Agencias em Portugal
        $agenciasPortugal  = $modelAgencias->getAgenciasPT();

        //Agencias em Guine Bissau
        $agenciasGBissau  = $modelAgencias->getAgenciasGB();

        //Agencias em Angola
        $agenciasAngola  = $modelAgencias->getAgenciasAO();

        //Agencias em Cabo verde
        $agenciasCaboverde  = $modelAgencias->getAgenciasCV();
        
        //CODIGO PARA MOSTRAR INFORMAAÇAO COMPLETA DE UMA AGENCIA
        

        require("views/agencias.view.php");

    }


     

    

    

?>