<html>

<head>
    <title>Online Election</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link href="css/head.css" rel="stylesheet">
	<link href="css/form.css" rel="stylesheet">
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>

<body>
                    <div class="head">
    
       <div class="container-fluid">
		<div class="navbar-header">
		
                    <b>Online Election System</b>
				
		</div>
		<div>
			<ul class="nav navbar-nav navbar-right">
	      
                               <li>
                        <a href="AdminHome.php">Home</a>
                    </li>
                    <li>
                        <a href="candidate_regtr_admin.php">Candidate Register</a>
                    </li>
                    <li>
                        <a href="registration_admin.php">Voter Register</a>
                    </li>
				<li>
                        <a href="ALogout.php">Log Out</a>
                    </li>
				
			</ul>
		</div>
	</div>
    
</div>


    <?php
 include('session3.php');
 $id = null;
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }
 ?>
  <div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
            <form class="form-horizontal" action="form2.php?id=<?php echo $id?>" method="post">
              <fieldset>
      
          <!-- Form Name -->
        <h2>  Voter Register Form </h2>
          <hr class="colorgraph">     
                                <?php
						
require'database.php';   
$sql = "SELECT * FROM voter WHERE voter_registr_no=$id";
$compltName=$login_session;
$compltDate = date("Y-m-d");

$result = $con->query($sql);
if ($result->num_rows > 0) {
 while($row = $result->fetch_assoc()) {
 
 echo "<div class='form-group'>
		<label class='col-sm-3 control-label' for='card-holder-name'>Voter Register No</label> 
		<div class='col-sm-9'>
			<b><input name='voter_registr_no' class='form-control' type='text' value=".$row["voter_registr_no"]."  disabled></b>
			</div>
			</div> 
		<div class='form-group '>
		<label class='col-md-3 col-md-3 control-label'>Frist Name </label> 
		     <div class='col-sm-9'>
			<b><input name='frist_name' class='form-control' type='text' value=".$row["frist_name"]."  disabled><b>
			</div> 
            </div>				
		<div class='form-group '>
		<label class='col-md-3 col-md-3 control-label'>Middle Name</label> 
		<div class='col-sm-9'>
			<b><input name='middle_name' class='form-control' type='text' value=".$row["middle_name"]."  disabled></b>
				</div>
				</div>
		<div class='form-group '>
		<label class='col-md-3 col-md-3 control-label'>Last Name</label>
            <div class='col-sm-9'>		
			<b><input name='last_name' class='form-control' type='text' value=".$row["last_name"]."  disabled></b>
				</div> 
                </div>				
		<div class='form-group '>
		<label class='col-md-3 col-md-3 control-label'>Date of Birth</label> 
		 <div class='col-sm-9'>
			<b><input name='date_of_birth' class='form-control' type='text' value=".$row["date_of_birth"]."  disabled></b>
				</div> 
				</div>
		<div class='form-group '>
		<label class='col-md-3 col-md-3 control-label'>NIC number</label>
		<div class='col-sm-9'>
			<b><input name='NIC_number' class='form-control' type='text' value=".$row["NIC_number"]."  disabled></b>
			    </div>
				</div>
		<div class='form-group '>
		<label class='col-md-3 col-md-3 control-label'>Gender</label>
		<div class='col-sm-9'>
			<b><input name='gender' class='form-control' type='text' value=".$row["gender"]."  disabled></b>
				</div> 
				</div>
	    <div class='form-group '>
		<label class='col-md-3 col-md-3 control-label'>Permnent Address</label> 
		<div class='col-sm-9'>
			<b><input name='permnent_address' class='form-control' type='text' value=".$row["permnent_address"]."  disabled></b>
				</div> 
				</div>
		<div class='form-group '>
		<label class='col-md-3 col-md-3 control-label'>Tempory_address</label> 
		<div class='col-sm-9'>
		<b><input name='trmpory_address' class='form-control' type='text' value=".$row["trmpory_address"]."  disabled></b>
				</div> 
				</div>
		<div class='form-group '>
		<label class='col-md-3 col-md-3 control-label'>Province</label> 
		<div class='col-sm-9'>
		<b>	<input name='province' class='form-control' type='text' value=".$row["province"]."  disabled> </b>
				</div>
                </div>				
		<div class='form-group '>
		<label class='col-md-3 col-md-3 control-label'>Districts</label> 
		    <div class='col-sm-9'>
			<b><input name='districts' class='form-control' type='text' value=".$row["districts"]."  disabled></b>
				</div> 
				</div>
				<div class='form-group '>
		<label class='col-md-3 col-md-3 control-label'>Seat</label> 
		    <div class='col-sm-9'>
			<b><input name='seat' class='form-control' type='text' value=".$row["seat"]."  disabled></b>
				</div> 
				</div>
		<div class='form-group '>
		<label class='col-md-3 col-md-3 control-label'>email</label> 
		    <div class='col-sm-9'>
			<b><input name='email' class='form-control' type='text' value=".$row["email"]."  disabled></b>
				</div> 
				</div>
		<div class='form-group '>
		<label class='col-md-3 col-md-3 control-label'>Request Date</label>
		    <div class='col-sm-9'>
			<b><input name='request_date' class='form-control' type='text' value=".$row["request_date"]."  disabled></b>
				</div> 
				</div>
       <div class='form-group '>
		<label class='col-md-3 col-md-3 control-label'>Status</label>
		<div class='col-sm-9'>
		<b><select name='status' class='form-control'>
 <option>".$row["status"]."</option> 
 <option value='Completed'>Completed</option> 
 <option value='Denied'>Denied</option> 
 </select></b>
	
	</div>
				</div> 	<br/>
			<hr class='colorgraph'>	
			<div id='button'>
			<input type='submit' name='update' value='Approved' class='btn btn-primary'/> &nbsp; &nbsp; ";
			echo '<input action="action" type="button" class="btn btn-primary" value="Back" onclick="history.go(-1);"/> </div>';
			 echo'<br>';
			  echo" <div class='form-group '>                                                               
		             <label class='col-sm-3 control-label'>Approved by</label> 
					 <div class='col-sm-9'>
			       <b><input name='compltName' type='text' value='$compltName' disabled></b>
			          </div>
                      </div>					  
					<div class='form-group '>
		             <label class ='col-md-3 col-md-3 '>Approved Date</label>
                    <div class='col-sm-9'>					 
			       <b><input name='compltDate' type='text' value='$compltDate' disabled ></b>
			          </div>	
					  </div> ";
					  
}
} else {
     echo "0 results";
}
?>
  <?php
 $voter_registr_no=isset($_POST['voter_registr_no']) ? $_POST['voter_registr_no'] : '';
 $status = isset($_POST['status']) ? $_POST['status'] : '';
 
 $compltName = $login_session;
 $compltDate = date("Y-m-d");
			if(isset($_POST['update']))
 {
$sql="UPDATE voter SET status='$status', admin_name='$compltName',register_date='$compltDate' where  voter_registr_no =$id";
 $q1=mysqli_query($con,$sql);
if($q1)
{
echo '<script type="text/javascript">'; 
echo 'alert("Successfully updated");'; 
echo 'window.location.href = "registration_admin.php";';
echo '</script>';
}
else
{

echo '<SCRIPT LANGUAGE="JavaScript">
    window.alert("Not updated Your Record"); 
	window.location.href = "registration_admin.php";
    </SCRIPT>';
}
 } 
$con->close();
?>
                        </div>
				</fieldset>		
            </form>
			</div>
            </div>
			<div>
</body>

</html>
