<?php

class BDD{
	private $host = 'localhost';
	private $dbname = 'esin';
	private $user = 'esin';
	private $pwd = '€s1N';

	protected $co = false;

	public function __construct()
	{
		if($this->co == false){
			try{
				$this->co = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname, $this->user, $this->pwd);
				$this->co->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}
			catch(Exception $e){
				die($e->getMessage());
			}
		}
	}

	public function getCo(){
		return $this->co;
	}
}