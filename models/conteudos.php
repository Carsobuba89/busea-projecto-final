<?php
    require_once("base.php");

    class Conteudos extends Base{

        public function getAll(){

            $query = $this->db->prepare("
                SELECT 
                    c.codigo, 
                    c.titulo, 
                    c.data_criacao, 
                    t.nome AS nomeServico
                FROM conteudo_paginas AS c
                INNER JOIN tipo_conteudo AS t ON(t.codigo = c.tipo_conteudo)
                ORDER BY prioridade DESC
                LIMIT 20
            ");

            $query->execute();

            return $query->fetchAll( PDO::FETCH_ASSOC );

        }


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

        public function getSeguimento(){

            $query = $this->db->prepare("
                SELECT 
                    codigo,
                    titulo,
                    conteudo,
                    imagem
                FROM
                    conteudo_paginas
                WHERE 
                    tipo_conteudo = 5
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

        public function criarNovoConteudo($dadosConteudo, $nomeImagem){

            if( 
                mb_strlen($_POST["titulo"]) >= 6 &&
                mb_strlen($_POST["titulo"]) <= 120 &&
                mb_strlen($_POST["descricao"]) >= 60 &&
                mb_strlen($_POST["descricao"]) <= 65535
            ){

                $query = $this->db->prepare("
                    INSERT INTO conteudo_paginas
                        (titulo, conteudo, imagem, tipo_conteudo) 
                    VALUES(?, ?, ?, ?)
                ");

                $codigo_conteudo = $query->execute(
                    [
                        $dadosConteudo["titulo"],
                        $dadosConteudo["descricao"],
                        $nomeImagem,
                        $dadosConteudo["tipo_conteudo"]
                    ]
                );

                return $codigo_conteudo ? $this->db->lastInsertId() : 0;
            
            }else{
                $message = "Os campos nao estao correctamente preenchidas, tenta novamente";

            }
        }

    }



?>