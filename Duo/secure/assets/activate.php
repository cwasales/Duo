<?php
// Initialize the session
include 'auth2.php';

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CCW Student Registration</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Latest compiled and minified CSS -->

<link rel="stylesheet" href="../styles/main.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<style>

*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}


body{
    background-color: black;
}


  .err{
	font-size: 14px;
	text-align: center;
	font-weight: bold;
	color: yellow;
  
}

.formBox2{
  width: 80%;
  height: 600px;
  margin: 30px auto 0;
  padding: 30px;
  background-color: black;

}

.submitBtn{
  width: 100%;
  background-color: rgb(12, 1, 3);
  color:rgb(196, 191, 191);
  padding: 25px 0;
  font-size: 20px;
  font-weight: bold;  
  text-align: center;
  border: none;
  border-radius: 6px !important;
}

.submitBtn:hover{
  color: cyan;
  border: 1px solid white;
  
}



a{
 text-decoration: none;
 font-size: 20px;
 font-weight: bold; 
 padding: 10px; 
 margin-right: 10px;
 color: white;
}

a:hover{
	text-decoration: none;
	color: cyan;
}



@media screen and (max-width: 380px) {
  .formBox2{
    width: 100%;	
  }

   
}
</style>

<script>
	var rid = () =>{
		let tag = document.getElementById("fHead");
        tag.style.display = "none"; 
	}
</script>

</head>
<body>

<h2 class="formHeader" id="fHead">CCW REGISTRATION<br><br>
<a href="../index.php" class="alinks">Exit</a><a href="../login.php">Already have account?...Login</a>
    </h2> 
 <div class="container">
  <div class="col-md-12">
  
 <form class="formBox2"  action="" method="post">
 <div class="col-md-12"> 
	<?php echo $success;?>
	<p class="err"><?php echo $e9;?>   	        
	</p>
</div>


	<div class="col-md-6">
	    <div class="form-group">
		<label class="formLabel" for="track">Track</label> <br>
		<input type="text" id="track" name="track" class="form-control" placeholder="Enter MERN or PYTHON" value="<?php if(isset($_POST['fname'])) echo $_POST['fname'];?>"> 
		<p class="err"><?php echo $e1;?>   	        
		</p>
        </div>
		
		<div class="form-group">
		<label class="formLabel" for="sdate">Today's Date</label> <br>
		<input type="date" id="sdate" name="sdate" class="form-control" value="<?php if(isset($_POST['sdate'])) echo $_POST['sdate'];?>"> 
		<p class="err"><?php echo $e2;?>   	        
		</p>
        </div>
		    			
		<div class="form-group">
		<label class="formLabel" for="fname">First Name</label> <br>
		<input type="text" id="fname" name="fname" class="form-control" placeholder="Enter your first name" value="<?php if(isset($_POST['fname'])) echo $_POST['fname'];?>"> 
		<p class="err"><?php echo $e3;?>   	        
		</p>
        </div>
		
		<div class="form-group">
		<label class="formLabel" for="lname">Last Name</label> <br>
		<input type="text" id="lname" name="lname" class="form-control" placeholder="Enter your last name" value="<?php if(isset($_POST['lname'])) echo $_POST['lname'];?>"> 
		<p class="err"><?php echo $e4;?>   	        
		</p>
        </div>
    </div>	
	
	<div class="col-md-6">
    <div class="form-group">
		<label class="formLabel" for="email">Email Address</label> <br>
		<input type="email" id="email" name="email" class="form-control" placeholder="youremail@email.com" value="<?php if(isset($_POST['email'])) echo $_POST['email'];?>"> 
		<p class="err"><?php echo $e5;?>   	        
		</p>
        </div>

		<div class="form-group">
		<label class="formLabel" for="phone">Phone #</label> <br>
		<input type="phone" id="phone" name="phone" class="form-control" placeholder="888 555 7777" maxlength="10" value="<?php if(isset($_POST['phone'])) echo $_POST['phone'];?>"> 
		<p class="err"><?php echo $e6;?>   	        
		</p>
        </div>     
			
		<div class="form-group">
		<label class="formLabel" for="pcode">Enter Your PassCode</label> <br>
		<input type="password" id="pcode" name="pcode" class="form-control" placeholder="* * * * * * * * * * * *" value="<?php if(isset($_POST['pcode'])) echo $_POST['pcode'];?>"> 
		<p class="err"><?php echo $e7;?>   	        
		</p>
        </div>   
		
		<div class="form-group">
		<label class="formLabel" for="pin">Enter a 4 Digit Pin (A-Z, a-z, 0-9)</label> <br>
		<input type="password" id="pin" name="pin" class="form-control" placeholder="xxxx" maxlength="4" value="<?php if(isset($_POST['pin'])) echo $_POST['pin'];?>">              	        
		<p class="err"><?php echo $e8;?>   	        
		</p> 
        </div> 
		
		<div class="form-group">
        <input type="submit" name="register" class="btn submitBtn" value="Activate My Account" onclick="rid();">
		<br><br>
        </div> 							
		</form>	  	
    </div>
		
</div> 
</div>


 
 </body>
</html>