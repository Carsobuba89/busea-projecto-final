<?php
require_once("base.php");

class Contas extends Base{

    public function getAll(){

        $query = $this->db->prepare("
            SELECT codigo, nome_utilisador, email, palavra_passe, pergunta_secreta, resposta_secreta, data_criacao
            FROM contas
            ORDER BY data_criacao
        ");

        $query->execute();

        return $query->fetchAll( PDO::FETCH_ASSOC );

    }//FINAL DE GET ALL CONTAS 

    public function getItemConta($codigo_conta){

        $query = $this->db->prepare("
            SELECT codigo,
                nome_utilisador,
                 email, 
                 pergunta_secreta, 
                 resposta_secreta
            FROM 
                contas
            WHERE 
                codigo = ?
        ");

        $query->execute([$codigo_conta]);

        return $query->fetch();

    }//FINAL DE GET ITEM CONTA1

    public function getContaLogin($registro){

        if(
            mb_strlen($registro["username"]) >= 6 &&
            mb_strlen($registro["username"]) <= 30 &&
            mb_strlen($registro["password"]) >= 8 &&
            mb_strlen($registro["password"]) <= 1000
        ){
            $query = $this->db->prepare("
                SELECT codigo, nome_utilisador, palavra_passe, a.pais
                FROM contas AS c
                INNER JOIN agentes AS a ON(a.activo = c.codigo)
                WHERE nome_utilisador = ? 
            ");

            $query->execute(
                [
                    $registro["username"]
                ]
            );

            return $query->fetch();
        }

        return [];
    }//FINAL DE GET CONTA LOGIN 

    public function create($registro){

        $perguntas_secretas = array("marcaTelemovel", "lugarNascimento", "nomeEscola", "nomeMae", "numeroSapato");

        if(
            mb_strlen($registro["username"]) >= 6 &&
            mb_strlen($registro["username"]) <= 30 &&
            mb_strlen($registro["password"]) >= 8 &&
            mb_strlen($registro["password"]) <= 1000 &&
            mb_strlen($registro["respostaSecreta"]) >= 4 &&
            mb_strlen($registro["respostaSecreta"]) <= 120 &&
            in_array( $registro["perguntaSecreta"], $perguntas_secretas) &&
            filter_var($registro["email"], FILTER_VALIDATE_EMAIL) 
        ){
            //$message = "Primeira etapa de cria??ao da conta foi bem sucedida";

            $query = $this->db->prepare("
                INSERT INTO contas
                    (nome_utilisador, email, palavra_passe, pergunta_secreta, resposta_secreta)
                VALUES(?, ?, ?, ?, ?)
            ");

            $codigo_registro = $query->execute(
                [
                    $registro["username"],
                    $registro["email"],
                    password_hash( $registro["password"], PASSWORD_DEFAULT),
                    $registro["perguntaSecreta"],
                    $registro["respostaSecreta"]

                ]
            );

            return $codigo_registro ? $this->db->lastInsertId() : 0;
            
        }else{
            $message = "Os campos nao estao correctamente preenchidas, tenta novamente";

        }

    }//FINAL DE CREATE CONTA


    public function alterarContaAgencia($dados_conta, $codigo_conta){

        if(
            mb_strlen($dados_conta["username"]) >= 6 &&
            mb_strlen($dados_conta["username"]) <= 30 && 
            mb_strlen($dados_conta["perguntaSecreta"]) >= 4 &&
            mb_strlen($dados_conta["perguntaSecreta"]) <= 120 &&
            mb_strlen($dados_conta["respostaSecreta"]) >= 4 &&
            mb_strlen($dados_conta["respostaSecreta"]) <= 120 &&
            filter_var($dados_conta["email"], FILTER_VALIDATE_EMAIL) 
        ){

            $query = $this->db->prepare("
                UPDATE contas 
                SET  
                    nome_utilisador = ?, 
                    email = ?,
                    pergunta_secreta = ?,
                    resposta_secreta = ?
                WHERE codigo = ?
            ");

            $query->execute([

                $dados_conta["username"],
                $dados_conta["email"],
                $dados_conta["perguntaSecreta"],
                $dados_conta["respostaSecreta"],
                $codigo_conta

            ]);

        }

    }



}

?>