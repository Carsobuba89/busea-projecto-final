<?php 
   
   require("models/conteudos.php");
   $modelConteudos = new Conteudos();

   $slides = $modelConteudos->getAllSlides();

   require("models/agencias.php");
   $modelAgencias = new Agencias();

   $agencias = $modelAgencias->getTreeItems();
   
       require("views/inicio.view.php");

?>