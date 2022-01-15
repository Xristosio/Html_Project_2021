<?php      
	session_start();
	$_SESSION['user'] = $_POST['user'];
    include('config.php'); 
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
	$username = stripcslashes($username);  
    $password = stripcslashes($password);  
    $username = mysqli_real_escape_string($con, $username);  
    $password = mysqli_real_escape_string($con, $password);  
    $sql = "SELECT * FROM users WHERE username = '$username' and password = '$password'";  
    $result = mysqli_query($con, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
    if($count == 1)
    {  
		header("location:teacherpage.php"); 
    }  
    else
    {  
		header("location:login.html");   
    }           
?>
