<?php
session_start();
	$status = "ERROR";
	if ((isset($_POST['titlos'])) && (isset($_POST['hmeromhnia'])) && (isset($_POST['mathhma'])) && (isset($_POST['anakoinwseis'])))
	{
		if (($_POST['titlos']!='') && ($_POST['hmeromhnia']!='') && ($_POST['mathhma']!='') && ($_POST['anakoinwseis']!=''))
		{
			include('config.php');
			mysqli_set_charset($con,"utf8");
			$result = $con->query("INSERT INTO anakoinwseiskath (titlos, onoma, hmeromhnia, mathhma, anakoinwseis) VALUES ('".$_POST['titlos']."', '".$_SESSION['user']."','".$_POST['hmeromhnia']."','".$_POST['mathhma']."','".$_POST['anakoinwseis']."')");
			if ($result)
				$status = "OK";
			else
				$status = "ERROR";
			$con->close();
		}
	}
	header('Content-type: application/json');
	echo json_encode(array('status' => $status)); 
?>
