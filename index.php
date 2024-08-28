<?php

require __DIR__ . "/models/ContaEspecial.php";
require __DIR__ . "/models/ContaPoupanca.php";

use App\Models\{ContaEspecial,ContaPoupanca};



$cliente = new ContaEspecial('nyckoly', '071316', 1000000.01, 100000000.99);

echo $cliente->getTitular() . '<br><br>';
echo $cliente->getNumeroConta() . '<br><br>';
echo $cliente->getSaldo() . '<br><br>';
echo $cliente->getLimite() . '<br><br>';


$cliente2 = new ContaPoupanca();
$cliente2->setTitular('wickles');
$cliente2->setNumeroConta('161307');
$cliente2->setSaldo(100.20);
$data = new DateTime('2024-08-28');
$cliente2->setDataAniversario($data);

echo $cliente2->getTitular() . '<br><br>';
echo $cliente2->getNumeroConta() . '<br><br>';
echo $cliente2->getSaldo() . '<br><br>';
echo $cliente2->getDataAniversario() . '<br><br>';



?>