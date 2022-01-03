<?php

require_once("base.php");

class Encomendas extends Base{


    public function getNovosEncomendas($codio_conta){

        $query = $this->db->prepare("
            SELECT e.codigo_encomenda, e.referencia, e.data_criada, e.descricao, e.estado_encomenda
            FROM encomendas AS e
            INNER JOIN agentes AS a USING(codigo_agente)
            WHERE e.estado_encomenda = 0 AND a.activo = ?
        ");

        $query->execute([$codio_conta]);

        return $query->fetchAll( PDO::FETCH_ASSOC );
    }

    public function create($encomenda){

        if(
            mb_strlen($encomenda["nomeRemetente"]) >= 3 &&
            mb_strlen($encomenda["nomeRemetente"]) <= 60 &&
            mb_strlen($encomenda["telefoneRemetente"]) >= 7 &&
            mb_strlen($encomenda["telefoneRemetente"]) <= 21 &&
            mb_strlen($encomenda["descricao"]) >= 3 &&
            mb_strlen($encomenda["descricao"]) <= 120 &&
            is_numeric($encomenda["quantidade"]) &&
            mb_strlen($encomenda["nomeDestinatario"]) >= 3 &&
            mb_strlen($encomenda["nomeDestinatario"]) <= 60 &&
            mb_strlen($encomenda["telefoneDestinatario"]) >= 7 &&
            mb_strlen($encomenda["telefoneDestinatario"]) <= 21 
        ){
            $query = $this->db->prepare("
            INSERT INTO encomendas
            (
                descricao, Quantidade, peso, volume, 
                nome_remetente, numero_doc_remetente, adresso_remetente, 
                cidade, codigo_postal, pais_remetente, 
                num_telefone_remetente, nome_destinatario, pais_destinatario, 
                telefone_destinatario, cidade_destino, adresso_destino, 
                codigo_postal_destino, valor_encomenda, codigo_agente, 
                tipo_encomenda, estado_encomenda, referencia
            )
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 0, ?)
            ");

            $codigo_encomenda = $query->execute(
                [
                    $encomenda["descricao"], $encomenda["quantidade"], $encomenda["peso"], $encomenda["volume"], 
                    $encomenda["nomeRemetente"], $encomenda["numero_bi"], $encomenda["adresso"], 
                    $encomenda["cidade"], $encomenda["codigo_postal"], $encomenda["pais_remetente"], 
                    $encomenda["telefoneRemetente"], $encomenda["nomeDestinatario"], $encomenda["pais_destino"], 
                    $encomenda["telefoneDestinatario"], $encomenda["cidade_destino"], $encomenda["adresso_destino"],
                    $encomenda["codigo_postal_destino"], $encomenda["valorEstimado"], $encomenda["codigo_agente"],
                    $encomenda["tipo_encomenda"], $encomenda["pais_remetente"] . rand(1, 100) . date('mhi')
                ]
            );

            return $codigo_encomenda ? $this->db->lastInsertId() : 0;

        }
    }

}

?>