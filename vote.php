<html>
<?php
include('session.php');
?>
<head>
    <title>Online Election</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link href="css/head.css" rel="stylesheet">
	<link href="css/form.css" rel="stylesheet">
	<link href="css/vote.css" rel="stylesheet">
	
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
                        <a href="VoterHome.php">Home</a>
                    </li>
                    <li>
                        <a href="#services">Search Candidate</a>
                    </li>
                    <li>
                        <a href="#contact">Contact us</a>
                    </li>
					<li>
                        <a href="VLogout.php">Log Out</a>
                    </li>
				
			</ul>
		</div>
	</div>
    
</div>

  <div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
            <form class="form-horizontal" action="vote.php" method="post">
              <fieldset>
      
          <!-- Form Name -->
        <h2> Ballot Papers </h2>
          <hr class="colorgraph">  
		  
        <div class='form-group '><b>
		<label class='col-md-3 col-md-3 control-label'>Election Name </label> 
		     <div class='col-sm-9'>
			<input name='election' class='form-control' type='text' value='Presidential election'  disabled>
			</div> 
            </div>				
		<div class='form-group '>
		<label class='col-md-3 col-md-3 control-label'>Party Name</label> 
		<div class='col-sm-9'>
		
			<select name='party_name' class='form-control'  > 
			<option> Select Party     </option>
			<option>New Democratic Front </option>
			<option>United People's Freedom Alliance</option>
			<option>Our National Front </option>
			<option>Tamil National Alliance </option>
			<option>Janatha Vimukthi Peramuna </option>
			<option>Sri Lanka Muslim Congress</option>
			</select> 
				
				</div>
				
				</div>
		<div class='form-group '>
		<label class='col-md-3 col-md-3 control-label'>Candidate Name</label>
            <div class='col-sm-9'>		
			<select name='candidate_name' class='form-control' >
			<option> Select Candidate    </option>
			<option>Maithripala Sirisena</option>
			<option>Mahinda Rajapaksa</option>
			<option>Ahamed Hasny </option>
			<option>Namal Ajith Rajapaksa</option>
			<option>Maulawi Ibrahim Mohanmed Mishlar</option>
			<option>A. S. P. Liyanage</option>
			</select>
				</div> 
                </div>				
		<div class='form-group '>
		<label class='col-md-3 col-md-3 control-label'>Province Name</label> 
		 <div class='col-sm-9'>
			<input name='province' class='form-control' type='text' value='Western Province' disabled>
				</div> 
				</div>
		<div class='form-group '>
		<label class='col-md-3 col-md-3 control-label'>Districts Name</label>
		<div class='col-sm-9'>
			<input name='districs' class='form-control' type='text' value='Gampaha'  disabled>
			    </div>
				</div>
		<div class='form-group '>
		<label class='col-md-3 col-md-3 control-label'>Seat Name</label>
		<div class='col-sm-9'>
			<input name='seat' class='form-control' type='text' value='Ja Ela'  disabled>
				</div> 
				</div>
	    <div class='form-group '>
		<label class='col-md-3 col-md-3 control-label'>Date</label> 
		<div class='col-sm-9'>
			<input name='date' class='form-control' type='text' value='2016.05.05' disabled>
				</div> 
				</div>
				<div class='form-group '>
		<label class='col-md-3 col-md-3 control-label'>UserId</label> 
		<div class='col-sm-9'>
			<input name='userid' class='form-control' type='text' value='00001' disabled>
				</div> 
				</div>
				</b>
			<hr class='colorgraph'>	
			<div id='button' align="center">
			<input type='submit' name='submit' value='vote' class='btn btn-primary'/> &nbsp; &nbsp;
			<input action="action" type="button" class="btn btn-info btn-cons" value="clear" /> &nbsp; &nbsp;
			<input type="button" onclick="window.open('http://www.slelections.gov.lk/web/index.php/en/recognized-political-parties')" value="Help"   class="btn btn-warning btn-cons">
			</div>
			</fieldset>		
            </form>
			<b>You can browse party and candidate details here </b> 
			<br>
			<input type="button" onclick="window.open('http://www.slelections.gov.lk/web/index.php/en/recognized-political-parties')" value="View Party"  class="btn btn-success btn-cons"> &nbsp; &nbsp;
	        <input type="button" onclick="window.open('https://www.google.lk/webhp?sourceid=chrome-instant&ion=1&espv=2&ie=UTF-8#q=sri+lankan+politicians+names')" value="View Candidate"  class="btn btn-success btn-cons">
			</div>
            </div>
			</div>
			
	
	<?php
	require'database.php';
 $election = isset($_POST['election']) ? $_POST['election'] : '';
 $party_name = isset($_POST['party_name']) ? $_POST['party_name'] : '';
 $candidate_name = isset($_POST['candidate_name']) ? $_POST['candidate_name'] : '';
 $province = isset($_POST['province']) ? $_POST['province'] : '';
 $districs = isset($_POST['districs']) ? $_POST['districs'] : '';
 $seat = isset($_POST['seat']) ? $_POST['seat'] : '';
 $date = isset($_POST['date']) ? $_POST['date'] : '';
 $userid = isset($_POST['userid']) ? $_POST['userid'] : '';
 
 
 if (isset($_POST['submit'])) {
	 $sql="INSERT INTO `election_vote`(`election_name`, `party_name`, `candidate_name`, `province_name`, `districts_name`, `seat_name`, `date`, `user_id`)
           VALUES ('$election','$party_name','$candidate_name','$province','$districts','$seat','$date' ,'$userid')";
 
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
</body>

</html>
