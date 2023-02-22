<?php
session_start();
//Create form variables and custom error messages
$track = $sDate = $fname = $lname = $email = $phone = $pcode = $pin = $link = $message = $module = $attempts = $mes = $success = ''; 
$qStats = $e1 = $e2 = $e3 = $e4 = $e5 = $e6 = $e7 = $e8 = $e9 = $result = $q = $in = $pStats = $CID = '';
$mes = 'Welcome to CCW, Your account is offically activated!';
$CID = mt_rand(100000,999999);
$hr = 'CEO';
$now = date("h:i:sa");

//Check to see if form was submitted
if(isset($_POST['register'])){

//Validate that fields are not empty

if (empty($_POST['track'])) {
$e1 = 'Enter either MERN or PYTHON';
}else{
	$track=clean($_POST['track']);	
} 

if (empty($_POST['sdate'])) {
$e2 = 'Date is required!';
}else{
	$sDate=clean($_POST['sdate']);	
} 

if (empty($_POST['fname'])) {
$e3 = 'First name is required!';
}else{
	$fname=clean($_POST['fname']);	
} 

if(empty($_POST['lname'])){
$e4 = 'Last name is Required!';
}else{
	$lname=clean($_POST['lname']);
}

if(empty($_POST['email'])){
$e5 = 'Email is Required!';
}else{
	$email=clean($_POST['email']);
}

if(empty($_POST['phone'])){

$e6 = 'Phone number is Required!';

}else{

	$phone=clean($_POST['phone']);
}

if(empty($_POST['pcode']) || strlen($_POST['pcode']) < 12){

$e7 = 'PassCode must be at least 12 characters long!';

}else{
	$pcode=clean($_POST['pcode']);
    
}

if(empty($_POST['pin']) || strlen($_POST['pin']) < 4){
	
	$e8 = 'Pin must be at least 4 characters long!';  

} else {
	$pin=clean($_POST['pin']);
}	


//If user fields are not empty start a session 
if(!empty($track) && !empty($sDate) && !empty($fname) && !empty($lname) && !empty($email) && !empty($phone) && !empty($pcode) &&!empty($pin)){
	 
	$_SESSION['studentUser'] = $email;	 
	  
	  //Check for existing Member
	  require('scripts/connect.php');	
	  $q = "select * from ccw_students where email = '$email' AND pstats = 1";
      $in = @mysqli_query($dbc, $q);	   
	  
	  if(mysqli_num_rows($in) > 0){
		 $e9 = '<div style="font-weight:bold; color:yellow; font-size:1.3em; text-align:center;">Email is already in use!</div>';  
		     		  
		
	} else {		
		 
		   //Register user and give success message 
		   
        addData1($CID, $track, $fname, $lname, $email, $mes, $sDate, $now, $hr); 		   
        regUser($CID, $track, $sDate, $fname, $lname, $email, $phone, $pcode, $pin, $pStats);
		 		  
        		  
	}    
     
  	
}}


/****** FUNCTIONS START  ******/


//Function adds data to grades table

/*

addData2($CID, $track, $fname, $lname, $email, $module, $qStats, $attempts); 

function addData2($CID, $track, $fname, $lname, $email, $module, $qStats, $attempts){
	
	require('scripts/connect.php');	
	$module = "Intro";
	$attempts = 0;
	$qStats = "Incomplete";
	$q = 'insert into grades (cid, track, fname, lname, email, module, qstats, attempts) values 
    ("'.$CID.'", "'.$track.'", "'.$_POST['fname'].'", "'.$_POST['lname'].'", "'.$_POST['email'].'", "'.$module.'", "'.$qStats.'", "'.$attempts.'")';
    @mysqli_query($dbc, $q);
}
*/

