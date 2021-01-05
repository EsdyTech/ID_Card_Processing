<?php
session_start();   
include("db_connect.php"); 
 
if(isset($_POST['login_button'])) {
	$user_email = trim($_POST['user_email']);
	$user_password = trim($_POST['password']);
	
	$sql = "SELECT * FROM Administrator WHERE Email='$user_email' && Password='$user_password'";
	$resultset = mysqli_query($db, $sql) or die("database error:". mysqli_error($db));
	$row = mysqli_fetch_assoc($resultset);	
	
				
	if($row['Password']==$user_password){	
		
		$_SESSION['adminid'] = $row['id'];
		$_SESSION['adminemail'] = $row['Email'];
        setcookie("adminid",$row['id'],time()+(60*60*24*7));
        setcookie("adminemail",$row['Email'],time()+(60*60*24*7));
		echo "<script type = \"text/javascript\">
                window.location = (\"admin.php\")
                </script>";  
	}
	
	
	else {				
		echo "email or password does not exist."; // wrong details 
	       }		
}


 	
?>