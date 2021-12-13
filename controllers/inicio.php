<?php 
   
   if(!empty($action)){
       //echo $action;

       if(!is_numeric($action)){
           header("HTTP/1.1 400 Bad Request");
           die("Pedido Invalido");
       }

   }
   else{
       require("views/inicio.php");
   }
?>