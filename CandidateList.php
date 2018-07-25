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
		<script src="js/jquery.dataTables.min.js"></script>
        <script src="js/jquery.dataTables.bootstrap.js"></script>
        <script src="js/bootstrap-tooltip.js"></script>
        <link rel="stylesheet" href="css/login.css" type="text/css">
		<link href="css/head.css" rel="stylesheet">
		<link href="css/menu.css" rel="stylesheet">
		<link href="css/election_data.css" rel="stylesheet">
		<link href="css/candidateList.css" rel="stylesheet">
	    
        
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
     <script>
            $(document).ready(function() {
                $('#data').dataTable({
				 "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
        iDisplayLength: 10,    
        iDisplayStart: 0,
        "oLanguage": {
            "sUrl": "media/language/de_DE.txt",
            "sZeroRecords": "There are no records that match your search criterion",
            "sLengthMenu": "Display _MENU_ records per page",
            "sInfo": "Displaying _START_ to _END_ of _TOTAL_ records",
            "sInfoEmpty": "Showing 0 to 0 of 0 records",
            "sInfoFiltered": "(filtered from _MAX_ total records)"
        },
               
                    //"bLengthChange": false,
                    "bFilter": false,
                    "bSort": false

                });
                var table = $('#data').DataTable();

                // #column3_search is a <input type="text"> element
                $('#column3_search').on('keyup', function() {
                    table
                        .columns(3)
                        .search(this.value)
                        .draw();
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

<?php
echo"<div class='container'>
    <div class='row'>
        <div class='col-md-6 col-md-offset-3'>";
           echo"<h3> <b>Search Candidate</b></h3>";
			
			  echo"<form method='POST' action='CandidateList.php' class='search-form' name='sub' >";
                echo"<div class='form-group has-feedback'>";
            		echo"<td><input type='text' name='ty' class='auto1'> <button name='se'  class='btn btn-info'>
                        <span class='glyphicon glyphicon-search'></span>Search </button>";
            	echo"</div>
				</form>";
			
		  echo"<br>
		  <br>
		  <br>";
require'database.php';

$ty = isset($_POST['ty']) ? $_POST['ty'] : '';

if(isset($_POST['se']))
 {
$sql="select `candidate_registr_no`,`frist_name`,`middle_name`,`last_name`,`NIC_number`,`gender`,`parliment_member`,`email`  from candidate where frist_name='$ty'";
$q1=mysqli_query($con,$sql);

echo"<table  border='2' class='table table-striped table table-hover'>";
echo"<tr class='info'><th>ID</th><th>First Name</th><th>Middle Name</th><th>Last Name</th><th>NIC number</th><th>Gender</th><th>Parliment Member</th><th>Email</th></tr>";

  while($rows=mysqli_fetch_array($q1,MYSQL_ASSOC))
{
 $candidate_registr_no=$rows['candidate_registr_no'];
 $frist_name=$rows['frist_name'];
 $middle_name=$rows['middle_name'];
 $last_name=$rows['last_name'];
 $NIC_number=$rows['NIC_number'];
 $gender=$rows['gender'];
 $parliment_member=$rows['parliment_member'];
 $email=$rows['email'];
  
echo"<tr><td>$candidate_registr_no</td><td>$frist_name</td><td>$middle_name</td><td>$last_name</td><td>$NIC_number</td><td>$gender</td><td>$parliment_member</td><td>$email </td></tr>";
}

}
$con->close();
       echo" </div>
    </div>
   
    </div>
</div>";

?>

</body>
</html>