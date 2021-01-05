<?php 
error_reporting(0);
session_start();
include("db_connect.php");

if(isset($_SESSION['adminid']) && $_SESSION['adminemail']){
	
	$userid=$_COOKIE['adminid'];
$useremail=$_COOKIE['adminemail'];

$sqluser ="SELECT * FROM Administrator WHERE Password='$userid' && Email='$useremail'";

$retrieved = mysqli_query($db,$sqluser);
    while($found = mysqli_fetch_array($retrieved))
	     {
              $firstname = $found['Firstname'];
		      $sirname= $found['Sirname'];
			  $emails = $found['Email'];
             $id= $found['id'];		
             $pic= $found['Pic'];		  
   
  	     
}		 
		 
}else{
	 header('location:index.php');
      exit;
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>ID Card Processing System| OGITECH</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="admin/css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="admin/css/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS -->
<link href="admin/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS-->

<!-- side nav css file -->
<link href='admin/css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
<!-- //side nav css file -->
 
 <!-- js-->
<script src="admin/js/jquery-1.11.1.min.js"></script>
<script src="admin/js/modernizr.custom.js"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts--> 

<!-- chart -->
<script src="admin/js/Chart.js"></script>
<!-- //chart -->

<!-- Metis Menu -->
<script src="admin/js/metisMenu.min.js"></script>
<script src="admin/js/custom.js"></script>
<link href="admin/css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
 <script src="script/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="script/sweetalert.css">
 
 <!-- <script src="jquery.js"></script> -->    
<link href="css/animate.min.css" rel="stylesheet"/>   
      <link rel="stylesheet" href="css/bootstrap-dropdownhover.css">

   
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css"/>
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css"/>      

   
   <script src='https://code.jquery.com/jquery-1.12.4.js'></script>
   <script src='https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js'></script>
   <script src='https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js'></script>
   <script src='https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js'></script>
   <script src='https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js'></script>
   <script src='https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js'></script>
   <script src='https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js'></script>
   <script src='https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js'></script>
   <script src='https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js'></script>

      <script>
      
      $(document).ready(function() {
    $('#example').DataTable( {
        
        
    } );
        } );
      
      </script>
<script type="text/javascript"> 
            $(document).on("click", ".open-Delete", function () {
                                  var myValue = $(this).data('id');
                                        swal({
                                         title: "Are you sure?",
                                         text: "You want to delete this Record from the database!",
                                         type: "warning",
                                         showCancelButton: true,
                                        cancelButtonColor: "red",
                                        confirmButtonColor: "green",
                                        confirmButtonText: "Yes, remove!",
                                         cancelButtonText: "No, cancel!",
                                        closeOnConfirm: false,
                                        closeOnCancel: false,
                                          buttonsStyling: false
                                        },
                     function(isConfirm){
                                      if (isConfirm) {                                      	
                                                  	var vals=myValue;
                                               $.ajax ({
                                                      type : 'POST',
                                                      url: "upload.php",
                                                      data: { Valuedelll: vals},
                                                      success: function(result) {
                                                      if(result=="ok"){
                                                                    swal({title: "Deleted!", text: "Administrator/Users has been deleted from the database.", type: "success"},
                                                          function(){ 
                                                                          location.reload();
                                                                          }
                                                                      );                               	                        
                                                                 }

                                                       }
                                                  }); } else {
	                                                           swal("Cancelled", "(Cancelled)", "error");
                                                          }
                                         });
                                       
                                       });
                </script>

<script type="text/javascript">
 $(document).on("click", ".open-Updatepicture", function () {
     var myTitle = $(this).data('id');
     $(".modal-body #bookId").val(myTitle);
     
}); 
 </script>
 	<!-- requried-jsfiles-for owl -->
									<!-- //requried-jsfiles-for owl -->
</head> 
<script type="text/javascript">
 $(document).on("click", ".open-Passwords", function () {
     
       var myT = $(this).data('id');
     var myTitle = $(this).data('ie');
       var myp = $(this).data('if');
       var mym = $(this).data('ig');
       var myn = $(this).data('ih');
       var myk = $(this).data('ij');
       var mykm = $(this).data('ik');
       
       
     $(".modal-title #oldname").val(myTitle);
       $(".modal-body #oldname").val(myTitle);
       $(".modal-body #oldpass").val(mykm);
     $(".modal-body #ss").val(myp);     
     $(".modal-body #bb").val(mym);
     $(".modal-body #cc").val(myn);
     $(".modal-body #dd").val(myk);
      $(".modal-body #staffid").val(myT); 
}); 
 </script>
<?php if(isset($_SESSION['memberadded'])){?>
 <script type="text/javascript"> 
 	          $(document).ready(function(){
 	          	                             swal({title: "Successful!", text: "Student added successfully!!.", type: "success"});
                                  });
              </script>
            
           <?php 
	   session_destroy();		
		    }?>
		    <?php if(isset($_SESSION['memberexist'])){?>
                <script type="text/javascript"> 
            $(document).ready(function(){    	
    				              sweetAlert("Oops...", "There is arleady a Student with those details in the database", "error");     				              
                               });
                </script>
           <?php 
       	   session_destroy();}  
           ?>
            <?php if(isset($_SESSION['emptytextboxes'])){?>
                <script type="text/javascript"> 
            $(document).ready(function(){    	
    				              sweetAlert("Oops...", "You did not fill all the textboxes on the form", "error");     				              
                               });
                </script>
           <?php 
       	   session_destroy();}  
           ?>
           <?php if(isset($_SESSION['tutor'])){?>
                <script type="text/javascript"> 
            $(document).ready(function(){ 
                                    swal({
                                         title: "User removed successfully",
                                         text: "Do you want to remove another one?",
                                         type: "success",
                                         showCancelButton: true,
                                        confirmButtonColor: "green",
                                        confirmButtonText: "OK!",
                                        closeOnConfirm: true,
                                        closeOnCancel: true,
                                          buttonsStyling: false
                                        },
                     function(isConfirm){
                                      if (isConfirm) {                                      	
                                                         window.location ="administrator.php?id=2";
                                                     } 
                                           else {
                                                        window.location ="administrator.php";
                                                 }
                                         });
                                         
                                                    });
                </script>
           <?php 
       	   session_destroy();}  
           ?>
           <?php if(isset($_SESSION['cat'])){?>
                <script type="text/javascript"> 
            $(document).ready(function(){    	
    				              sweetAlert("Oops...", "This category arleady in the system", "error");     				              
                               });
                </script>
           <?php 
       	   session_destroy();}  
           ?>
           <?php if(isset($_SESSION['category'])){?>
                <script type="text/javascript"> 
            $(document).ready(function(){ 
                                    swal({
                                         title: "Category added successfully",
                                         text: "Do you want to add another one?",
                                         type: "success",
                                         showCancelButton: true,
                                        confirmButtonColor: "green",
                                        confirmButtonText: "OK!",
                                        closeOnConfirm: true,
                                        closeOnCancel: true,
                                          buttonsStyling: false
                                        },
                     function(isConfirm){
                                      if (isConfirm) {                                      	
                                                         window.location ="administrator.php?id=3";
                                                     } 
                                           else {
                                                        window.location ="administrator.php";
                                                 }
                                         });
                                         
                                                    });
       
                    </script>             
           <?php 
       	   session_destroy();}  
           ?>
           <?php if(isset($_SESSION['del'])){?>
                <script type="text/javascript"> 
            $(document).ready(function(){ 
                                    swal({
                                         title: "Category Deleted",
                                         text: "Do you want to delete another one?",
                                         type: "success",
                                         showCancelButton: true,
                                        confirmButtonColor: "green",
                                        confirmButtonText: "OK!",
                                        closeOnConfirm: true,
                                        closeOnCancel: true,
                                          buttonsStyling: false
                                        },
                     function(isConfirm){
                                      if (isConfirm) {                                      	
                                                         window.location ="administrator.php?id=4";
                                                     } 
                                           else {
                                                        window.location ="administrator.php";
                                                 }
                                         });
                                         
                                                    });
       
                </script>
           <?php 
       	   session_destroy();}  
           ?>
 


 
 <?php if(isset($_SESSION['pass'])) {?>
<script type="text/javascript"> 

$(document).ready(function(){  
 		                           swal({title: "Successful!", text: "Staff details edited!!.", type: "success"});

                               });
       
                    </script>
      <?php  session_destroy(); }?>
      
      
      <?php   $sqlid ="SELECT * FROM Users ORDER BY id DESC ";
			       $ret = mysqli_query($db,$sqlid);				                
                     while($found = mysqli_fetch_array($ret))
	                 {
                       $idsx=$found['id'];
                     }
      
                     $sqlidd ="SELECT * FROM Users ORDER BY id DESC LIMIT 1";
                     $rets = mysqli_query($db,$sqlidd);				                
                             $founds = mysqli_fetch_array($rets);
                               $maxid=$founds['id'];
                             
	    

$sqluse ="SELECT * FROM Inorg ORDER BY id DESC ";
$retrieve = mysqli_query($db,$sqluse);
    while($foundk = mysqli_fetch_array($retrieve))
	     {
              $name = $foundk['name'];
		      $website= $foundk['website'];
              $phone= $foundk['Phone'];
              $year= $foundk['year'];
			  $mail= $foundk['email'];
			  $idz= $foundk['id'];
		 }	 

  ?>

 <div id="Taxreceipted" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content" style="font-size: 14px; font-family: Times New Roman;color:black;">
      <div class="modal-header" style="background:#222d32">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="font-weight: bold;color: #F0F0F0"><center>
        	 PRINT ID CARD IN BULK
        	</center></h4>
      </div>

      <div class="modal-body" >       	
      	     <form action="printbulk.php" method="post">
  <div class="input-group" style="margin-bottom:10px">
    <span class="input-group-addon">From</span>
    <input id="text" type="number" class="form-control" name="startpoint" >
  </div>
  <div class="input-group" style="margin-bottom:10px">
    <span class="input-group-addon">To</span>
   <input type="number" class="form-control" name="endpoint" >
  </div>
  <div class="input-group">
    <span class="input-group-addon">Students Id starts @</span>
    <input id="msg" type="text" class="form-control" name="receiptrange" placeholder="" value="<?php echo $idsx; ?>" readonly="readonly">
  </div><br>
  <div class="input-group"  style="margin-bottom:10px">
  <span class="input-group-addon">Students Id ends @</span>
    <input id="msg" type="text" class="form-control" name="last" placeholder="" value="<?php echo $maxid; ?>" readonly="readonly">
  </div>
Make sure you select the right IDs (Number)
      </div>
      <div class="modal-footer">
      	<input type="submit" class="btn btn-success" value="Submit" id="btns1" name="Change"> &nbsp;
      </div>
      </form> 
      </div>       
  </div>
  </div> 
 


<div id="Passwords" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content" style="font-size: 14px; font-family: Times New Roman;color:black;">
      <div class="modal-header" style="background:#222d32">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="font-family: Times New Roman;color:#F0F0F0;"><center>
        EDIT DETAILS OF: <input style="border: none;background:#222d32" type="text" id="oldname" value="" readonly="readonly" />
	    	

        	</center></h4>
      </div>
      <div class="modal-body" >
        <center>
             
        	<form method="post" action="upload.php" enctype='multipart/form-data'>        		
            
        	      <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;Firstname:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" required type="text" name="fname" id='oldname'></span></p>
                <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;Surname:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" required type="text" name="sname" id='ss'></span></p>
        	    <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;&nbsp; &nbsp;Othername:<label style="color: red;font-size:20px;">*</label><input required style="width:270px;" type="text" name="oname" id='bb'></span></p>
        		<p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">Department:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" required name="dept"  id='cc'></span></p>
        	     <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Matricno:<label style="color: red;font-size:20px;">*</label><input required style="width:270px;" type="text" name="matricno" id='dd'></span></p>
        	     <p ><span style="font-size: 18px; font-weight: bold;">&nbsp;&nbsp; &nbsp;&nbsp;Level:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" required type="text" name="level" id='oldpass'></span></p>
        		Add profile picture:<input name='filed' required type='file' id='filed' >
            Add Student Signature:<input name='filedd' required type='file' id='filedd' >
                <input type="hidden" name="page" id="staffid"/>                                                       	      		
           
        </center>
        
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-success" value="Reset" id="amendreceipt" name="resetpass"> &nbsp;
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
      </div>
      </div>
       </form>
  </div>
  </div>


  <div id="Admin" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content" style="font-size: 14px; font-family: Times New Roman;color:black;">
      <div class="modal-header" style="background:#222d32">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="font-family: Times New Roman;color:#F0F0F0;"><center>
        EDIT DETAILS OF ADMINISTRATOR: <input style="border: none;background:#222d32" type="text" id="oldname" value="" readonly="readonly" />
	    	

        	</center></h4>
      </div>
      <div class="modal-body" >
        <center>
             
        	<form method="post" action="upload.php" enctype='multipart/form-data'>        		
            
        	      <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;Firstname:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" required type="text" name="fname" id='oldname'></span></p>
                <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;Surname:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" required type="text" name="sname" id='ss'></span></p>
        	    <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;&nbsp; &nbsp;Phone:<label style="color: red;font-size:20px;">*</label><input required style="width:270px;" type="text" name="phone" id='bb'></span></p>
        		<p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">Email:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" required name="email"  id='cc'></span></p>
        		Add profile picture:<input name='filed' required type='file' id='filed' >
                <input type="hidden" name="page" id="staffid"/>                                                       	      		
           
        </center>
        
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-success" value="Reset" id="amendreceipt" name="adminedit"> &nbsp;
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
      </div>
      </div>
       </form>
  </div>
  </div>



<div id="Updatepicture" class="modal fade" role="dialog">
  <div class="modal-dialog" style="float:right;width:20%">
    <!-- Modal content-->
    <div class="modal-content" style="font-size: 14px; font-family: Times New Roman;color:black;">
      <div class="modal-header" style="background:#222d32">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">        	        	
        	</h4>
      </div>
      <div class="modal-body" >
        <center><p></p>
        	<form method="post" action="upload.php" enctype='multipart/form-data'>        		
            
        	<p style="margin-bottom:10px;">
        			Select picture<input name='file2' type='file' id='file2' >
           </p>  
           <p>
        	<input name='id' type='hidden' value='' id='bookId'>
        	<input name='category' type='hidden' value='Administrator'>
        	 <input type="hidden" name="page" value="users.php"/>                                                        	      		

           </p>     	      		
	                
        </center>
      </div>
      <div class="modal-footer">
                <input type="submit" class="btn btn-success" value="Change" id="btns1" name="Change"> &nbsp;
                  
      </div>
      </div>
       </form>
  </div>
  </div>
 
 <div id="Useradd" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content" style="font-size: 14px; font-family: Times New Roman;color:black;">
      <div class="modal-header" style="background:#222d32">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="font-weight: bold;color: #F0F0F0"><center>
        	ADD STUDENT DETAILS
        	</center></h4>
      </div>

      <div class="modal-body" >       	
      	<center> 
        		<form method="post" action="upload.php" enctype='multipart/form-data' style="width: 98%;">        		

            	
      	        <p style="margin-bottom:10px;">  
        	      <!-- <span style="font-size: 15px; font-weight: bold;"><input type="checkbox" name="pro">&nbsp;Pro&nbsp;&nbsp; &nbsp; &nbsp;</span>
        	    <span style="font-size: 15px; font-weight: bold;"><input type="checkbox" name="dr">&nbsp;Dr &nbsp; &nbsp;&nbsp;&nbsp;</span>
        		<span style="font-size: 15px; font-weight: bold;"><input type="checkbox" name="mr">&nbsp;Mr &nbsp; &nbsp; &nbsp;&nbsp;</span>        		
        		<span style="font-size: 15px; font-weight: bold;"><input type="checkbox" name="mrs">&nbsp;Mrs &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span>
        		<span style="font-size: 15px; font-weight: bold;"><input type="checkbox" name="miss">&nbsp;Miss</span> -->
        		</p>
        		                                                           	      		
                 <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;Firstname:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" required type="text" name="fname"></span></p>
        	    <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;&nbsp; &nbsp;Surname:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" required type="text" name="sname"></span></p>
              <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;&nbsp; &nbsp;Othername:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" required type="text" name="oname"></span></p>
        		<p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">Department:<label style="color: red;font-size:20px;">*</label> <?php 
                        $qry= "SELECT * FROM department ORDER BY Name ASC";
                        $res= mysqli_query($db,$qry);
                        $num = mysqli_num_rows($res);
                        if ($num > 0){
                          echo ' <select type="text" required  name="dept">';
                          while ($rows=mysqli_fetch_array($res)){
                          echo'<option value="'.$rows['Name'].'" >'.$rows['Name'].'</option>\n';
                              }
                                  echo '</select>';
                              }
                                ?></span></p>
        	     <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Level:<label style="color: red;font-size:20px;">*</label><select style="width:270px;"required  name="level">>
                              <option value="ND1" >ND1</option>
                              <option value="ND2">ND2</option>
                              <option value="HND1">HND1</option>
                              <option value="HND2">HND2</option>
                            </select></span></p>
        	    
        	     <p ><span style="font-size: 18px; font-weight: bold;">&nbsp;&nbsp; &nbsp;&nbsp;Matric No:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" required name="matricno"></span></p>
        		Add Student picture:<input name='filed'required type='file' id='filed' >
            Add Student Signature:<input name='filedd' required  type='file' id='filed' >
        		   <input type="hidden" name="page" value="admin.php"/>                                                        	      		
         </center>
      </div>
      <div class="modal-footer">
       <input type="submit" class="btn btn-success" value="Submit" id="addmember" name="addmember"> &nbsp;
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
      </div>
      </div>
       </form>
  </div>
  </div> 




  
  

  <div id="Adminadd" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content" style="font-size: 14px; font-family: Times New Roman;color:black;">
      <div class="modal-header" style="background:#222d32">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="font-weight: bold;color: #F0F0F0"><center>
        	ADD ADMINISTRATOR/USERS DETAILS
        	</center></h4>
      </div>

      <div class="modal-body" >       	
      	<center> 
        		<form method="post" action="upload.php" enctype='multipart/form-data' style="width: 98%;">        		

            	
        		                                                           	      		
                 <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;Firstname:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" required name="fname"></span></p>
        	    <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;&nbsp; &nbsp;Surname:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" required name="sname"></span></p>
        		<p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">Phone:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" required name="phone"></span></p>
        	     <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Password:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" required type="password" Value="12345" name="password"></span></p>
        	     <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp;Email:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" required type="text" name="email"></span></p>
        	   
        		Add Admin/Users picture:<input name='filed' required type='file' id='filed' >
                    
        		   <input type="hidden" name="page" value="admin.php"/>                                                        	      		
         </center>
      </div>
      <div class="modal-footer">
       <input type="submit" class="btn btn-success" value="Submit" id="addUser" name="addUser"> &nbsp;
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
      </div>
      </div>
       </form>
  </div>
  </div> 



  <div id="Initialisation" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content" style="font-size: 14px; font-family: Times New Roman;color:black;">
      <div class="modal-header" style="background:#222d32">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="font-weight: bold;color: #F0F0F0"><center>
        	INSTITUTION INFORMATION DETAILS
        	</center></h4>
      </div>
      	<form method="post" action="upload.php" enctype='multipart/form-data'>        		

      <div class="modal-body" >       	
      	<center> 
        		<p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp;&nbsp;Institution Name:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" required name="orgname"></span></p>
        	    <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;Phone:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" required name="orgphone"></span></p>
        		<p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;Email Address:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" required name="orgemail"></span></p>
        	     <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;&nbsp;&nbsp;Website URL:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" required name="orgwebsite"></span></p>
        	     <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">Year Founded:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" required type="text" name="orgyear"></span></p>
        	        Attach Institution Logo:(<h7 style="color:red">Make sure it is a transparent image</h7>)<input name='filed' required type='file' id='filed' >
                                   	 <input type="hidden" name="page" value="admin.php"/>                                                        	      		
         </center>
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-success" value="Finish" id="addmember" name="orginitial"> &nbsp;
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
      </div>
      </div>
       </form>
  </div>
  </div>
  

  <div id="AddDepartment" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content" style="font-size: 14px; font-family: Times New Roman;color:black;">
      <div class="modal-header" style="background:#222d32">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="font-weight: bold;color: #F0F0F0"><center>
        ADD DEPARTMENT
        	</center></h4>
      </div>
      	<form method="post" action="upload.php" enctype='multipart/form-data'>        		

      <div class="modal-body" >       	
      	<center> 
        		<p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp;&nbsp;Department Name:<label style="color: red;font-size:20px;">*</label><input style="width:270px;" type="text" required name="deptname"></span></p>
                                   	 <input type="hidden" name="page" value="admin.php"/>                                                        	      		
         </center>
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-success" value="Save" id="addDepartment" name="saveDept"> &nbsp;
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
      </div>
      </div>
       </form>
  </div>
  </div>



 <div id="Initialisation2" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content" style="font-size: 14px; font-family: Times New Roman;color:black;">
      <div class="modal-header" style="background:#222d32">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="font-weight: bold;color: #F0F0F0"><center>
        	EDIT INSTITUTION INFORMATION
        	</center></h4>
      </div>
      	<form method="post" action="upload.php" enctype='multipart/form-data'>        		

      <div class="modal-body" >       	
      	<center> 
        		<p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp;&nbsp;Institution Name:<label style="color: red;font-size:20px;">*</label>
        			<input style="width:270px;" type="text" required name="orgname" value="<?php if(isset($name)){echo$name;} ?>"></span></p>
        	    <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;Phone:<label style="color: red;font-size:20px;">*</label>
        	    	<input style="width:270px;" required type="text" name="orgphone" value="<?php if(isset($phone)){echo$phone;} ?>"></span></p>
        		<p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;Email Address:<label style="color: red;font-size:20px;">*</label>
        			<input style="width:270px;" required type="text" name="orgemail" value="<?php if(isset($mail)){echo$mail;} ?>"></span></p>
        	     <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">&nbsp; &nbsp;&nbsp;&nbsp;Website URL:<label style="color: red;font-size:20px;">*</label>
        	     	<input style="width:270px;" required type="text" name="orgwebsite" value="<?php if(isset($website)){echo$website;} ?>"></span></p>
        	     <p style="margin-bottom:10px;"><span style="font-size: 18px; font-weight: bold;">Year Founded:<label style="color: red;font-size:20px;">*</label>
        	     	<input style="width:270px;" required type="text" name="orgyear" value="<?php if(isset($year)){echo$year;} ?>"></span></p>
        	                         	   Attach Institution Logo:(<h7 style="color:red">Make sure it is a transparent image</h7>)<input name='filed' required type='file' id='filed' >
                                          	      	 <input type="hidden" required name="page" value="admin.php"/>                                                        	      		
                          	      	<input type="hidden" name="pageid" value="<?php echo$idz; ?>"/> 	
      	
         </center>
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-success" value="Update" id="addmember" name="orgupdate"> &nbsp;
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
      </div>
      </div>
       </form>
  </div>
  </div> 


<body class="cbp-spmenu-push">
	<div class="main-content">
	<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
		<!--left-fixed -navigation-->
		<aside class="sidebar-left">
      <nav class="navbar navbar-inverse">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
                           

<?php   
				$sqln ="SELECT * FROM Inorg ";
                     $rgetb = mysqli_query($db,$sqln);
	                   $numb=mysqli_num_rows($rgetb);
                   if($numb != 0){
                            $foundl = mysqli_fetch_array($rgetb);
	                                     
                                              $profile= $foundl['pname'];
		                                  
										echo"<center><img src='media/$profile'  width='70%' height='140px' alt=''></center>";	   
                               }
							else{
														     	
								
										
           ?>
            <h1>
            	<a class="navbar-brand" href="admin.php"><span class="fa fa-area-chart">
            		
            	</span>ID CARD PROCESSING SYSTEM<span class="dashboard_text"></span>
            	</a>
           </h1>
           <?php } ?> 

          </div>
          <br>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="sidebar-menu">
              <li class="header">
              	 <h4>Administrator</h4>
              </li>
              <li class="treeview">
                <a href="admin.php">
                <i class="fa fa-tv"></i> <span>Control Panel</span>
                </a>
              </li>
               <li class="treeview">
                <a href="#">
                <i class="fa fa-cog"></i>
                <span>Institution Details</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a data-toggle='modal' data-id='' href='#Initialisation' class='open-Initial'><i class="fa fa-plus"></i>Add Insitution Info</a></li>
                  <li><a data-toggle='modal' data-id='' href='#Initialisation2' class='open-Initial2'><i class="fa fa-minus"></i>Edit Insitution Info</a></li>
                </ul>
              </li>
                  
              <li class="treeview">
                  <a data-toggle='modal' data-id='' href='#Useradd' class='open-adduser'><i class="fa fa-user"></i>Add Student</a>
         
              </li>
              <li class="treeview">
                  <a data-toggle='modal' data-id='' href='#Adminadd' class='open-adduser'><i class="fa fa-user"></i>Add Users/Admin</a>
              </li>
              <li class="treeview">
                  <a href='users.php' class='open-adduser'><i class="fa fa-user"></i>View Users/Admin</a>
         
              </li>
              <!-- <li class="treeview">
              	  <a  href="bulk.php" ><i class='fa fa-print'></i>Bulk registration</a>
               </li> -->
               <li class="treeview">
                <a href="#">
                <i class="fa fa-tv"></i>
                <span>Add Department</span>
                <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a data-toggle='modal' data-id='' href='#AddDepartment' class='open-Initial'><i class="fa fa-plus"></i> Add Department</a></li>
                  <li><a href='departments.php' class='open-Initial2'><i class="fa fa-minus"></i>View Department</a></li>
                </ul>
              </li>   
              <li class="treeview">
              	  <a data-toggle='modal' href="#Taxreceipted" class="Open-Taxreceipted"><i class='fa fa-print'></i>Bulk printing</a>
               </li>
                          
                </ul>
          </div>
          <!-- /.navbar-collapse -->
      </nav>
    </aside>
	</div>
		<!--left-fixed -navigation-->
		
		<!-- header-starts -->
		<div class="sticky-header header-section">
			<div class="header-left">
				<!--toggle button start-->
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>
				<!--toggle button end-->
				
				<!--notification menu end -->
				<div class="clearfix"> </div>
			</div>
			<div class="header-right">
				
				<!--search-box-->
				
				<div class="profile_details" >		
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">	
									<span class="prfil-img">
										<?php   
									
												           	echo"<img src='images/$pic' height='50px' width='50px' alt=''>";	   
														     	
												             
										?>
										 </span> 
									<div class="user-name" >
										<p style="color:#1D809F;"><?php if(isset($sirname))
                                            {echo"<strong>Welcome ".$firstname." ".$sirname."! </strong>";} ?>
				                         </p>
										<span>Administrator&nbsp;<img src='admin/images/dot.png' height='15px' width='15px' alt=''>
										</span>
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>	
								</div>	
							</a>
							<ul class="dropdown-menu drp-mnu">
								 <li>
                                  <!-- <a data-toggle='modal' data-id='<?php echo$id; ?>' href='#Updatepicture' class='open-Updatepicture'><i class="fa fa-user"></i>Change profile picture</a>
                                 </li> -->
								<li> <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>				
			</div>
			<div class="clearfix"> </div>	
		</div>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper"  >
			<div class="main-page" >
	
		
		
				
				
				
	
			<div class="charts">		
			<div class="mid-content-top charts-grids">
				<div class="middle-content">
						<h4 class="title">REGISTERED ADMINISTRATOR/USERS LIST</h4>
					<!-- start content_slider -->
				<!-- <div class="alert alert-info">
                             <i class="fa fa-envelope"></i>&nbsp;This screen displays 50 records use the search box to spool more records
                         </div> -->
					
					     <table id="example" class="display nowrap" style="width:100%">
        <thead>
            <tr>
            	<th>S/N</th>
                <th>FULL NAME</th>
                <th>PHONE_NO</th>
                <th>EMAIL</th>              
                <th>PASSWORD</th>    
                <th>EDIT</th>
                <th>DELETE</th>
            </tr>
        </thead>
        <tbody>
        	 <?php   $sqlmember ="SELECT * FROM administrator ";
			       $retrieve = mysqli_query($db,$sqlmember);
				                    $count=0;
                     while($found = mysqli_fetch_array($retrieve))
	                 {
                    $id=$found['id']; $firstname=$found['Firstname'];$surname=$found['Sirname'];$Phone=$found['Phone'];
                       $id=$found['id'];$Email=$found['Email'];$Pic=$found['Pic'];
			                $count=$count+1; 
					    	 
            echo"<tr>    <td>$count</td> 
                             <td>$surname $firstname</td>        	
                             <td>$Phone</td>
                             <td>$Email</td>
                             
			                 <td>*****</td>
			                 <td>
			                   <a data-toggle='modal' data-id='$id' data-ie='$firstname'   data-if='$surname' data-ig='$Phone' data-ih='$Email' data-ij='$Pic' class='open-Passwords btn  btn-info' title='edit user details' href='#Admin'><span class='glyphicon glyphicon-edit' style='color:white;'></span></a>
							 
			                 </td>				                 
			                 <td>
			                   <a data-id='$id'  class='open-Delete btn  btn-danger' title='delete user' ><span class='glyphicon glyphicon-trash' style='color:white;'></span></a>
							 
			                 </td>			 
                             </tr>"; 
					 
					 } 
		
		           	?>
            </tbody>
        
    </table>
             <!-- <button id="clear-all-button">Clear All Filters</button> -->
                           
				        </div>
		
				</div>

					<!--//sreen-gallery-cursual---->
			</div>
		 </div>
		</div>
	<!--footer-->
	<div class="footer">
	  <p>© 2019 ID Card Processing and Management System. All Rights Reserved |
	
			</p>		
	</div>
    <!--//footer-->
	</div>
		
	<!-- new added graphs chart js-->
	
    <script src="admin/js/Chart.bundle.js"></script>
    <script src="admin/js/utils.js"></script>
	
		
	<!-- Classie --><!-- for toggle left push menu script -->
		<script src="admin/js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			

			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!-- //Classie --><!-- //for toggle left push menu script -->
		
	<!--scrolling js-->
	<script src="admin/js/jquery.nicescroll.js"></script>
	<script src="admin/js/scripts.js"></script>
	<!--//scrolling js-->
	
	<!-- side nav js -->
	<script src='admin/js/SidebarNav.min.js' type='text/javascript'></script>
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
		
	<!-- Bootstrap Core JavaScript -->
   <script src="admin/js/bootstrap.js""> </script>
	<!-- //Bootstrap Core JavaScript -->
	 	<script src="css/bootstrap-dropdownhover.js"></script>
	
</body>
</html>