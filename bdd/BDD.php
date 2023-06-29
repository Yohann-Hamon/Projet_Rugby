<?php

	class BDD{
		
		private $host = 'localhost';
		private $dbname = 'erzl0369_esin_e2p2026_rugby';
		private $user = 'erzl0369_esin';
		private $pwd = 'fw@t2X>m,7CBl0';

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