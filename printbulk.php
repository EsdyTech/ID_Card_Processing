
<?php
session_start();
include("db_connect.php");
require "vendor/autoload.php";
if(!isset($_SESSION['adminid']) && $_SESSION['adminemail']){ header('location:index.php');
      exit;}
	

	  $last=$_POST['last'];

$fromm=$_POST['startpoint'];
$too=$_POST['endpoint'];
$startsat=$_POST['receiptrange'];


$_SESSION['from']=$fromm;
$_SESSION['to']=$too;
$_SESSION['receiptrange']=$startsat;

$from=$_SESSION['from'];
$to=$_SESSION['to'];
$startsat=$_SESSION['receiptrange'];

if(isset( $_POST['Change']))
{

if ( ($_POST['startpoint'] < 1) || ($_POST['endpoint'] < 1) ) 
{

	echo "   <script type='text/javascript'>
	alert('The Number you Entered Is Invalid!');
	window.location= 'admin.php';
</script>";



}
}



?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
	<title>ID Card Processing System| Landmark Polytechnic</title>
<style>
  body{
		  	background:#FFFFFF;
		  }
#bg {
 
  height: 450px;
 
  margin:60px;
 	float: left; 
 		
}

#id {
  width:250px;
  height:450px;
  position:absolute;
  opacity: 0.88;
font-family: sans-serif;

		  	transition: 0.4s;
		  	background-color: #FFFFFF;
		  		box-shadow: 0 4px 8px 0 rgba(0,0,0,0.6);
		  	transition: 0.4s;
		}

#id::before {
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  background: url('images/landmark_logo.png');
  background-repeat:repeat-x;
  background-size: 250px 450px;
  opacity: 0.2;
  z-index: -1;
  text-align:center;
  
 
}
 .container{
		  	font-size: 12px;
		  	font-family: sans-serif;
		    
		  }
		 .id-1{
		  	transition: 0.4s;
		  	width:250px;
		  	height:450px;
		  	background: #FFFFFF;
		  	text-align:center;
		  	font-size: 16px;
		  	font-family: sans-serif;
		  	float: left;
		  	margin:auto;		  	
		  	margin-left:270px;
		  		box-shadow: 0 4px 8px 0 rgba(0,0,0,0.6);
		  	transition: 0.4s;

		  	
		  }
</style>
	</head>

	<body>
		<script type="text/javascript">	
 		
 	window.print();
 </script>
 
		  <?php  
		  $sqluse ="SELECT * FROM Inorg WHERE id=1 ";
$retrieve = mysqli_query($db,$sqluse);
    $numb=mysqli_num_rows($retrieve); 
	while($foundk = mysqli_fetch_array($retrieve))
	                                     {
                                              $profileK= $foundk['pname'];
											  $name = $foundk['name'];
		                                  }

    
      $sqlmember ="SELECT * FROM Users WHERE id>=$from && id<=$to";
			       $retrieve = mysqli_query($db,$sqlmember);
				                    $count=0;
                     while($found = mysqli_fetch_array($retrieve))
	                 {
						$othername=$found['othername'];$firstname=$found['Firstname'];$surname=$found['Surname'];$level=$found['Level'];
						$id=$found['id'];$dept=$found['Department'];$matricno=$found['Matricno'];
							 $count=$count+1;  $date=$found['datereg']; $time=time();
						   $names=$firstname." ".$surname." ".$othername;
						  $profile= $found['Picname'];  $sign= $found['signature'];
						  
						  $serial=$id;
                          $Bar = new Picqer\Barcode\BarcodeGeneratorHTML();
                          $code = $Bar->getBarcode($serial, $Bar::TYPE_CODE_128);
						  
		?>
		
      <div id="bg">
            <div id="id">
            	 <table>
        <tr> <td><?php  if($numb!=0 ){
                                    if($profile!=""){echo"<img src='media/$profileK'  width='70px' height='70px' alt=''>";}
									else{
										 echo"<img src='images/love.png' alt='Avatar'  width='70px' height='70px'>";
									    }	   
                               }else{
			?>
        	<img src="images/love.png" alt="Avatar"  width="70px" height="70px"> <?php }?>
        	</td>
        <td align="center"><h5><b>LANDMARK POLYTECHNIC,ITELE AYOBO OGUN STATE</b></h5></td>
       </tr>        
    </table>    
				<center>
        <?php  
      	 

             	 	
             	 	if($profile!=""){          
										   echo"<img src='images/$profile' height='175px' width='200px' alt='' style='border: 2px solid black;'>";	   
									    }
								else{
									echo"<img src='admin/images/profile.jpg' height='175px' width='200px' alt='' style='border: 2px solid black;'>";	   
														     	
									} 
             	 	 ?>   </center> 
             	 	  <div class="container" align="center">
		<br>
		<p style="margin-top:2%">STUDENT NAME</p>
      	<p style="font-weight: bold;margin-top:-4%"><?php if(isset($names)){ echo$names;} ?></p>
      	<p style="margin-top:-4%">LEVEL</p>
      	<p style="font-weight: bold;margin-top:-4%"><?php if(isset($level)){ echo$level;} ?></p>
       <p style="margin-top:-4%">MATRIC NO:</p>
        <p style="font-weight: bold;margin-top:-4%"><?php if(isset($matricno)){ echo$matricno;} ?></p>
      	<p style="margin-top:-4%">DEARTMENT:</p>
      	<p style="font-weight: bold;margin-top:-4%"><?php if(isset($dept)){ echo$dept;} ?></p>      	
      	<p style="margin-top:-4%">STUDENT SIGNATURE</p>
		  <p style="font-weight: bold;margin-top:-4%"><?php echo"<img src='signature/$sign' height='20px' width='200px' alt='';'>";	  ?></p>     
      </div>
            </div>
			<div class="id-1">
    	 
		 <center><img src="images/coatofarms.png" alt="Avatar" width="200px" height="175px" >        
<div class="container" align="center">
<p style="margin:auto">The bearer whose photograph appears overleaf is a student of</p>
<h2 style="color:#00BFFF;margin-left:2%">LANDMARK POLYTECHNIC,ITELE AYOBO OGUN STATE</h2>
<p style="margin:auto">If lost and found please return to the nearest police station</p>
<hr align="center" style="border: 1px solid black;width:80%;margin-top:13%"></hr> 

<p align="center" style="margin-top:-2%">Authorised Signature</p>
<p> <?php if(isset($code)){ echo$code;}?>
 </p>
 <!-- Property of Ogun State Institute Of Technology, Igbesa Ogun State. -->
<?php if(isset($name)){ echo"Property of ".$name;}?> </center>
</div>
</div>
</div>

<?php } ?>
<a href="admin.php">Back to Main Page</a>

	</body>
</html>