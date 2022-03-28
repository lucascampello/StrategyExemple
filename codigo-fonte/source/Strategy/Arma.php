<?php
    namespace Source\Strategy;

    abstract class Arma implements Strategy {
        protected string $nome;
        protected string $tipoArma;
        protected int $alcance;
        protected array $dano = array("minimo","maximo","efetivo");

        public function __construct(string $nome, string $tipo)
        {
            $this->setNome($nome);
            $this->setTipoArma($tipo);
        }

        abstract public function setDano() : void;
        abstract public function atacar() : string;


        /**
         * Get the value of nome
         * 
         * @return string
         */ 
        public function getNome() : string
        {
                return $this->nome;
        }

        /**
         * Set the value of nome
         */ 
        public function setNome($nome) : void
        {
                $this->nome = $nome;
        }

        /**
         * Get the value of tipoArma
         * 
         * @return string
         */ 
        public function getTipoArma() : string
        {
                return $this->tipoArma;
        }

        /**
         * Set the value of tipoArma
         */ 
        public function setTipoArma($tipoArma)
        {
                $this->tipoArma = $tipoArma;
        }

        /**
         * Get the value of dano
         * 
         * @return int
         */ 
        public function getDano() : int
        {
                return $this->dano["efetivo"];
        }

        /**
         * Get the value of alcance
         * 
         * @return int
         */ 
        public function getAlcance() : int{
                return $this->alcance;
        }

        /**
         * Set the value of alcance
         */ 
        public function setAlcance(int $alcance) {
                $this->alcance = $alcance;
        }

    }      
?>