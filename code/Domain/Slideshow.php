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
		$this->VoegInfoToe("titel", $titel);
		$this->VoegInfoToe("subtitel", $subtitel);
	}
	
	/*
	function VoegInfoToe
	Voegt extra informatie toe aan de slideshow. Deze informatie mag eender wat zijn.
	*/
	public function VoegInfoToe(string $naam, string $waarde) {
		$newInfo = new ExtraInformatie($naam, $waarde);
		
		$this->_extraInfo[] = $newInfo;
	}
	
	/*
	function VoegSlideToe
	Voegt een slide toe aan de lijst met slides van de slideshow
	Als de lijst met slides leeg is, moet de slide van het type TitelSlide zijn
	*/
	public function VoegSlideToe(Slide $slide) {
		if (count($this->_slides) == 0 &&
			 $slide instanceof TitelSlide == false) {
			echo "ERROR: eerste slide moet van het type TitelSlide zijn";
			return;
		}
		$this->_slides[] = $slide;
	}
	
	/*
	function Start
	Start de presentatie en toont de titelslide
	*/
	public function Start() {
		$this->_wordtAfgespeeld = true;
		$this->GaNaarTitelSlide();
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
		echo $this->_slides[$this->_huidigeSlideNummer]->GetHTMLCode();
	}
	
	/*
	function GaNaarVolgendeSlide
	Toon de volgende pagina
	Als de volgende pagina voorbij de laatste slide in de lijst is, wordt de 
	presentatie gestopt.
	*/
	public function GaNaarVolgendeSlide() {
		if (count($this->_slides) <= $this->_huidigeSlideNummer + 1) {
			$this->Stop();
		}
		else {
			$this->ToonSlide($this->_huidigeSlideNummer + 1);
		}
	}
	
	/*
	function GaNaarVorigeSlide
	Toont de vorige pagina
	Als de huidige pagina de eerste pagina is, wordt de eerste pagina getoond
	*/
	public function GaNaarVorigeSlide() {
		if ($this->_huidigeSlideNummer == 0) {
			$this->ToonSlide(0);
		}
		else {
			$this->ToonSlide($this->_huidigeSlideNummer - 1);
		}
	}
	
	/*
	function GaNaarTitelSlide
	Toont de titel slide
	*/
	public function GaNaarTitelSlide() {
		$this->ToonSlide(0);
	}
}