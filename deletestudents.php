
<?php
session_start();
error_reporting(0);
include_once("db_connect.php");

$studentId = $_GET["studentId"];
$_SESSION["studentId"] = $studentId;


?>

<?php


if (isset($_SESSION["studentId"])){

	$result = mysql_query("DELETE * FROM users where id=7");
	if(mysql_affected_rows()>0){
      

	 	echo '<script type="application/javascript">alert("Student Information Deleted Successfully!");</script>';
		echo '<script>window.location= "admin.php";</script>';
		
    }
}


?>
		