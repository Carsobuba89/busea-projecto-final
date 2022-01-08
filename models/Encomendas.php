<?php

require_once("base.php");

class Encomendas extends Base{

    public function getPrice($codigo_encomenda){
        $query = $this->db->prepare("
            SELECT 
                codigo_encomenda,
                paises.nome,
                descricao,
                quantidade, 
                peso, 
                volume, 
                (quantidade*peso) * 10 AS valorPorPeso, 
                (volume*90) * 10 AS ValorPorVolume, 
                quantidade*10 AS valorPadrao
            FROM encomendas 
            INNER JOIN paises ON(codigo = pais_destinatario)
            WHERE codigo_encomenda = ?
        ");

        $query->execute([$codigo_encomenda]);

        return $query->fetchAll( PDO::FETCH_ASSOC );
    }

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

    public function getDetalhesEncomenda($codigo_conta, $codigo_encomenda){

        $query = $this->db->prepare("
            SELECT 
                e.codigo_encomenda, e.referencia, e.data_criada, 
                e.descricao, e.quantidade, e.peso, e.volume, 
                e.nome_remetente,  e.numero_doc_remetente, e.adresso_remetente, 
                e.cidade, e.codigo_postal, e.pais_remetente, 
                e.num_telefone_remetente, e.nome_destinatario, e.pais_destinatario, 
                e.telefone_destinatario, e.cidade_destino, e.adresso_destino, 
                e.codigo_postal_destino, e.valor_encomenda, e.tipo_encomenda
            FROM encomendas AS e
            INNER JOIN agentes AS a USING(codigo_agente)
            WHERE 
                a.activo = ? AND e.codigo_encomenda = ?
        ");

        $query->execute([
            $codigo_conta,
            $codigo_encomenda
        ]);

        return $query->fetch();
    }


    public function getDadosEncomendaParaEnvio($codigo_encomenda, $codigo_conta){
        $query = $this->db->prepare("
            SELECT 
                e.codigo_encomenda, 
                e.descricao,
                e.referencia,
                p.nome AS nomePais,
                a.activo
            FROM encomendas AS e
            INNER JOIN paises AS p ON(p.codigo = e.pais_destinatario)
            INNER JOIN agentes AS a USING(codigo_agente)
            WHERE 
                e.codigo_encomenda = ? AND a.activo = ?
        ");

        $query->execute([
            $codigo_encomenda,
            $codigo_conta
        ]);

        return $query->fetch();
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
                descricao, quantidade, peso, volume, 
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

    public function alterarDadosEncomendas($encomenda){

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
                UPDATE encomendas
                SET
                    descricao = ?, quantidade = ?, peso = ?, volume = ?,
                    nome_remetente = ?, numero_doc_remetente = ?, adresso_remetente = ?,
                    cidade = ?, codigo_postal = ?, pais_remetente = ?,
                    num_telefone_remetente = ?, nome_destinatario = ?, pais_destinatario = ?,
                    telefone_destinatario = ?, cidade_destino = ?, adresso_destino = ?, 
                    codigo_postal_destino = ?, valor_encomenda = ?, tipo_encomenda = ?
                WHERE
                    codigo_encomenda = ?
            ");

            $query->execute(
                [
                    $encomenda["descricao"], $encomenda["quantidade"], $encomenda["peso"], $encomenda["volume"], 
                    $encomenda["nomeRemetente"], $encomenda["numero_bi"], $encomenda["adresso"], 
                    $encomenda["cidade"], $encomenda["codigo_postal"], $encomenda["pais_remetente"], 
                    $encomenda["telefoneRemetente"], $encomenda["nomeDestinatario"], $encomenda["pais_destino"], 
                    $encomenda["telefoneDestinatario"], $encomenda["cidade_destino"], $encomenda["adresso_destino"],
                    $encomenda["codigo_postal_destino"], $encomenda["valorEstimado"], $encomenda["tipo_encomenda"],
                    $encomenda["codigo_encomenda"]
                ]
            );

            if($query->rowCount() > 0){
                return true;
            }else{
                return false;
            }

        }

    }

    public function alterarEstadoEncomenda($codigo_encomenda){

        $query = $this->db->prepare("
            UPDATE encomendas
            SET estado_encomenda = 4
            WHERE codigo_encomenda = ?
        ");

        $query->execute([$codigo_encomenda]);

        if($query->rowCount() > 0){
            return true;
        }else{
            return false;
        }

    }

}

?>