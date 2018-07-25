<!DOCTYPE html>

<html>
    <head>

        <title>Online Election</title>
        <script type="text/javascript" async="" src="http://www.google-analytics.com/ga.js"></script>
        <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>		
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/login.css" type="text/css">
		<link href="css/head.css" rel="stylesheet">
		<link href="css/menu2.css" rel="stylesheet">
		<link href="css/notification.css" rel="stylesheet">
		
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
		    <script type="text/javascript">
	 function notzi(message, type) {
    
    var html =  '<div class="alert alert-' + type + ' alert-dismissable page-alert">';
    html +=     '<button type="button" class="close"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>';
    html +=     message;
    html +=     '</div>';    
    
    $(html).hide().prependTo('#notzi').slideDown(200);
};

$( function () {
    
    notzi('test', 'info');
    notzi('success', 'success');
    notzi('warning', 'warning');
    notzi('danger', 'danger');
    notzi('info', 'info');
    
    $('.page-alert .close').click( function(e) {
        e.preventDefault();
        $(this).closest('.page-alert').slideUp(200);
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

<nav class="navbar navbar-inverse sidebar" role="navigation">
    <div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
			<ul class="nav navbar-nav">
				
				<li ><a href="Profile.php">Profile<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>
				
				<li ><a href="vevent.php">Events<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-calendar"></span></a></li>
				<li ><a href="vnotification.php">Notification<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-bell"></span></a></li>
				<li ><a href="vmsg.php">Messages<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-envelope"></span></a></li>
			</ul>
		</div>
	</div>
</nav>

 <br>  
 
	<div id="notzi" margin-top="40px" ></div><!-- HERE IS WHERE THE NOTY WILL APPEAR-->
    

</body>
</html>