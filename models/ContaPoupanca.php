<?php

namespace App\Models;

use DateTime;

class ContaPoupanca{



    private string $titular;

    private string $numeroConta;

    private float $saldo;

    private DateTime $dataAniversario;



    public function getTitular(): string {
    	return $this->titular;
    }

    public function setTitular(string $titular) {
    	$this->titular = $titular;
    }

    public function getNumeroConta(): string {
    	return $this->numeroConta;
    }


    public function setNumeroConta(string $numeroConta) {
    	$this->numeroConta = $numeroConta;
    }


    public function getSaldo() {
    	return number_format($this->saldo,2);
    }


    public function setSaldo(float $saldo) {
    	$this->saldo = $saldo;
    }

    public function getDataAniversario() {
    	return $this->dataAniversario->format('d/m/Y');
    }

    public function setDataAniversario(DateTime $dataAniversario) {
    	$this->dataAniversario = $dataAniversario;
    }
}

?>
