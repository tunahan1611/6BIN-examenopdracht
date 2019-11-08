<?php

require_once(__DIR__ . "/Item.php");

class TabelItem implements Item {
	private $_items = array();
	private $_aantalKolommen = 1;
	
	public function __construct(int $aantalKolommen) {
		$this->_aantalKolommen = $aantalKolommen;
	}
	
	
	public function VoegItemToe(Item $item) {
		$this->_items[] = $item;
	}
	
	/*
	Genereert de HTML code om een TabelItem te tonen op het scherm
	*/
	public function GetHTMLCode() : string {
		return "";
	}
	
}