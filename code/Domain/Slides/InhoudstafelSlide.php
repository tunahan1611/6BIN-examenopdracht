<?php

require_once(__DIR__ . "/SpecialeSlide.php");
require_once(__DIR__ . "/TitelSlide.php");

class InhoudstafelSlide extends SpecialeSlide {
	private $_titelSlides = array();
	
	public function VoegTitelSlideToe(TitelSlide $titelSlide) {
		$this->_titelSlides[] = $titelSlide;
	}
	
	
	/*
	Genereert de HTML code om een InhoudstafelSlide te tonen op het scherm
	*/
	public function GetHTMLCode() : string {
		return "";
	}
}