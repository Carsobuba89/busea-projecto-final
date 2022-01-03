<?php
    require_once("base.php");

    class Tipo_moeda extends Base{

        public function getAll(){
            $query = $this->db->prepare("
                SELECT codigo, moeda
                FROM moedas
            ");

            $query->execute();

            return $query->fetchAll( PDO::FETCH_ASSOC );

        }

    }

?>