//Function adds data to smessages table
function addData1($CID, $track, $fname, $lname, $email, $mes, $sDate, $now, $hr){
	require('scripts/connect.php');	
	$q = 'insert into smessages (cid, track, fname, lname, email, mes, today, messTime, hr) values 
    ("'.$CID.'", "'.$track.'", "'.$_POST['fname'].'", "'.$_POST['lname'].'", "'.$_POST['email'].'", "'.$mes.'", "'.$sDate.'", "'.$now.'", "'.$hr.'")';
    @mysqli_query($dbc, $q);
}


//Function adds student to ccw_students table 
function regUser($CID, $track, $sDate, $fname, $lname, $email, $phone, $pcode, $pin, $pStats){	
      
    require('scripts/connect.php'); 
	$pStats = 1;	
    $q = 'insert into ccw_students (cid, track, sdate, fname, lname, email, phone, pcode, pin, pstats) values 
    ("'.$CID.'", "'.$track.'", "'.$sDate.'", "'.$fname.'", "'.$lname.'", "'.$email.'", "'.$phone.'", "'.$pcode.'", "'.$pin.'", "'.$pStats.'")';
    $in = @mysqli_query($dbc, $q); 
	
	if($in){
	
    //Send Email Registration Confirmation 
	
	$webMaster = "cwasales7@hotmail.com"; 
	$subject = "CCW Account Activation";
	//Headers
	$headers  = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=UTF-8\r\n";
	$headers .= "From: <".$webMaster. ">" ;
	
    $message = "<html><body>
	<h3 style='text-align:center;
	padding: 10px;
	font-size: 20px;
	font-weight: bold;
	color: navy;
	text-shadow: 3px 3px 6px navy; 
	background-color: lightblue;'>CCW Account Confirmation</h3>
	<table style='width:80%; border:2px solid navy; font-size: 1.2em; margin:2% auto; padding: 1%; border-radius: 8px;'>
	";
	$message .= "<tr><td colspan='2' style='text-align:center;'>You have successfully registered for CCW Student Portal	<br>Here are your acount details:</td></tr>
	<tr><td style='text-align:right;'> CID:</td>
	<td><span style='font-weight:bold;'>" . $CID ."</span></td></tr>
	<tr><td style='text-align:right;'>Start Date:</td>
	<td><span style='font-weight:bold;'>" . $sDate ."</span></td></tr>
	<tr><td style='text-align:right;'>Name:</td>
	<td><span style='font-weight:bold;'>" . $fname . " " . $lname."</span></td></tr>";
	$message .= "<tr><td style='text-align:right;'>Email Address:</td>
	<td><span style='font-weight:bold;'>" . $email ."</span></td></tr>";
	$message .= "<tr><td style='text-align:right;'>Phone #:</td>
	<td><span style='font-weight:bold;'>" . $phone ."</span></td></tr>";
	$message .= "<tr><td style='text-align:right;'>PassCode:</td>
	<td><span style='font-weight:bold;'>" . $pcode ."</span></td></tr>";
	$message .= "<tr><td style='text-align:right;'>Pin:</td>
	<td><span style='font-weight:bold;'>" . $pin ."</span></td></tr>";
	$message .= "<tr><td colspan='2'style='text-align:center;'>Important!....Keep this information for your records</td></tr>";
	$message .='</table>	 
	 <footer style="text-align:center; font-size:11px; color:navy; word-spacing:2px; margin-top:2%;">Copyright &copy; 2019 All rights reserved by CCW</footer>
	 </div></body></html>';
	 
	
	 mail($email,$subject,$message,$headers); //Send a copy to user
	 mail($webMaster,$subject,$message,$headers); // send a copy to CCW Admin  	
	$success = '<div class="container">
	<h3 style="margin-top:10px; font-weight:bold; color:yellow; font-size:1.3em; text-align:center;">
	<br>Congrats!!....You have successfully joined the bootcamp!<br>You can login to your student portal!	
	</h3></div>';
	
	echo $success;
		
	} 
    	
}

//Function to clean the data  
function clean($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
return $data;
}


/****** FUNCTIONS END  ******/
?>