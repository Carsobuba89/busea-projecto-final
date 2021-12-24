<?php
require_once("base.php");
class adressos extends Base{

    public function getItemAdresso($codigo_conta){

        $query = $this->db->prepare("
            SELECT 
                ad.codigo, 
                ad.adresso, 
                ad.cidade, 
                ad.codigo_postal, 
                ad.pais, 
                ad.email, 
                ad.telefone
            FROM 
                adressos AS ad
            INNER JOIN 
                agencias AS ag USING(codigo_agencia)
            WHERE 
                ag.codigo_conta = ?

        ");

        $query->execute([$codigo_conta]);

        return $query->fetch();

    }

    public function create($registro){

        if(
            
            mb_strlen($registro["adresso"]) >= 8 &&
            mb_strlen($registro["adresso"]) <= 120 &&
            mb_strlen($registro["cidade"]) >= 4 &&
            mb_strlen($registro["cidade"]) <= 40 &&
            mb_strlen($registro["codigo_postal"]) >= 4 &&
            mb_strlen($registro["codigo_postal"]) <= 20 &&
            filter_var($registro["email"], FILTER_VALIDATE_EMAIL) &&
            mb_strlen($registro["num_telefone"]) >= 7 &&
            mb_strlen($registro["num_telefone"]) <= 20 &&
            intval($registro["codigo_agencia"])

        ){
            $query = $this->db->prepare("
                INSERT INTO adressos
                    (adresso, cidade, codigo_postal, pais, email, telefone, codigo_agencia)
                VALUES(?, ?, ?, ?, ?, ?, ?)
            ");

            $codigo_enderecos = $query->execute(
                [
                    $registro["adresso"],
                    $registro["cidade"],
                    $registro["codigo_postal"],
                    $registro["codigo_pais"],
                    $registro["email"],
                    $registro["num_telefone"],
                    $registro["codigo_agencia"]
                ]
            );

            return $codigo_enderecos ? $this->db->lastInsertId() : 0;

        }

    }
}

?>