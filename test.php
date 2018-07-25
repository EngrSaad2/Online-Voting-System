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



  <div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
            <form class="form-horizontal" action="#" method="post">
              <fieldset>
      
          <!-- Form Name -->
          <h2>Candidate Register Form</h2>
           <hr class="colorgraph">    
        <div class='form-group'>
		<label class='col-sm-3 control-label' for='card-holder-name'>Candidate Register No</label> 
		<div class='col-sm-9'>
			<b><input name='candidate_registr_no' class='form-control' type='text' value='1'  disabled></b>
			</div>
			</div> 
		<div class='form-group '>
		<label class='col-md-3 col-md-3 control-label'>Frist Name </label> 
		     <div class='col-sm-9'>
			<b><input name='frist_name' class='form-control' type='text' value='test name'  disabled></b>
			</div> 
            </div>				
		<div class='form-group '>
		<label class='col-md-3 col-md-3 control-label'>Middle Name</label> 
		<div class='col-sm-9'>
			<b><input name='middle_name' class='form-control' type='text' value='test name' disabled></b>
				</div>
				</div>
		<div class='form-group '>
		<label class='col-md-3 col-md-3 control-label'>Last Name</label>
            <div class='col-sm-9'>		
			<b><input name='last_name' class='form-control' type='text' value='test name'  disabled></b>
				</div> 
                </div>				
		<div class='form-group '>
		<label class='col-md-3 col-md-3 control-label'>Date of Birth</label> 
		 <div class='col-sm-9'>
			<b><input name='date_of_birth' class='form-control' type='text' value='1993.05.14'  disabled></b>
				</div> 
				</div>
		<div class='form-group '>
		<label class='col-md-3 col-md-3 control-label'>NIC number</label>
		<div class='col-sm-9'>
			<b><input name='NIC_number' class='form-control' type='text' value='931542496v'  disabled></b>
			    </div>
				</div>
		<div class='form-group '>
		<label class='col-md-3 col-md-3 control-label'>Gender</label>
		<div class='col-sm-9'>
			<b><input name='gender' class='form-control' type='text' value='female'  disabled></b>
				</div> 
				</div>
	    <div class='form-group '>
		<label class='col-md-3 col-md-3 control-label'>Permnent Address</label> 
		<div class='col-sm-9'>
			<b><input name='permenent_address' class='form-control' type='text' value='12,main road,colombo 08'  disabled></b>
				</div> 
				</div>
		<div class='form-group '>
		<label class='col-md-3 col-md-3 control-label'>Parliment Member</label> 
		<div class='col-sm-9'>
			<b><input name='parliment_member' class='form-control' type='text' value='yes'  disabled></b>
				</div>
                </div>				
				<div class='form-group '>
		<label class='col-md-3 col-md-3 control-label'>email</label> 
		    <div class='col-sm-9'>
			<b><input name='email' class='form-control' type='text' value='testuser@gmail.com'  disabled></b>
				</div> 
				</div>
		<div class='form-group '>
		<label class='col-md-3 col-md-3 control-label'>Request Date</label>
		    <div class='col-sm-9'>
		<b>	<input name='request_date' class='form-control' type='text' value='2016.03.22'  disabled> </b>
				</div> 
				</div>
       <div class='form-group '>
		<label class='col-md-3 col-md-3 control-label'>Status</label>
		<div class='col-sm-9'>
		<b><select name='status' class='form-control'>
 
 <option value='Completed'>Completed</option> 
 <option value='Denied'>Denied</option> 
 </select> </b>
	
	</div>
				</div> 	<br/>
			<hr class='colorgraph'>	
			<div id='button'>
			<input type='submit' name='update' value='Approved' class='btn btn-primary'/> &nbsp; &nbsp; 
			<input action="action" type="button" class="btn btn-primary" value="Back" /> </div>
		   <br>
		<div class='form-group '>                                                               
		             <label class='col-sm-3 control-label'>Approved by</label> 
					 <div class='col-sm-9'>
			     <b>  <input name='compltName' type='text' value='Nayana Samarasinghe' disabled> </b>
			          </div>
                      </div>					  
					<div class='form-group '>
		             <label class ='col-md-3 col-md-3 '>Approved Date</label>
                    <div class='col-sm-9'>					 
			      <b> <input name='compltDate' type='text' value='2016.03.25' disabled > </b>
			          </div>	
					  </div> 


                        </div>
				</fieldset>		
            </form>
			</div>
            </div>
			<div>
</body>

</html>
