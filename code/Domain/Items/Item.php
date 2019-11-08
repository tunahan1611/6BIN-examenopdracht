<?php

interface Item {
	/*
	Genereert de HTML code om een Item te tonen op het scherm
	*/
  public function GetHTMLCode() : string;
  
}