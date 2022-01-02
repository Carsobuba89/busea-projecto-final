<?php

require_once("base.php");

class Tipo_encomendas extends Base{

    public function getAll(){

        $query = $this->db->prepare("
            SELECT id_tipo_encomenda, descricao
            FROM tipo_encomendas
            ORDER BY descricao
        ");

        $query->execute();

        return $query->fetchAll( PDO::FETCH_ASSOC );

    }

}
?>