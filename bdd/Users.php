<?php
require_once __DIR__. '/BDD.php';

class Users extends BDD{
	private $id;
	private $mail;
	private $password;
	private $username;

	public function setId(int $id) : self
	{
		$this->id = $id;
		return $this;
	}

	public function getId() : int
	{
		return $this->id;
	}

	public function setmail(string $mail) : self
	{
		$this->mail = $mail;
		return $this;
	}

	public function getmail() : string
	{
		return $this->mail;
	}

    public function setPassword(string $password) : self
	{
		$this->password = $password;
		return $this;
	}

	public function getPassword() : string
	{
		return $this->password;
	}

	public function setUsername(string $username) : self
	{
		$this->username = $username;
		return $this;
	}

	public function getUsername() : string
	{
		return $this->username;
	}

    public function signUp( $mail, $password, $username, ){
        $co = $this->co;

		// Hash the password using the salt
		$password = $_POST['password'];
		$hash = password_hash($password, PASSWORD_DEFAULT);

		$sql = 'INSERT INTO users(username, mail, password) 
		VALUES(:username, :mail, :password )';
        $req = $co->prepare($sql);
		
		$req->execute([
			'username' => $username,
            'mail' => $mail,
            'password' => $hash
		]);

		$joueurs = $req->rowCount();
		return $joueurs;
    }
	

	public function signIn(){
        
        $co = $this->co;

        $sql = 'SELECT  mail, password FROM users WHERE mail = :mail';
        $req = $co->prepare($sql);
        
        $mail = $_POST['mail'];
		// $username = $_POST['username'];
        $password = $_POST['password'];

        $req->bindParam(':mail', $mail, PDO::PARAM_STR);
		// $req->bindParam(':username', $username, PDO::PARAM_STR);
        $req->execute();

        $row = $req->fetch(PDO::FETCH_ASSOC);

        if(!$row)
        {
            return false;
        }

        return password_verify($password, $row['password']);
    }
}