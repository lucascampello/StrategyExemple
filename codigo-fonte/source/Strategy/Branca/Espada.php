<?php
namespace Source\Strategy\Branca;
use Source\Strategy\Arma;

class Espada extends Arma {

    public function __construct()
    {
        parent::__construct("Espada","Cortante");
        
        $this->dano = array(
            "minimo" => 1,
            "maximo" => 8
        );

        $this->setAlcance(1);
    }

    public function atacar() : string
    {
        $this->setDano();
        return "Arma: " . $this->getNome() . " || Tipo de Dano: " . $this->getTipoArma() . " || Dano Causado : " . $this->getDano();
    }

    public function setDano() : void
    {
        $this->dano['efetivo'] = rand($this->dano["minimo"],$this->dano["maximo"]);
    }
}

?>