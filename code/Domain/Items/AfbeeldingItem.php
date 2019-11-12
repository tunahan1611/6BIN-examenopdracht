<?php

require_once(__DIR__ . "/Item.php");

class AfbeeldingItem implements Item {
	private $_source = "";
	
	public function __construct(string $source) {
	}
	
	/*
	Genereert de HTML code om een AfbeeldingItem te tonen op het scherm
	*/
	public function GetHTMLCode() : string {
		return "";
	}
}