<?php

require (__DIR__."/vendor/autoload.php");
use Source\Personagem;
use Source\Strategy\Branca\Espada;
use Source\Strategy\Fogo\Revolver;

$jogador = new Personagem("Lucas Campello");
$jogador->setStrategy(new Espada());
$jogador->efetuarAtaque();

echo "<br>";
$jogador->setStrategy(new Revolver());
$jogador->efetuarAtaque();

echo "<br>";
$jogador->efetuarAtaque();

echo "<br>";
$jogador->efetuarAtaque();

echo "<br>";
$jogador->efetuarAtaque();

echo "<br>";
$jogador->efetuarAtaque();

?>