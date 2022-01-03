<?php
    require("base.php");

    class Formas_pagamento extends Base{

        public function getAll(){
            $query = $this->db->prepare("
                SELECT codigo, descricao
                FROM formas_pagamento
            ");

            $query->execute();

            return $query->fetchAll( PDO::FETCH_ASSOC );

        }

    }

?>