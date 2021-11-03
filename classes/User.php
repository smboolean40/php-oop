<?php

class User {
	protected $nome;
	protected $email;
	protected $sconto = 0;
	
	/**
	 * __construct
	 *
	 * @param  string $_nome il nome dell'utente
	 * @param  string $_email l'email dell'utente
	 * @return void
	 */
	public function __construct($_nome, $_email)
	{
		$this->nome = $_nome;
		$this->email = $_email;
	}
	
	/**
	 * setSconto
	 * settiamo lo sconto in base all'eta dell'utente
	 *
	 * @param  int $_eta 
	 * @return void
	 */
	public function setSconto(int $_eta)
	{
		if ( $_eta > 65 ) {
			$this->sconto = 40;
		}
	}
	
	/**
	 * getSconto
	 * restituisce lo sconto
	 * 
	 * @return int
	 */
	public function getSconto()
	{
		return $this->sconto;
	}
}
