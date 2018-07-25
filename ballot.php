<!DOCTYPE html>
<?php
include('session3.php');
?>
<html>
    <head>

        <title>Online Election</title>
		
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/login.css" type="text/css">
		<link href="css/head.css" rel="stylesheet">
		<link href="css/menu.css" rel="stylesheet">
		<link href="css/election_data.css" rel="stylesheet">
	    
        
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
                        <a href="AdminHome.php">Home</a>
                    </li>
                    <li>
                        <a href="#services">Search Candidate</a>
                    </li>
                    <li>
                        <a href="#contact">Contact us</a>
                    </li>
					<li>
                        <a href="ALogout.php">Log Out</a>
                    </li>
				
			</ul>
		</div>
	</div>
    
</div>
<br>
<nav class="navbar navbar-inverse sidebar" role="navigation">
    <div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li><a href="Election_Data.php">Election Data<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
				<li ><a href="AdminProfile.php">Profile<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>
				<li ><a href="CandidateList.php">Candidate List<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-th"></span></a></li>
				<li><a href="PartyList.php">Party List<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-th-list"></span></a></li>
				<li ><a href="Election.php">Manage Election <span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-tasks"></span></a></li>
				<li ><a href="ballot.php">Ballot Paper<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-paperclip"></span></a></li>
				<li ><a href="Vclaim.php">Voter claim<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-hand-right"></span></a></li>
				<li ><a href="CandidateClaim.php">Candidate claim<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-hand-right"></span></a></li>
				<li ><a href="event.php">Events<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-calendar"></span></a></li>
				<li ><a href="notification.php">Notification<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-bell"></span></a></li>
				<li ><a href="message.php">Messages<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-envelope"></span></a></li>
			</ul>
		</div>
	</div>
</nav>
<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
            <form class="form-horizontal" action="form3.php?id=<?php echo $id?>" method="post">
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
			<select name='party_name' class='form-control' >
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
			<input name='date' class='form-control' type='text' value='2016.04.23' disabled>
				</div> 
				</div></b>
			<hr class='colorgraph'>	
			<div id='button' align="center">
			<input type='submit' name='vote' value='vote' class='btn btn-primary'/> &nbsp; &nbsp;
			<input action="action" type="button" class="btn btn-primary" value="clear" /> </div>
			 
			 
				</fieldset>		
            </form>
			</div>
            </div>
			<div>
</body>
</html>