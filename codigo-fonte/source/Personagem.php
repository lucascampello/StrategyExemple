<?php

namespace Source;
use Source\Strategy\Strategy;

class Personagem {
    private string $name;
    private Strategy $estrategiaCombate;

    public function __construct(string $nome)
    {
        $this->setName($nome);
    }

    public function setStrategy(Strategy $strategy)
    {
        $this->estrategiaCombate = $strategy;
    }

    public function efetuarAtaque(): void {
        echo $this->estrategiaCombate->atacar();
    }

    /**
     * Get the value of name
     * 
     * @return string $name
     */ 
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     */ 
    public function setName($name) : void
    {
        $this->name = $name;
    }
}


?>