<?php
    require("models/conteudos.php");
    $modelConteudos = new Conteudos();

    if(isset($action)){

        $slide = $modelConteudos->getOneSlide($action);

        //var_dump($lide); exit;

        
    }

    require("views/conteudo_detail.view.php");

?>