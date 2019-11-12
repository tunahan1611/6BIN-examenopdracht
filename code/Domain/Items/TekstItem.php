<?php

require_once(__DIR__ . "/Item.php");

class TekstItem implements Item {
	private $_tekst = "";
	private $_tekstNiveau = null;
	
	public function __construct(string $tekst, TekstNiveau $tekstNiveau) {
	}
	
	
	/*
	Genereert de HTML code om een TekstItem te tonen op het scherm
	*/
	public function GetHTMLCode() : string {
		return "";
	}
	
}