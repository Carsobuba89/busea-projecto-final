<?php
    require_once("base.php");

    class Conteudos extends Base{

        public function getSlides(){

            $query = $this->db->prepare("
                SELECT 
                    codigo,
                    titulo,
                    conteudo,
                    imagem
                FROM
                    conteudo_paginas
                WHERE 
                    tipo_conteudo = 1
                LIMIT 3
            ");

            $query->execute();

            return $query->fetchAll( PDO::FETCH_ASSOC );

        }

        public function getNews(){

            $query = $this->db->prepare("
                SELECT 
                    codigo,
                    titulo,
                    conteudo,
                    data_criacao
                FROM
                    conteudo_paginas
                WHERE 
                    tipo_conteudo = 2
                LIMIT 6
            ");

            $query->execute();

            return $query->fetchAll( PDO::FETCH_ASSOC );

        }

        public function getInfoEncomendas(){

            $query = $this->db->prepare("
                SELECT 
                    codigo,
                    titulo,
                    conteudo,
                    imagem
                FROM
                    conteudo_paginas
                WHERE 
                    tipo_conteudo = 3
            ");

            $query->execute();

            return $query->fetchAll( PDO::FETCH_ASSOC );

        }

        public function getServices(){

            $query = $this->db->prepare("
                SELECT 
                    codigo,
                    titulo,
                    conteudo,
                    imagem
                FROM
                    conteudo_paginas
                WHERE 
                    tipo_conteudo = 7
            ");

            $query->execute();

            return $query->fetchAll( PDO::FETCH_ASSOC );

        }

        public function getOneContent($codigo){

            $query = $this->db->prepare("
                SELECT 
                    codigo,
                    titulo,
                    conteudo,
                    imagem,
                    data_criacao,
                    tipo_conteudo,
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