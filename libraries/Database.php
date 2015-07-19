<?php
class Database{
	public $host = DB_HOST;
	public $username = DB_USER;	
	public $password = DB_PASS;
	public $db_name = DB_NAME;

	public $link; //going to be mysqli object
	public $error;

	//start of constructor - runs when instantiating the class
	public function __construct(){
		
		//call the Connect Funcion
		$this->connect(); //to call another function from within a function, we use the $this->function() syntax
	}

	/*
	* connector
	*/
	private function connect(){
		$this->link = new mysqli($this->host, $this->username, $this->password, $this->db_name); //using mysqli to connect to database with given parameter

		if(!$this->link){ // prints error if not connected
			$this->error = "Connection Failed:".$this->link->connect_error;
			return false;
		}
	}

	/*
	* Select
	*/

	public function select ($query){
		$result = $this->link->query($query) or die($this->link->error.__LINE__);	//this link refers to whatever is passed back from mysqli object (above)
		if($result->num_rows > 0){
			return $result; //return it so we can access it from outside
		} else {
			return false;
		}
	}

	/*
	* insert
	*/
	public function insert ($query){
		$insert_row = $this->link->query($query) or die($this->link->errpr.__LINE__);	//this link refers to whatever is passed back from mysqli object (above)
		
		//Valadiae insert
		if($insert_row){	//if insert did get inserted - redirect to admin page
			header("Location: index.php?msg=".urlencode('Record Added'));	//uses mysqli to encode a message when post is added
			exit();
		} else {
			die('Error : ('. $this->link0>errno .')'. $this->link->error);	//die and print error messsage
		}
	}


	/*
	* update
	*/
	public function update ($query){
		$update_row = $this->link->query($query) or die($this->link->errpr.__LINE__);	//this link refers to whatever is passed back from mysqli object (above)
		
		//Valiadte update
		if($update_row){	//if insert did get inserted - redirect to admin page
			header("Location: index.php?msg=".urlencode('Record Updated'));	//uses mysqli to encode a message when post is added
			exit();
		} else {
			die('Error : ('. $this->link0>errno .')'. $this->link->error);	//die and print error messsage
		}
	}

	/*
	* delete
	*/
	public function delete ($query){
		$delete_row = $this->link->query($query) or die($this->link->errpr.__LINE__);	//this link refers to whatever is passed back from mysqli object (above)
		
		//Validate Delete
		if($delete_row){	//if insert did get inserted - redirect to admin page
			header("Location: index.php?msg=".urlencode('Record Deleted'));	//uses mysqli to encode a message when post is added
		} else {
			die('Error : ('. $this->link0>errno .')'. $this->link->error);	//die and print error messsage
		}
	}

}