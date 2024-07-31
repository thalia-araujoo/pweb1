<?php

    class Livro {
        private $titulo;
        private $autor;
        private $ano;

        public function __construct($titulo, $autor, $ano){
            $this->titulo = $titulo;
            $this->autor = $autor;
            $this->ano = $ano;
        }

        public function getTitulo(){
            return $this->titulo;
        }

        public function getAutor(){
            return $this->autor;
        }

        public function getAno(){
            return $this->ano;
        }


    }

?>