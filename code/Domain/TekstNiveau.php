<?php

class TekstNiveau {
	private $_niveau = 0;
	private $_lettertype = "Arial";
	private $_lettergrootte = 11;
	private $_kleur = "black";
	
	public function __construct(int $niveau) {
		$this->_niveau = $niveau;
	}
	
	public function GetNiveau() : int { return $this->_niveau; }
	public function GetLettertype() : string { return $this->_lettertype; }
	public function GetLettergrootte() : int { return $this->_lettergrootte; }
	public function GetKleur() : string { return $this->_kleur; }
}