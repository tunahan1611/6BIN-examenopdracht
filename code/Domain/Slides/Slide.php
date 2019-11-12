<?php

class Slide {
	private $_items = array();
	
	/* 
	Voegt een item toe aan de slide. Items worden onder elkaar, in volgorde getoond.
	*/
	public function VoegItemToe(Item $item) {
	}
	
	
	/*
	Genereert de HTML code om een Slide te tonen op het scherm
	*/
	public function GetHTMLCode() : string {
		return "";
	}
}