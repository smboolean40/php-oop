<?php

trait Position {
	public $lat;
	public $lng;

	public function getAddress()
	{
		return "Lat: {$this->lat} e lng: {$this->lng}";
	}
}