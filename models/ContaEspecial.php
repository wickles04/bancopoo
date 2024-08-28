<?php
namespace App\Models;
class ContaEspecial{

    private string $titular; 
    private string $numeroConta;

    private float $saldo;

    private float $limite;

    public function __construct(string $titular, string $numeroConta, float $saldo, float $limite) {
        $this->setTitular($titular);
        $this->setNumeroConta($numeroConta);
        $this->setSaldo($saldo);
        $this->setLimite($limite);
    }   

    public function getTitular(): string {
    	return $this->titular;
    }


    public function setTitular(string $titular): void {
    	$this->titular = $titular;
    }


    public function getNumeroConta(): string {
    	return $this->numeroConta;
    }


    private function setNumeroConta(string $numeroConta): void {
    	$this->numeroConta = $numeroConta;
    }

    public function getSaldo() {
    	return number_format($this->saldo,2);
    }

    public function setSaldo(float $saldo): void {
    	$this->saldo = $saldo;
    }


    public function getLimite(){
    	return number_format($this->limite,2);
    }

    public function setLimite(float $limite): void {
    	$this->limite = $limite;
    }
}