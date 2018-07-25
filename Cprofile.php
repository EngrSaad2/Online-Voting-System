<!DOCTYPE html>

<html>
    <head>

        <title>Online Election</title>
         
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/login.css" type="text/css">
		<link href="css/head.css" rel="stylesheet">
		<link href="css/menu2.css" rel="stylesheet">
		
		<script type="text/javascript">
		    function htmlbodyHeightUpdate(){
		var height3 = $( window ).height()
		var height1 = $('.nav').height()+50
		height2 = $('.main').height()
		if(height2 > height3){
			$('html').height(Math.max(height1,height3,height2)+10);
			$('body').height(Math.max(height1,height3,height2)+10);
		}
		else
		{
			$('html').height(Math.max(height1,height3,height2));
			$('body').height(Math.max(height1,height3,height2));
		}
		
	}
	$(document).ready(function () {
		htmlbodyHeightUpdate()
		$( window ).resize(function() {
			htmlbodyHeightUpdate()
		});
		$( window ).scroll(function() {
			height2 = $('.main').height()
  			htmlbodyHeightUpdate()
		});
	});
		</script>
            
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
                        <a href="CandidateHome.php">Home</a>
                    </li>
                    <li>
                        <a href="#services">Upload Post</a>
                    </li>
                    <li>
                        <a href="#contact">Contact us</a>
                    </li>
					<li>
                        <a href="CLogout.php">Log Out</a>
                    </li>
				
			</ul>
		</div>
	</div>
    
</div>

<nav class="navbar navbar-inverse sidebar" role="navigation">
    <div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
			<ul class="nav navbar-nav">
				
				<li ><a href="Cprofile.php">Profile<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>
				
				<li ><a href="cevent.php">Events<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-calendar"></span></a></li>
				<li ><a href="#">Notification<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-bell"></span></a></li>
				<li ><a href="#">Messages<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-envelope"></span></a></li>
			</ul>
		</div>
	</div>
</nav>

   <?php
 include('session2.php');
 $id = null;
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }
 ?>
<div class="main">
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
            <form class="form-horizontal" action="Cprofile.php?id=<?php echo $id?>" method="post">
              <fieldset>
      
          <!-- Form Name -->
        <h2> Candidate Register Form </h2>
          <hr class="colorgraph">     
          <b>
<div class='form-group'>
		<label class='col-sm-3 control-label' for='card-holder-name'>Voter Register No</label> 
		<div class='col-sm-9'>
			<input name='voter_registr_no' class='form-control' type='text' value='00005'  disabled>
			</div>
			</div> 
		<div class='form-group '>
		<label class='col-md-3 col-md-3 control-label'>Frist Name </label> 
		     <div class='col-sm-9'>
			<input name='frist_name' class='form-control' type='text' value='Gayan'  disabled>
			</div> 
            </div>				
		<div class='form-group '>
		<label class='col-md-3 col-md-3 control-label'>Middle Name</label> 
		<div class='col-sm-9'>
			<input name='middle_name' class='form-control' type='text' value='Lakshitha'  disabled>
				</div>
				</div>
		<div class='form-group '>
		<label class='col-md-3 col-md-3 control-label'>Last Name</label>
            <div class='col-sm-9'>		
			<input name='last_name' class='form-control' type='text' value='Senevirathna'  disabled>
				</div> 
                </div>				
		<div class='form-group '>
		<label class='col-md-3 col-md-3 control-label'>Date of Birth</label> 
		 <div class='col-sm-9'>
			<input name='date_of_birth' class='form-control' type='text' value='1958.04.15'  disabled>
				</div> 
				</div>
		<div class='form-group '>
		<label class='col-md-3 col-md-3 control-label'>NIC number</label>
		<div class='col-sm-9'>
			<input name='NIC_number' class='form-control' type='text' value='589632147v' disabled>
			    </div>
				</div>
		<div class='form-group '>
		<label class='col-md-3 col-md-3 control-label'>Gender</label>
		<div class='col-sm-9'>
			<input name='gender' class='form-control' type='text' value='Male'  disabled>
				</div> 
				</div>
	    <div class='form-group '>
		<label class='col-md-3 col-md-3 control-label'>Permnent Address</label> 
		<div class='col-sm-9'>
			<input name='permnent_address' class='form-control' type='text' value='788, high level , colombo8'  disabled>
				</div> 
				</div>
     		<div class='form-group '>
		<label class='col-md-3 col-md-3 control-label'>Parliment Member</label> 
		    <div class='col-sm-9'>
			<input name='seat' class='form-control' type='text' value='yes'  disabled>
				</div> 
				</div>
		<div class='form-group '>
		<label class='col-md-3 col-md-3 control-label'>Email</label> 
		    <div class='col-sm-9'>
			<input name='email' class='form-control' type='text' value='gayansenevirathana@gmail.com'  disabled>
				</div> 
				</div></b>		
   </div>
				</fieldset>		
            </form>
			</div>
            </div>
			
</div>
</body>
</html>