<?php

require_once("base.php");

class Tipo_envios extends Base{

    public function getAll(){

        $query = $this->db->prepare("
            SELECT codigo, nome,data_criacao
            FROM tipo_envios
        ");

        $query->execute();

        return $query->fetchAll( PDO::FETCH_ASSOC );
    }
}

?>