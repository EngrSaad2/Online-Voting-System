<!DOCTYPE html>
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
                        <a href="#home">Home</a>
                    </li>
                    <li>
                        <a href="#services">Search Candidate</a>
                    </li>
                    <li>
                        <a href="#contact">Contact us</a>
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
				<li class="active"><a href="Election_Data.php">Home<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
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
</body>
</html>