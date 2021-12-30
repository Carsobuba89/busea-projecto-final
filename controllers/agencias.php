<?php

    if(!empty($action) && is_numeric($action)){
        
        //Mostrar Dados de agencias por pais
        require("models/agencias.php");
        $modelAgencias = new Agencias();

        $info_agencia = $modelAgencias->getInfoAgencia($action);
        require("views/completeInfoAgencia.php");
        
    }
    else{
        //Mostrar Dados de agencias por pais
        require("models/agencias.php");
        $modelAgencias = new Agencias();

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