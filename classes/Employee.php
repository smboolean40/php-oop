<?php
require_once __DIR__ . '/User.php';
require_once __DIR__ . '/Position.php';

class Employee extends User {

	use Position;

	private $livello;

	public function __construct($_nome, $_email, $_livello)
	{
		parent::__construct($_nome, $_email);
		$this->livello = $_livello;
	}

	public function setLivello($_livello)
	{
		$this->livello = $_livello;
	}

	public function getLivello() 
	{
		return $this->livello;
	}

	public function setSconto($_eta)
	{
		if( !is_int($_eta) ) {
			throw new Exception("il valore passato non è un numero");
		}
		if ( $_eta > 65 ) {
			$this->sconto = 50;
		} else {
			$this->sconto = $this->livello * 10;
		}
	}
}