<?php

class Slide {
	private $_items = array();
	
	public function VoegItemToe(Item $item) {
		$this->_items[] = $item;
	}
	
	
	/*
	Genereert de HTML code om een Slide te tonen op het scherm
	*/
	public function GetHTMLCode() : string {
		return "";
	}
}