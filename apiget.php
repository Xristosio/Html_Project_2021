<?php
if (isset($_GET['onoma'])){
include('config.php');
mysqli_set_charset($conn,"utf8");
$result = $con->query("SELECT onoma,anakoinwseis from test where onoma=$onoma");
header('Content-type: application/json');
print json_encode($result->fetch_all(MYSQLI_ASSOC), JSON_PRETTY_PRINT);
 $con->close();
}
?> 
