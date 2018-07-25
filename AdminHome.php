<!DOCTYPE html>
<?php
include('session3.php');
?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Online Election</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/index2.css" rel="stylesheet">
	 <link href="css/contact.css" rel="stylesheet">
	 <link href="css/head.css" rel="stylesheet">
	 <link href="css/socialnw.css" rel="stylesheet">
    

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>       
     <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        
            <!-- Brand and toggle get grouped for better mobile display -->
           
            <!-- Collect the nav links, forms, and other content for toggling -->
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
            <!-- /.navbar-collapse -->
        
        <!-- /.container -->
    </nav>

    <!-- Header -->
    <a name="home"></a>
    <div class="intro-header">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1>Welcome to </h1>
                        <h3>Online Election System</h3>
                        <hr class="intro-divider">
                       <ul class="list-inline intro-social-buttons">
                            <li>
                                <a href="registration_admin.php" class="btn btn-default btn-lg"><i class="glyphicon glyphicon-user"></i> <span class="network-name">Registration</span></a>
                            </li>
                            <li>
                                <a href="Election_Data.php" class="btn btn-default btn-lg"><i class="glyphicon glyphicon-ok"></i> <span class="network-name">Election Data</span></a>
                            </li>
                            <li>
                                <a href="Election_Reports.php" class="btn btn-default btn-lg"><i class="glyphicon glyphicon-signal"></i> <span class="network-name">Election Reports</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->

    <!-- Page Content -->

	<a name="services"></a>
	
    <div class="content-section-a">

       <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Smarter Way to Share on Social Media</h2>
                    <p class="lead">As you add content, you can easily select which of your social accounts you want to post to.
					Post the same message to all accounts or add context by customizing each.</p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                   <br>
				   <br>
				   <br><br>
				   <br>
                   <ul class="social-network social-circle">
                        <li><a href="https://www.rss.com/login" target="_blank" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                        <li><a href="https://web.facebook.com/Online-election-2237777812917807/?ref=edit_photo&_rdr" target="_blank" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/intent/tweet" target="_blank" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" target="_blank" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" target="_blank" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                    </ul>				
				
			
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->
    <a  name="services"></a>
       <div class="content-section-b">

       <?php
echo"<div class='container'>
    <div class='row'>
        <div class='col-md-6 col-md-offset-3'>";
           echo"<h3> <b>Search Candidate</b></h3>";
			
			  echo"<form method='POST' action='CandidateHome.php' class='search-form' name='sub' >";
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
    <!-- /.content-section-b -->
    <a  name="contact"></a>
    <div class="content-section-a">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                     <h2>Add your Idea or Complaint </h2>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                            <form class="form-horizontal" action="" method="post">
          <fieldset>
           
            <hr class="colorgraph">
            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Name</label>
              <div class="col-md-9">
                <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
              </div>
            </div>
    
            <!-- Email input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="email">Your E-mail</label>
              <div class="col-md-9">
                <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
              </div>
            </div>
    
            <!-- Message body -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="message">Your message</label>
              <div class="col-md-9">
                <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
              </div>
            </div>
           <hr class="colorgraph">
            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
              </div>
            </div>
          </fieldset>
          </form>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

	
    <div class="banner">

        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    
                </div>
                <div class="col-lg-6">
                    
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.banner -->

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    
                    <p class="copyright text-muted small">Copyright &copy; SAAD 2018. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
