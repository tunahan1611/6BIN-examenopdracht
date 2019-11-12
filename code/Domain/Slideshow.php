<?php

class Slideshow {
	private $_slides = array();
	private $_extraInfo = array();
	private $_huidigeSlideNummer = 0;
	private $_wordtAfgespeeld = false;
	
	/*
	constructor
	Voegt een titel en subtitel toe aan de lijst met ExtraInformatie
	*/
	public function __construct(string $titel, string $subtitel) {
	}
	
	/*
	function VoegInfoToe
	Voegt extra informatie toe aan de slideshow. Deze informatie mag eender wat zijn.
	*/
	public function VoegInfoToe(string $naam, string $waarde) {
	}
	
	/*
	function VoegSlideToe
	Voegt een slide toe aan de lijst met slides van de slideshow
	Als de lijst met slides leeg is, moet de slide van het type TitelSlide zijn
	*/
	public function VoegSlideToe(Slide $slide) {
	}
	
	/*
	function Start
	Start de presentatie en toont de titelslide
	*/
	public function Start() {
	}
	
	/*
	function Stop
	Stopt de presentatie zodat er niets meer getoond wordt.
	*/
	public function Stop() {
	}
	
	/*
	function ToonSlide
	Zet de huidige slidenummer/pagina op een nieuwe waarde, en toont die pagina
	*/
	public function ToonSlide(int $slideNummer) {
	}
	
	/*
	function GaNaarVolgendeSlide
	Toon de volgende pagina
	Als de volgende pagina voorbij de laatste slide in de lijst is, wordt de 
	presentatie gestopt.
	*/
	public function GaNaarVolgendeSlide() {
	}
	
	/*
	function GaNaarVorigeSlide
	Toont de vorige pagina
	Als de huidige pagina de eerste pagina is, wordt de eerste pagina getoond
	*/
	public function GaNaarVorigeSlide() {
	}
	
	/*
	function GaNaarTitelSlide
	Zorgt ervoor dat de getoonde slide de eerste slide is.
	*/
	public function GaNaarTitelSlide() {
	}
}