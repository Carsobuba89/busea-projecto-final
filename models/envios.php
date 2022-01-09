<?php
    require_once("base.php");

    class Envios extends Base{
        //Para Fazer Seguimento das encomendas enviados
        public function getAllEnvios(){

            $query = $this->db->prepare("
                SELECT
                    ev.codigo, ev.data_envio, ec.referencia, ec.descricao, 
                    p.nome AS nomePaisDestino, ev.data_previsto_chegada
                FROM envios AS ev
                INNER JOIN encomendas AS ec USING(codigo_encomenda)
                INNER  JOIN paises AS p ON(p.codigo = ec.pais_destinatario)
                
            ");

            $query->execute();

            return $query->fetchAll( PDO:: FETCH_ASSOC );

        }

        //Lista de encomendas prontas para serem recebidos
        public function getEncomendasParaReceber(){

            $query = $this->db->prepare("
                SELECT
                    ev.codigo, ev.data_envio, ec.referencia, ec.descricao, 
                    ev.data_previsto_chegada, pd.nome AS nomePaisRemetente, ec.codigo_encomenda
                FROM envios AS ev
                INNER JOIN encomendas AS ec USING(codigo_encomenda)
                INNER  JOIN paises AS pd ON(pd.codigo = ec.pais_remetente)
                WHERE ev.data_recebido IS NULL
            ");

            $query->execute();

            return $query->fetchAll( PDO:: FETCH_ASSOC );

        }


        public function registarEnvio($dadosEnvio){

            $query = $this->db->prepare("
                INSERT INTO envios
                (data_previsto_chegada, tipo_envios, codigo_encomenda)
                VALUES(?, ?, ?)
            ");

            $codigo_envio = $query->execute(
                [
                    $dadosEnvio["data_previsto_chegada"],
                    $dadosEnvio["tipo_envio"],
                    $dadosEnvio["codigo_encomenda"]
                ]
            );

            $codigo_envio ? $this->db->lastInsertId() : 0;

            if(!empty($codigo_envio)){

                $query2 = $this->db->prepare("
                    UPDATE encomendas
                    SET estado_encomenda = 1
                    WHERE codigo_encomenda = ?
                ");

                $query2->execute([ $dadosEnvio["codigo_encomenda"] ]);

                if($query2->rowCount() > 0){
                    return true;
                }else{
                    return false;
                }

            }
      
        }

        public function receberEncomenda($dadosrececao){

            $query = $this->db->prepare("
                UPDATE envios
                SET 
                    data_recebido = ?,
                    estado_pacote = ?
                WHERE codigo_encomenda = ?
                
            ");

            $codigo_envio = $query->execute(
                [
                    $dadosrececao["data_recebido"],
                    $dadosrececao["estado_pacote"],
                    $dadosrececao["codigo_encomenda"]
                ]
            );

            $codigo_envio ? $this->db->lastInsertId() : 0;

            if(!empty($codigo_envio)){

                $query2 = $this->db->prepare("
                    UPDATE encomendas
                    SET estado_encomenda = 2
                    WHERE codigo_encomenda = ?
                ");

                $query2->execute([ $dadosrececao["codigo_encomenda"] ]);

                if($query2->rowCount() > 0){
                    return true;
                }else{
                    return false;
                }

            }
      
        }

    }

?>