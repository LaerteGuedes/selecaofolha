<?php

class GrupoDev{
		
	private $cometa;
	private $cor;
	private $number_cometa;
	private $number_cor;
	private $selected;
	
	public function __construct($cometa, $cor){
		$this->setCometa($cometa);
		$this->setCor($cor);
		$this->number_cometa = self::toNumber($this->cometa);
		$this->number_cor = self::toNumber($this->cor);
	}
	
	public function setCometa($cometa){
		$this->cometa = $cometa;
	}
	
	public function setCor($cor){
		$this->cor = $cor;	
	}
	
	public function setNumberCometa($number_cometa){
		$this->number_cometa = $number_cometa;
	}
	
	public function setNumberCor($number_cor){
		$this->number_cor = $number_cor;
	}
	
	public function setSelected($selected){
		$this->selected = $selected;
	}
	
	public function getCometa(){
		return $this->cometa;
	}
	
	public function getCor(){
		return $this->cor;
	}
	
	public function getNumberCometa(){
		return $this->number_cometa;
	}
	
	public function getNumberCor(){
		return $this->number_cor;
	}
	
	public function getSelected(){
		return $this->selected;
	}
	
	private static function toNumber($string){
		// Função que desmembra a string em vários caracteres e faz o cálculo
		
		$arrStr = array();
		$arrNumber = array();
		$arrStr = str_split($string,1);
		
		// Variável produto 1, elemento neutro da multiplicação
		
		$prod = 1;
		
		foreach ($arrStr as $char){
			$prod *= (ord(strtolower($char)) - 96);
		}
		return $prod;
	}
	
}