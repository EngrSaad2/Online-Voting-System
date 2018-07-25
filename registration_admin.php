<!DOCTYPE html>
<html>
<?php
include('session3.php');
?>
    <head>

        <title>Online Election</title>
         
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/login.css" type="text/css">
		<link href="css/head.css" rel="stylesheet">
		<link href="css/registration_admin.css" >
       
       <script>
            $(document).ready(function() {
                $('#data').dataTable();
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
<br>
      <h4 align="center"> <b> Voter Register Form <b></h4>
<br>
<br>
<?php
 require'database.php';
echo "<form name='rform' action='registration_admin.php' method='post'>";
$sql = "SELECT `voter_registr_no`,`frist_name`,`middle_name`,`last_name`,`request_date`,`status` FROM voter  ORDER BY `voter_registr_no` DESC";

$result = $con->query($sql);

if ($result->num_rows > 0) {
     echo " <table id='data' border='2' class='table table-striped custab' style='text-align:center'>
  <thead><tr class='info'>
  <th style='text-align:center'>Voter Registr No </th> 
  <th style='text-align:center'>Frist Name </th>
  <th style='text-align:center'>Middle Name </th>
  <th style='text-align:center'>Last Name </th>
  <th style='text-align:center'>Request Date</th> 
  <th style='text-align:center'>Status </th>
  <th style='text-align:center'>Action </th>
 </tr></thead>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
	      $myid=$row["voter_registr_no"]; 
         echo "<tr><td>" . $row["voter_registr_no"]. "</td><td>" . $row["frist_name"]. "</td><td>" . $row["middle_name"]. "</td><td>" . $row["last_name"].
		 "</td><td>" . $row["request_date"]. "</td>";
		if($row['status']=='Pending') 
         echo "<td><font color='red'>".$row['status']."</font></td>"; 
		 else
		 echo "<td>".$row['status']."</td>"; 
		 echo'<td><button type="button" class="btn btn-info" onClick=location.href="form2.php?id='.$myid.'">View</button></td></tr>';
     }
     echo "</table>";
} else {
     echo "0 results";
}

$con->close();
?>
</div>

</body>
</html>