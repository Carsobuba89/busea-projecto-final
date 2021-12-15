<?php
require_once("base.php");

class Agencias extends Base{

    public function create($registro){

        if(
            mb_strlen($registro["nome_agencia"]) >= 6  &&
            mb_strlen($registro["nome_agencia"]) <= 120 &&
            mb_strlen($registro["descricao"]) >= 60 &&
            mb_strlen($registro["descricao"]) <= 16777 &&
            mb_strlen($registro["hora_abertura"]) >= 3 &&
            mb_strlen($registro["hora_abertura"]) <= 6 &&
            mb_strlen($registro["hora_fecho"]) >= 3 &&
            mb_strlen($registro["hora_fecho"]) <= 6 
        ){

            $query = $this->db->prepare("
                INSERT INTO agencias
                    (nome_agencia, descricao_agencia, imagem_agencia, hora_abertura, hora_fecho, codigo_conta)
                VALUES(?, ?, ?, ?, ?, ?)
            ");

            $codigo_registro = $query->execute(
                [
                    $registro["nome_agencia"],
                    $registro["descricao"],
                    $registro["imagem_agencia"],
                    $registro["hora_abertura"],
                    $registro["hora_fecho"],
                    $registro["codigo_conta"]
                ]
            );

            return $codigo_registro ? $this->db->lastInsertId() : 0;

        }

    }

}

?>