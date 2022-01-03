<?php
    require_once("base.php");

    class Pagamentos extends Base{

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