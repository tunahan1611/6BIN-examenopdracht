<?php

require_once(__DIR__ . "/Item.php");

class LijstItem implements Item {
	private $_tekstItems = array();
	private $_lijstTeken = "-";
	
	public function __construct(string $teken) {
		$this->_lijstTeken = $teken;
	}
	
	public function VoegItemToe(TekstItem $tekstItem) {
		$this->_tekstItems[] = $tekstItem;
	}
	
	/*
	Genereert de HTML code om een LijstItem te tonen op het scherm
	*/
	public function GetHTMLCode() : string {
		return "";
	}
}