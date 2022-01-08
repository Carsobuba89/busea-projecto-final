<?php

    require_once("base.php");

    class Tipo_conteudo extends Base{

        public function getAll(){

            $query = $this->db->prepare("
                SELECT codigo, nome
                FROM tipo_conteudo
                ORDER BY nome
            ");

            $query->execute();

            return $query->fetchAll( PDO::FETCH_ASSOC );
        }
    }

?>