<!DOCTYPE html>
<?php
include('session.php');
?>
<html>
    <head>

        <title>Online Election</title>
         
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/login.css" type="text/css">
		<link href="css/head.css" rel="stylesheet">
		<link href="css/result.css" rel="stylesheet">
        
<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/serial.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>

<script>
   var chart = AmCharts.makeChart( "chartdiv", {
  "type": "serial",
  "theme": "light",
  "dataProvider": [ {
    "country": "UNP",
    "visits": 5098916
  }, {
    "country": "UPFA",
    "visits": 4732664
  }, {
    "country": "TNA",
    "visits": 515963	
  }, {
    "country": "JVP",
    "visits": 543944
  }, {
    "country": "SMC",
    "visits": 44193
  }, {
    "country": "EPDP",
    "visits": 33481
  } ],
  "valueAxes": [ {
    "gridColor": "#FFFFFF",
    "gridAlpha": 0.2,
    "dashLength": 0
  } ],
  "gridAboveGraphs": true,
  "startDuration": 1,
  "graphs": [ {
    "balloonText": "[[category]]: <b>[[value]]</b>",
    "fillAlphas": 0.8,
    "lineAlpha": 0.2,
    "type": "column",
    "valueField": "visits"
  } ],
  "chartCursor": {
    "categoryBalloonEnabled": false,
    "cursorAlpha": 0,
    "zoomable": false
  },
  "categoryField": "country",
  "categoryAxis": {
    "gridPosition": "start",
    "gridAlpha": 0,
    "tickPosition": "start",
    "tickLength": 20
  },
  "titles": [
			{
			"id": "Title-1",
			"size": 15,
			"text": "2015 Sri Lankan Parliamentary Elections"
						}],
  "export": {
    "enabled": true
  }

} );
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
<div class= "search">

    
          <form class="form-horizontal" action="" method="post">
          <fieldset>
           
            <hr class="colorgraph">
            <!-- Name input-->
            <div class="form-group">
              
              <div class="col-md-9">
                <input id="name" name="name" type="text" placeholder="Election Name " class="form-control">
              </div>
            </div>
    
            <!-- Email input-->
            <div class="form-group">
              
              <div class="col-md-9">
                <input id="email" name="email" type="text" placeholder="Election Year" class="form-control">
              </div>
            </div>
			<div id='button' align="center">
			<input type='submit' name='vote' value='Search' class='btn btn-primary'/> &nbsp; &nbsp;
			<input action="action" type="button" class="btn btn-primary" value="clear" /> </div>
			<hr class="colorgraph">
			
			</fieldset>
			</form>
	           <h3><b> Lastest Election Results <b> </h3>
			   <br>
			   
			   <h4><a href="#" >2015 Sri Lankan Parliamentary Elections</a> </h4>
			   <br>
			   <h4><a href="#" >2015 Sri Lankan Presidential Elections</a> </h4>  
                <br>
                <br>
                 <input type="submit" value="Column Chart" onclick="location.href ='result.php'" class="btn btn-primary btn-cons">
                  <!-- Contextual button for informational alert messages -->
                 &nbsp; &nbsp;&nbsp; &nbsp;				
	             <input type="submit" value="Pie Chart" onclick="location.href ='PieChart.php'" class="btn btn-success btn-cons">
                  <!-- Contextual button for informational alert messages -->
                 &nbsp; &nbsp;&nbsp; &nbsp;
                 <input type="submit" value="Line Chart" onclick="location.href ='LineChart.php'" class="btn btn-warning btn-cons">
</div>
<div class= "diagram">
<div id="chartdiv" style="width:95% ; height: 500px; margin:10px 50px" color="red"></div>
</div>
</body>
</html>