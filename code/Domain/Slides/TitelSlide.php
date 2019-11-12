<?php

require_once(__DIR__ . "/Slide.php");

class TitelSlide extends Slide {
	
	/*
	Maakt een titelslide aan. Een titelslide toont een titel en subtitel.
	Dit zijn TekstItems met tekstniveau 1 en 2.
	*/
	public function __construct(string $titel, string $subtitel) {
	}
	
	/*
	Genereert de HTML code om een TitelSlide te tonen op het scherm
	*/
	public function GetHTMLCode() : string {
		return "";
	}
}