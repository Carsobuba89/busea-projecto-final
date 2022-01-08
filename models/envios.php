<?php
    require_once("base.php");

    class Envios extends Base{

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

    }

?>