<?php
	if (($_POST['onoma']!='') && ($_POST['anakoinwsh']!=''))
	{
	include('config.php');
	$onoma = mysqli_real_escape_string($con, $_POST['onoma']);
	$anakoinwsh = mysqli_real_escape_string($con, $_POST['anakoinwsh']);
	
			
			mysqli_set_charset($con,"utf8");
			$sql="INSERT INTO teachers (onoma, anakoinwseis) VALUES  ('$onoma', '$anakoinwsh')";
			
			if(mysqli_query($con, $sql))
			{
				echo "Records inserted successfully.";
			} else
			{
				echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
			}
			mysqli_close($con);
		}else
		echo "lathos";
?>
