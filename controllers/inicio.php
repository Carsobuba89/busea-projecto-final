<?php 
   
   require("models/conteudos.php");
   $modelConteudos = new Conteudos();

   $slides = $modelConteudos->getSlides();

   require("models/agencias.php");
   $modelAgencias = new Agencias();

   $agencias = $modelAgencias->getTreeItems();


   $noticias = $modelConteudos->getNews();

   $infoEncomendas = $modelConteudos->getInfoEncomendas();

   /* echo "<pre>"; print_r($infoEncomendas); echo "</pre>"; exit; */
   
       require("views/inicio.view.php");

?>