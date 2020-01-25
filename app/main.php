<?php 


	require_once 'Controller.php';

	$controller = new Controller();

	if (isset($_GET['function']) && $_GET['function']=='index') 
	{

		$data = $controller->index();
	    echo json_encode($data);

	}

 ?>