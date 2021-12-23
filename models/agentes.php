<?php
require_once("base.php");

class Agentes extends Base{

    public function getAll(){

        $query = $this->db->prepare("
        SELECT 
            codigo_agente, 
            nome, avatar, 
            data_nascimento, 
            lugar_nascimento,
            num_doc_identificacao,
            genero, numero_telefone, 
            email,
            pais, 
            adresso, 
            cidade, 
            codigo_postal,
            codigo_agencia,
            activo, 
            data_criacao, 
            data_actualisacao 
        FROM 
            agentes 
        ");

        $query->execute();

        return $query->fetchAll( PDO::FETCH_ASSOC );
    }

    public function obterAgentes($codigo_agencia){

        $query = $this->db->prepare("
            SELECT codigo_agente, nome 
            FROM agentes 
            WHERE codigo_agencia = ?
        ");

        $query->execute([$codigo_agencia]);

        return $query->fetchAll( PDO::FETCH_ASSOC );
    }

    public function atualisarActivacao($dados){

        $query = $this->db->prepare("
            UPDATE agentes
            SET activo = ?
            WHERE codigo_agente = ?

        ");

        $query->execute(
            [
                $dados["valorAInserir"],
                $dados["codigo_agente"]
            ]
        );

        /* return $query->fetchAll( PDO::FETCH_ASSOC ); */

    }

    public function create($registro){

        if(
            mb_strlen($registro["nome_agente"]) >= 6  &&
            mb_strlen($registro["nome_agente"]) <= 60 &&
            /* checkdate($registro["data_nascimento"]) && */
            mb_strlen($registro["lugar_nascimento"]) >= 3 &&
            mb_strlen($registro["lugar_nascimento"]) <= 60 &&
            mb_strlen($registro["numero_bi"]) >= 3 &&
            mb_strlen($registro["numero_bi"]) <= 14 &&
            isset($registro["genero"]) &&
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
                INSERT INTO agentes
                    (
                        nome, 
                        avatar, 
                        data_nascimento, 
                        lugar_nascimento, 
                        num_doc_identificacao, 
                        genero, 
                        numero_telefone, 
                        email, 
                        pais,
                        adresso, 
                        cidade, 
                        codigo_postal, 
                        codigo_agencia
                    )
                VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
            ");

            $codigo_registro = $query->execute(
                [
                    $registro["nome_agente"],
                    $registro["imagem_agente"],
                    $registro["data_nascimento"],
                    $registro["lugar_nascimento"],
                    $registro["numero_bi"],
                    $registro["genero"],
                    $registro["codigo_pais"],
                    $registro["cidade"],
                    $registro["adresso"],
                    $registro["codigo_postal"],
                    $registro["email"],
                    $registro["num_telefone"],
                    $registro["codigo_agencia"]

                ]
            );

            return $codigo_registro ? $this->db->lastInsertId() : 0;

        }

    }

}

?>