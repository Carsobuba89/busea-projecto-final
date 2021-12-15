<?php

require_once("base.php");

class Paises extends Base{

    public function getAll(){

        $query = $this->db->prepare("
            SELECT codigo, nome
            FROM paises
            ORDER BY nome
        ");

        $query->execute();

        return $query->fetchAll( PDO::FETCH_ASSOC );

    }

}
?>