<?php
    require_once("base.php");

    class Pagamentos extends Base{

        public function getAll($codigo_conta){

            $query = $this->db->prepare("
            SELECT 
            p.data_pago, 
            p.valor_pago, 
            fp.descricao AS formaPagamento, 
            e.referencia, 
            e.descricao, 
            ps.nome AS paisDestino
            FROM pagamentos AS p
            INNER JOIN encomendas AS e USING(codigo_encomenda)
            INNER JOIN formas_pagamento AS fp ON(fp.codigo = p.forma_pagamento)
            INNER JOIN paises as ps ON(ps.codigo = e.pais_destinatario)
            INNER JOIN agentes AS ag ON(ag.codigo_agente = e.codigo_agente)
            WHERE ag.activo = ?
            ");

            $query->execute([$codigo_conta]);

            return $query->fetchAll( PDO::FETCH_ASSOC );

        }

        public function efectuarPagamento($dadosPagamento){
            
            $query = $this->db->prepare("
                INSERT INTO pagamentos
                (valor_pago, moeda, detalhes, forma_pagamento, codigo_encomenda)
                VALUES(?, ?, ?, ?, ?)
            ");

            $codigo_pagamento = $query->execute(
                [
                    $dadosPagamento["valorPago"],
                    $dadosPagamento["moeda"],
                    $dadosPagamento["detalhesPagamento"],
                    $dadosPagamento["formaPagamento"],
                    $dadosPagamento["codigo_encomenda"]
                ]
            );

            return $codigo_pagamento ? $this->db->lastInsertId() : 0;
        }
    }


?>