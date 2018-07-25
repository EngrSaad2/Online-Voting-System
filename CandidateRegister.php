<!DOCTYPE html>
<html>
    <head>

        <title>Online Election</title>
         
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/login.css" type="text/css">
            
    </head>
    <body>
         <div class="head">
    
       <div class="container-fluid">
		<div class="navbar-header">
                   <b> Online Election System </b>
		</div>
		
	</div>
    
</div>
             
           <div class="container">

<div class="row" style="margin-top:2px">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		<form name="login" method="POST" action="">
			<fieldset>
				<h2>Register Form</h2>
				<hr class="colorgraph">
                                 
				<div class="form-group">
                    <input type="text" name="fname" id="fname" class="form-control input-lg" placeholder="Enter Your First name" required type="text">
				</div>
				<div class="form-group">
                    <input type="text" name="mname" id="fname" class="form-control input-lg" placeholder="Enter Your Middle name" required type="text">
				</div>
				<div class="form-group">
                    <input type="text" name="lname" id="fname" class="form-control input-lg" placeholder="Enter Your Last name" required type="text">
				</div>
				<div class="form-group">
                    <input type="text" name="dob" id="fname" class="form-control input-lg" placeholder="Enter Your Date of birth yyyy.mm.dd" required type="text">
				</div>
				<div class="form-group">
                    <input type="text" name="nic" id="fname" class="form-control input-lg" placeholder="Enter Your National Id card Number" required type="text">
				</div>
				<div class="form-group">
                    <input type="text" name="gender" id="fname" class="form-control input-lg" placeholder="Enter Your Gender" required type="text">
				</div>
				<div class="form-group">
                    <input type="text" name="add1" id="fname" class="form-control input-lg" placeholder="Enter Your permanent residence address" required type="text">
				</div>
				<div class="form-group">
                    <input type="text" name="member" id="fname" class="form-control input-lg" placeholder="Are You Parliment Member?" required type="text">
				</div>
				<div class="form-group">
                    <input type="text" name="email" id="fname" class="form-control input-lg" placeholder="Enter Your Email Address" required type="text">
				</div>
				<div class="form-group">
                    <input type="text" name="username" id="fname" class="form-control input-lg" placeholder="Enter Your User Name" required type="text">
				</div>
				<div class="form-group">
                    <input type="password" name="password" id="fname" class="form-control input-lg" placeholder="Enter Your Password" required type="password">
				</div>
				
				<div class="form-group">
                    <input type="password" name="password2" id="pw" class="form-control input-lg" placeholder="Enter your password Again" required type="password">
				</div>
			   
				<hr class="colorgraph">
				<div class="row">
			
					<div class="col-xs-6 col-sm-6 col-md-6">
						<button name="submit" type="submit" class="btn btn-lg btn-primary btn-block">Submit </button> 
					</div>
				</div>
			
			</fieldset>
		</form>
	</div>
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
 $member = isset($_POST['member']) ? $_POST['member'] : '';
 $email = isset($_POST['email']) ? $_POST['email'] : '';
 $username = isset($_POST['username']) ? $_POST['username'] : '';
 $password = isset($_POST['password']) ? $_POST['password'] : '';
 $reqDate = date("Y-m-d");
 
 
 if (isset($_POST['submit'])) {
	 $sql="INSERT INTO `candidate`(`frist_name`, `middle_name`, `last_name`, `date_of_birth`, `NIC_number`, `gender`,`permenent_address`, `parliment_member`, `email`, `username`, `password`, `request_date`, `status`)
           VALUES ('$firstname','$middlename','$lastname','$dob','$nic','$gender','$address1','$member','$email','$username',MD5('$password'),'$reqDate','pending')";
 
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
