<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Online Election System</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/index.css" rel="stylesheet">
	 <link href="css/contact.css" rel="stylesheet">
	 <link rel="stylesheet" href="css/footer.css" type="text/css">
    

    <!-- Custom Fonts -->
	
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  

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
                        <a href="#about">About Us</a>
                    </li>
                    <li>
                        <a href="#services">Help & Service</a>
                    </li>
                    <li>
                        <a href="#contact">Contact us</a>
                    </li>
				
			</ul>
		</div>
	</div>
    
</div>
            <!-- /.navbar-collapse -->
        
        <!-- /.container -->
    </nav>

    <!-- Header -->
    
    <div class="intro-header">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1 style="color:blue">Welcome to </h1>
                        <h3 style="color:blue">Online Election System</h3>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons"> 
                            <li>
                            <a href="VoterLogin.php" class="btn btn-default btn-lg"><i class="glyphicon glyphicon-user"></i> <span class="network-name">Voters</span></a>
                            </li>
                            <li>
                                <a href="CandidateLogin.php" class="btn btn-default btn-lg"><i class="glyphicon glyphicon-user"></i> <span class="network-name">Candidate</span></a>
                            </li>
                            <li>
                                <a href="AdminLogin.php" class="btn btn-default btn-lg"><i class="glyphicon glyphicon-user"></i> <span class="network-name">Admin</span></a>
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

	<a name="about"></a>
	
    <div class="content-section-a">

        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Who we are</h2>
                    <p class="lead">Online Election System is an election system that allows a voter to record his or her secure and secret ballot electronically.
					 Online Election System enables voters to securely and easily cast their vote from any location and on any device with a stable Internet connection.</p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="img/VOTE_banner.jpg" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->
    <a  name="services"></a>
    <div class="content-section-b">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Qualification Criteria</h2>
                    <p class="lead"> <ul>
					<li>Must be a citizen of Bangladesh</li>
                    <li>Must have attained the age of 18 years on the date of registration for the relevant register.</li>
                    <li>Must not have been found or declared to be of unsound mind under any law in force.</li>
                    <li>Must not have been serving or not served imprisonment during the immediate proceeding seven years.</li>
                    <li>Must be an ordinary resident at the relevant address on the operative date.</li>
                    <li>No person is entitled to have his/her name entered or retained in more than register or more than once in the same register.</li></ul>
</p>
                </div>
                <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                    <img class="img-responsive" src="img/Electoral Banner.jpg" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
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
    

    <div class="omb_login">
     
    <div class="row omb_row-sm-offset-3 omb_socialButtons">
          <div class="col-xs-4 col-sm-2">
            <a href="https://www.facebook.com/raselhasandurjoy" class="btn btn-lg btn-block omb_btn-facebook">
              <i class="fa fa-facebook visible-xs"></i>
              <span class="hidden-xs">Facebook</span>
            </a>
          </div>
          <div class="col-xs-4 col-sm-2">
            <a href="https://twitter.com/RH_durjoy" class="btn btn-lg btn-block omb_btn-twitter">
              <i class="fa fa-twitter visible-xs"></i>
              <span class="hidden-xs">Twitter</span>
            </a>
          </div>  
          <div class="col-xs-4 col-sm-2">
            <a href="https://plus.google.com/u/0/+MdRasel-hossain" class="btn btn-lg btn-block omb_btn-google">
              <i class="fa fa-google-plus visible-xs"></i>
              <span class="hidden-xs">Google+</span>
            </a>
          </div>  
    </div>

    
    </div>        
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
