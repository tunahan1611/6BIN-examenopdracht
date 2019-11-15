<?php


class Slideshow {
	private $_slides = array();
	private $_extraInfo = array();
	private $_huidigeSlideNummer = 0;
	private $_wordtAfgespeeld = false;
	
	/*
	constructor
	Voegt een titel en subtitel toe aan de lijst met ExtraInformatie.
	Maakt een titelslide aan, en voegt deze toe aan de lijst met slides.
	*/
	public function __construct(string $titel, string $subtitel) {
		$extraInfo = new ExtraInformatie("titel", $titel);
		$this->_extraInfo[] = $extraInfo;
		$extraInfo = new ExtraInformatie("subtitel", $subtitel);
		$this->_extraInfo[] = $extraInfo;
		
		$titelSlide = new TitelSlide($titel, $subtitel);
		$this->_slides[] = $titelSlide;
	}
	
	/*
	function VoegInfoToe
	Voegt extra informatie toe aan de slideshow. Deze informatie mag eender wat zijn.
	*/
	public function VoegInfoToe(string $naam, string $waarde) {
		$extraInfo = new ExtraInformatie($naam, $waarde);
		$this->_extraInfo[] = $extraInfo;
	}
	
	/*
	function VoegSlideToe
	Voegt een slide toe aan de lijst met slides van de slideshow
	Als de lijst met slides leeg is, moet de slide van het type TitelSlide zijn
	*/
	public function VoegSlideToe(Slide $slide) {
		$this->_slides[] = $slide;
	}
	
	/*
	function Start
	Start de presentatie en toont de titelslide
	*/
	public function Start() {
		$this->_huidigeSlideNummer = 0;
		$this->_wordtAfgespeeld = true;
	}
	
	/*
	function Stop
	Stopt de presentatie zodat er niets meer getoond wordt.
	*/
	public function Stop() {
		$this->_wordtAfgespeeld = false;
	}
	
	/*
	function ToonSlide
	Zet de huidige slidenummer/pagina op een nieuwe waarde, en toont die pagina
	*/
	public function ToonSlide(int $slideNummer) {
		$this->_huidigeSlideNummer = $slideNummer;
	}
	
	/*
	function GaNaarVolgendeSlide
	Toon de volgende pagina
	Als de volgende pagina voorbij de laatste slide in de lijst is, wordt de 
	presentatie gestopt.
	*/
	public function GaNaarVolgendeSlide() {
		$volgendeSlideNummer = $this->_huidigeSlideNummer + 1;
		if ($volgendeSlideNummer >= count($this->_slides)) {
			$this->Stop();
		}
		else {
			$this->ToonSlide($volgendeSlideNummer);
		}
	}
	
	/*
	function GaNaarVorigeSlide
	Toont de vorige pagina
	Als de huidige pagina de eerste pagina is, wordt de eerste pagina opnieuw getoond
	*/
	public function GaNaarVorigeSlide() {
		$vorigeSlideNummer = $this->_huidigeSlideNummer - 1;
		if ($vorigeSlideNummer < 0) {
			$vorigeSlideNummer = 0;
		}
		$this->ToonSlide($vorigeSlideNummer);
	}
	
	/*
	function GaNaarTitelSlide
	Zorgt ervoor dat de getoonde slide de eerste slide is.
	*/
	public function GaNaarTitelSlide() {
		$this->ToonSlide(0);
	}
}