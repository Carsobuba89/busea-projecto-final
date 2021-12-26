<?php
    require_once("base.php");

    class Conteudos extends Base{

        public function getAllSlides(){
            $query = $this->db->prepare("
                SELECT 
                    codigo,
                    titulo,
                    conteudo,
                    imagem
                FROM
                    conteudo_paginas
            ");

            $query->execute();

            return $query->fetchAll( PDO::FETCH_ASSOC );

        }

        public function getOneSlide($codigo){
            $query = $this->db->prepare("
                SELECT 
                    codigo,
                    titulo,
                    conteudo,
                    imagem,
                    data_criacao,
                    visualizacoes
                FROM
                    conteudo_paginas
                WHERE codigo = ?
            ");

            $query->execute([$codigo]);

            return $query->fetch();

        }

    }



?>