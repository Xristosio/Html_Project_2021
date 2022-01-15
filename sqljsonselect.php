<?php
	if (isset($_GET['onoma']))
	{
		include('config.php');
		mysqli_set_charset($con,"utf8");
		$onoma = $_GET['onoma'];
		$result = $con->query("SELECT onoma,anakoinwseis,titlos,hmeromhnia,mathhma FROM anakoinwseiskath WHERE onoma='$onoma'");
		header('Content-type: application/json');
		print json_encode($result->fetch_all(MYSQLI_ASSOC), JSON_PRETTY_PRINT);
		$con->close();
	}
?> 
