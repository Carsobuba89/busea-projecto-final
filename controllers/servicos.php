<?php
    require("models/conteudos.php");
    $modelConteudos = new Conteudos();

    $servico = $modelConteudos->getServices();



    require("views/servico.view.php");




?>