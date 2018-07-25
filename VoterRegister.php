<!DOCTYPE html>
<html>
    <head>

        <title>Online Election</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/registerForm.css" type="text/css"> 
		<script src="js/registerForm.js"></script>  
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/login.css" type="text/css">
		<link href="css/head.css" rel="stylesheet">
            
    </head>
    <body>
         <div class="head">
    
       <div class="container-fluid">
		
                 <a href="#">  <b> Online Election System </b> </a>
	
		
			<ul class="nav navbar-nav navbar-right">
	      
                             <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#services">About us</a>
                    </li>
                    <li>
                        <a href="#contact">Support</a>
                    </li>
					<li>
                        <a href="#">Log In</a>
                    </li>
				
			</ul>
		
	</div>
    
</div>
             
<div class="container">
<form name="login" method="POST" action="">
<fieldset>
<h2>Register Form</h2>
<hr class="colorgraph">
                                 
<div class="stepwizard col-md-offset-3">
    <div class="stepwizard-row setup-panel">
      <div class="stepwizard-step">
        <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
        <p>Step 1</p>
      </div>
      <div class="stepwizard-step">
        <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
        <p>Step 2</p>
      </div>
      <div class="stepwizard-step">
        <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
        <p>Step 3</p>
      </div>
    </div>
  </div>
  
  <form role="form" action="" method="post">
    <div class="row setup-content" id="step-1">
      <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
          <h3> Step 1</h3>
          <div class="form-group">
                    <input type="text" name="fname" id="fname" class="form-control" placeholder="Enter Your First name" required type="text">
				</div>
				<div class="form-group">
                    <input type="text" name="mname" id="fname" class="form-control" placeholder="Enter Your Middle name" required type="text">
				</div>
				<div class="form-group">
                    <input type="text" name="lname" id="fname" class="form-control" placeholder="Enter Your Last name" required type="text">
				</div>
				<div class="form-group">
                    <input type="text" name="dob" id="fname" class="form-control" placeholder="Enter Your Date of birth yyyy.mm.dd" required type="text">
				</div>
				<div class="form-group">
                    <input type="text" name="nic" id="fname" class="form-control" placeholder="Enter Your National Id card Number" required type="text">
				</div>
				<div class="form-group">
                    <input type="text" name="gender" id="fname" class="form-control" placeholder="Enter Your Gender" required type="text">
				</div>
          <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
        </div>
      </div>
    </div>
    <div class="row setup-content" id="step-2">
      <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
          <h3> Step 2</h3>
          <div class="form-group">
                    <input type="text" name="add1" id="fname" class="form-control" placeholder="Enter Your permanent residence address" required type="text">
				</div>
				<div class="form-group">
                    <input type="text" name="add2" id="fname" class="form-control" placeholder="Enter Your Temporary residence Address " >
				</div>
				<div class="form-group">
                    <input type="text" name="province" id="fname" class="form-control" placeholder="Enter Your Province" required type="text">
				</div>
				<div class="form-group">
                    <input type="text" name="districts" id="fname" class="form-control" placeholder="Enter Your Districts" required type="text">
				</div>
				<div class="form-group">
                    <input type="text" name="seat" id="fname" class="form-control" placeholder="Enter Your Seat" required type="text">
				</div>
          <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
        </div>
      </div>
    </div>
    <div class="row setup-content" id="step-3">
      <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
          <h3> Step 3</h3>
		  <div class="form-group">
                    <input type="text" name="email" id="fname" class="form-control"  placeholder="Enter Your email" required type="text">
				</div>
				<div class="form-group">
                    <input type="text" name="username" id="fname" class="form-control" placeholder="Enter Your User Name" required type="text">
				</div>
				<div class="form-group">
                    <input type="password" name="password" id="fname" class="form-control"  placeholder="Enter Your Password" required type="password">
				</div>
				
				<div class="form-group">
                    <input type="password" name="password2" id="pw" class="form-control"  placeholder="Enter your password Again" required type="password">
				</div>
          <button class="btn btn-success btn-lg pull-right" type="submit" name="submit">Submit</button>

        </div>
      </div>
    </div>
			</fieldset>
		</form>
	
</div>
</body>
</html>

<?php
  require'database.php';
 $firstname = isset($_POST['fname']) ? $_POST['fname'] : '';
 $middlename = isset($_POST['mname']) ? $_POST['mname'] : '';
 $lastname = isset($_POST['lname']) ? $_POST['lname'] : '';
 $dob = isset($_POST['dob']) ? $_POST['dob'] : '';
 $nic = isset($_POST['nic']) ? $_POST['nic'] : '';
 $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
 $address1 = isset($_POST['add1']) ? $_POST['add1'] : '';
 $address2 = isset($_POST['add2']) ? $_POST['add2'] : '';
 $province = isset($_POST['province']) ? $_POST['province'] : '';
 $districts = isset($_POST['districts']) ? $_POST['districts'] : '';
 $seat = isset($_POST['seat']) ? $_POST['seat'] : '';
 $email = isset($_POST['email']) ? $_POST['email'] : '';
 $username = isset($_POST['username']) ? $_POST['username'] : '';
 $password = isset($_POST['password']) ? $_POST['password'] : '';
 $reqDate = date("Y-m-d");
 
 
 if (isset($_POST['submit'])) {
	 $sql="INSERT INTO `voter`(`frist_name`, `middle_name`, `last_name`, `date_of_birth`, `NIC_number`, `gender`, `permnent_address`, `trmpory_address`, `province`, `districts`, `seat`, `email`, `username`, `password`, `request_date`, `status`)
           VALUES ('$firstname','$middlename','$lastname','$dob','$nic','$gender','$address1','$address2','$province','$districts','$seat','$email','$username',MD5('$password'),'$reqDate','pending')";
 
	if (!mysqli_query($con,$sql)) {
		echo '<script language="javascript">';
		echo 'alert("You can not remain empty any filed")';
		echo '</script>';
		die( mysql_error());
	}else{
		echo '<script language="javascript">';
		echo 'alert("You entered record is added.")';
		echo '</script>';
		
	}
}
mysqli_close($con)
?>
