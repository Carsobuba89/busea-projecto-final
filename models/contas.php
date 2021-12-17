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

    public function getContaLogin($registro){

        if(
            mb_strlen($registro["username"]) >= 6 &&
            mb_strlen($registro["username"]) <= 30 &&
            mb_strlen($registro["password"]) >= 8 &&
            mb_strlen($registro["password"]) <= 1000
        ){
            $query = $this->db->prepare("
                SELECT codigo, nome_utilisador, palavra_passe
                FROM contas
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
            //$message = "Primeira etapa de criaçao da conta foi bem sucedida";

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



}

?>