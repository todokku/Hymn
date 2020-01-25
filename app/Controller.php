<?php 

/**
 *  Hymn
 *  Author: Arukh Sediq
 */

require_once 'database.php';

class Controller
{
	private $database;
	
	function __construct()
	{
		$this->database = new database();

	}
	
	function index()
	{
		return $this->database->fetch('playlists');
	}
}



 ?>