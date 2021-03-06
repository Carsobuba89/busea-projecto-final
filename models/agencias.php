<?php
require_once("base.php");

class Agencias extends Base{

    public function getTreeItems(){

        $query = $this->db->prepare("
            SELECT 
                codigo_agencia, 
                nome_agencia, 
                descricao_agencia, 
                imagem_agencia,
                responsavel,
                hora_abertura,
                hora_fecho,
                codigo_conta
            FROM 
                agencias
            LIMIT 3
        ");

        $query->execute();

        return $query->fetchAll( PDO::FETCH_ASSOC);

    }

    public function getItemAgencia($codigo_conta){

        $query = $this->db->prepare("
            SELECT 
                codigo_agencia, 
                nome_agencia, 
                descricao_agencia, 
                imagem_agencia,
                responsavel,
                hora_abertura,
                hora_fecho,
                codigo_conta
            FROM 
                agencias
            WHERE 
                codigo_conta = ?
        ");

        $query->execute([$codigo_conta]);

        return $query->fetch();

    }

    public function getInfoAgencia($codigo_agencia){

        $query = $this->db->prepare("
            SELECT 
                nome_agencia, 
                descricao_agencia, 
                imagem_agencia, 
                data_criacao, 
                hora_abertura, 
                hora_fecho
            FROM 
                agencias
            WHERE 
                codigo_agencia = ?
        ");

        $query->execute([$codigo_agencia]);

        return $query->fetch();

    }

    public function getAgenciasPT(){

        $query = $this->db->prepare("
            SELECT 
                ag.codigo_agencia, 
                ag.nome_agencia, 
                ag.imagem_agencia,
                ag.hora_abertura,
                ag.hora_fecho,
                ad.adresso,
                ad.cidade,
                ad.codigo_postal,
                ad.email,
                ad.telefone
            FROM 
                agencias AS ag
            INNER JOIN adressos AS ad USING(codigo_agencia)
            WHERE 
                ad.pais = 'pt'
            LIMIT 6
        ");

        $query->execute();

        return $query->fetchAll( PDO:: FETCH_ASSOC );

    }

    public function getAgenciasGB(){

        $query = $this->db->prepare("
            SELECT 
                ag.codigo_agencia, 
                ag.nome_agencia, 
                ag.imagem_agencia,
                ag.hora_abertura,
                ag.hora_fecho,
                ad.adresso,
                ad.cidade,
                ad.codigo_postal,
                ad.email,
                ad.telefone
            FROM 
                agencias AS ag
            INNER JOIN adressos AS ad USING(codigo_agencia)
            WHERE 
                ad.pais = 'gw'
            LIMIT 6
        ");

        $query->execute();

        return $query->fetchAll( PDO:: FETCH_ASSOC );

    }

    public function getAgenciasAO(){

        $query = $this->db->prepare("
            SELECT 
                ag.codigo_agencia, 
                ag.nome_agencia, 
                ag.imagem_agencia,
                ag.hora_abertura,
                ag.hora_fecho,
                ad.adresso,
                ad.cidade,
                ad.codigo_postal,
                ad.email,
                ad.telefone
            FROM 
                agencias AS ag
            INNER JOIN adressos AS ad USING(codigo_agencia)
            WHERE 
                ad.pais = 'ao'
            LIMIT 6
        ");

        $query->execute();

        return $query->fetchAll( PDO:: FETCH_ASSOC );

    }

    public function getAgenciasCV(){

        $query = $this->db->prepare("
            SELECT 
                ag.codigo_agencia, 
                ag.nome_agencia, 
                ag.imagem_agencia,
                ag.hora_abertura,
                ag.hora_fecho,
                ad.adresso,
                ad.cidade,
                ad.codigo_postal,
                ad.email,
                ad.telefone
            FROM 
                agencias AS ag
            INNER JOIN adressos AS ad USING(codigo_agencia)
            WHERE 
                ad.pais = 'cv'
            LIMIT 6
        ");

        $query->execute();

        return $query->fetchAll( PDO:: FETCH_ASSOC );

    }

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
                    nl2br($registro["descricao"]),
                    $registro["imagem_agencia"],
                    $registro["hora_abertura"],
                    $registro["hora_fecho"],
                    $registro["codigo_conta"]
                ]
            );

            return $codigo_registro ? $this->db->lastInsertId() : 0;

        }

    }


    public function atualisarResponsabilidade($dados){

        $query = $this->db->prepare("
            UPDATE agencias
            SET responsavel = ?
            WHERE codigo_conta = ?
        ");

        $query->execute([
            $dados["codigo_agente"],
            $dados["codigo_conta"]
        ]);

    }

    public function alterarDadosAgencia($dadosAgencia){

        if(
            mb_strlen($dadosAgencia["nome_agencia"]) >= 6  &&
            mb_strlen($dadosAgencia["nome_agencia"]) <= 120 &&
            mb_strlen($dadosAgencia["descricao"]) >= 60 &&
            mb_strlen($dadosAgencia["descricao"]) <= 16777 &&
            mb_strlen($dadosAgencia["hora_abertura"]) >= 3 &&
            mb_strlen($dadosAgencia["hora_abertura"]) <= 6 &&
            mb_strlen($dadosAgencia["hora_fecho"]) >= 3 &&
            mb_strlen($dadosAgencia["hora_fecho"]) <= 6 
        ){
            $query = $this->db->prepare("
                UPDATE agencias
                SET 
                    nome_agencia = ?,
                    descricao_agencia = ?,
                    imagem_agencia = ?,
                    hora_abertura = ?,
                    hora_fecho = ?
                WHERE
                    codigo_agencia = ?
            ");

            $query->execute([
                $dadosAgencia["nome_agencia"],
                nl2br($dadosAgencia["descricao"]),
                $dadosAgencia["imagem_agencia"],
                $dadosAgencia["hora_abertura"],
                $dadosAgencia["hora_fecho"],
                $dadosAgencia["codigo_agencia"]

            ]);

            if($query->rowCount() > 0){
                return true;
            }else{
                return false;
            }

        }
    }

}

?>