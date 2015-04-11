<?php

require_once 'GrupoDev.php';

class Selecao{
	
	CONST DIVISOR = 45;
	
	public static function showGroupsSelected(){
		// Criar os objetos grupo
		
		$grupos = array();
		$grupos[] = new GrupoDev('HALLEY', 'AMARELO');
		$grupos[] = new GrupoDev('ENCKE', 'VERMELHO');
		$grupos[] = new GrupoDev('WOLF', 'PRETO');
		$grupos[] = new GrupoDev('KUSHIDA', 'AZUL');
			
		self::isGroupDevSelected($grupos);
		
	}
	
	private static function isGroupDevSelected(Array $grupos){
		foreach ($grupos as $grupo){
			// Verifica para cada grupo, se o resto é igual
			
			$modCometa = $grupo->getNumberCometa() % self::DIVISOR;
			$modCor = $grupo->getNumberCor() % self::DIVISOR;

			// seta as flags e dá uma mensagem
			
			if ($modCometa == $modCor){
				$grupo->setSelected(true);
				echo 'O Grupo '.$grupo->getCometa().' - '.$grupo->getCor(). ' foi selecionado =) <br>';
			}else{
				$grupo->setSelected(false);
				echo 'O Grupo '.$grupo->getCometa().' - '.$grupo->getCor(). ' nao foi selecionado =(<br>';
			}	
		}
	}
	
}