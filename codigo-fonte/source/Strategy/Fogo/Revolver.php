<?php

namespace Source\Strategy\Fogo;
use Source\Strategy\Arma;

class Revolver extends Arma {

    private array $municao;

    public function __construct()
    {
        parent::__construct("Revolver","Perfurante");
        
        $this->dano = array(
            "minimo" => 8,
            "maximo" => 16
        );

        $this->setAlcance(12);

        $this->setMunicao(3);
    }

    public function atacar() : string
    {
        $mensagem = "";

        if($this->getMunicaoAtual() == 0)
        {
            $mensagem .= "Recarregando...";
            $this->recarregar();
        }
        else 
        {
            $this->setDano();
            $this->atirar();
            $mensagem .= "Arma: " . $this->getNome() . " || Tipo de Dano: " . $this->getTipoArma() . " || Dano Causado : " . $this->getDano() . " || Disparos Restantes: " . $this->getMunicaoAtual();
        }

        return $mensagem;
    }

    public function setDano() : void
    {
        $this->dano['efetivo'] = rand($this->dano["minimo"],$this->dano["maximo"]);
    }

    public function setMunicao(int $cargaMaxima) : void {
        $this->municao = array (
            "maximo" => $cargaMaxima,
            "atual" => $cargaMaxima
        );
    }

    public function getMunicaoAtual() : int {
        return $this->municao["atual"];
    }

    private function recarregar() : void{
        $this->municao["atual"] = $this->municao["maximo"];
    }

    private function atirar() : void {
        $this->municao["atual"]--;
    }
}

?>