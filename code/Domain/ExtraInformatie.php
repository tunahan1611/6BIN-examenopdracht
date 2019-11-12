<?php

class ExtraInformatie {
	private $_naam = "";
	private $_waarde = "";
	
	public function __construct(string $naam, string $waarde) {
	}
	
	
	public function GetNaam() : string { return $this->_naam; }
	public function GetWaarde() : string { return $this->_waarde; }
}