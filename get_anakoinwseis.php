<?php
	include('config.php'); 
	$sql = "SELECT onoma, anakoinwseis FROM teachers WHERE onoma = ?";
	$stmt = $con->prepare($sql);
	$stmt->bind_param("s", $_GET['q']);
	$stmt->execute();
	$stmt->store_result();
	$stmt->bind_result($onoma, $anakoinwsh);
	$stmt->fetch();
	$stmt->close();
	echo "<table>";
	echo "<tr>";
	echo "<th>Όνομα καθηγητή:</th>";
	echo "<td>$onoma</td>";
	echo "<th>Ανακοινώσεις:</th>";
	echo "<td> $anakoinwsh</td>"; 
	echo "</tr>";
	echo "</table>";
?>
