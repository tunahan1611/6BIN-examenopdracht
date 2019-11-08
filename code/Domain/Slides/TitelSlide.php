<?php

require_once(__DIR__ . "/Slide.php");

class TitelSlide extends Slide {
	private $_titel = "";
	private $_subtitel = "";
	
	public function __construct(string $titel, string $subtitel) {
		$this->_titel = $titel;
		$this->_subtitel = $titel;
	}
	
	/*
	Genereert de HTML code om een TitelSlide te tonen op het scherm
	*/
	public function GetHTMLCode() : string {
		return "";
	}
}