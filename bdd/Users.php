<?php
class Users extends BDD{
	private $id;
	private $email;
	private $password;
	private $pseudo;

	public function setId(int $id) : self
	{
		$this->id = $id;
		return $this;
	}

	public function getId() : int
	{
		return $this->id;
	}

	public function setEmail(string $email) : self
	{
		$this->email = $email;
		return $this;
	}

	public function getEmail() : string
	{
		return $this->email;
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

	public function setPseudo(string $pseudo) : self
	{
		$this->pseudo = $pseudo;
		return $this;
	}

	public function getPseudo() : string
	{
		return $this->pseudo;
	}

    public function signUp( $email, $password, $pseudo, ){
        $co = $this->co;

		// Hash the password using the salt
		$password = $_POST['password'];
		$hash = password_hash($password, PASSWORD_DEFAULT);

		$sql = 'INSERT INTO utilisateurs(pseudo, email, password) 
		VALUES(:pseudo, :email, :password )';
        $req = $co->prepare($sql);
		
		$req->execute([
			'pseudo' => $pseudo,
            'email' => $email,
            'password' => $hash
		]);

		$joueurs = $req->rowCount();
		return $joueurs;
    }
	

	public function signIn(){
		
		echo 'function signIn <br>';
		
		$co = $this->co;

		$sql = 'SELECT email, password FROM utilisateurs WHERE email = :email';
		$req = $co->prepare($sql);
		
		$email = $_POST['email'];
		$password = $_POST['password'];


		$req->bindParam(':email', $email, PDO::PARAM_STR);
		// $req->bindParam('password', $password, PDO::PARAM_STR);
		
		$req->execute();


		$row = $req->fetch(PDO::FETCH_ASSOC);
		var_dump($row );
		$hashed_password = $row['password'];
		
		// $utilisateurs = $req->rowCount();
		// return $utilisateurs;
	
		// Check if the provided password is correct
		$password_to_check = $password;

		$count = $req->rowCount();
		if ($count =='1') {
			// The password is correct
			echo '<p>Correct password</p>';
		} else {
			// The password is incorrect
			echo '<p>Incorrect password</p>';
		}
		// password_verify($password_to_check, $hashed_password)
		var_dump($row );
		var_dump(password_verify($password_to_check, $hashed_password));
	}
}