<?php
    require("models/conteudos.php");
    $modelConteudos = new Conteudos();

    if(isset($action)){

        $content = $modelConteudos->getOneContent($action);

        /* echo "<pre>"; print_r($content); echo "</pre>"; exit; */

        
    }

    require("views/conteudo_detail.view.php");

?>