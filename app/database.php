<?php 

/**
*   Author: Arukh Sediq Shkur
*   Hymn.krd  
**/

class database
{
	private $db;
	private $servername = "localhost";
	private $username = "root";
	private $password = "";
	private $schema = "hymn";

	function getDB() { return $this->db; }
	
	function __construct()
	{
			
			try {

					$this->db = new mysqli($this->servername, $this->username, $this->password , $this->schema);
					
					if ($this->db->connect_error)
					{
					    die("Connection failed: " . $this->db->connect_error);
					}

			} catch (Exception $e) {
					
					die(var_dump($e));
			}
			
		
	}

	function query($query)
	{

		$result = $this->db->query($query);
		$data = array();

		if ($result->num_rows > 0) 
		{
		    while($row = $result->fetch_assoc()) {
		        array_push($data,$row);
		    }
		} 
		return $data;

	}

	function fetch($table)
	{

		$sql = "SELECT * FROM $table";
		$result = $this->db->query($sql);
		$data = array();

		if ($result->num_rows > 0) 
		{
		    while($row = $result->fetch_assoc()) {
		        array_push($data,$row);
		    }
		} 
		return $data;

	}
	
	function add($album)
	{

	}


}//Class 

 ?>