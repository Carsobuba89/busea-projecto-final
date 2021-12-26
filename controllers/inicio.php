<?php 
   
   require("models/conteudos.php");
   $modelConteudos = new Conteudos();

   $slides = $modelConteudos->getAllSlides();
   
       require("views/inicio.view.php");

?>