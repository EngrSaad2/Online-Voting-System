<html>
    <head>

        <title>Online Election</title>
        
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/presidential.css" type="text/css">
		<link rel="stylesheet" href="css/login.css" type="text/css">
        <script src="new.js"></script>    
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        
            
    </head>
    <body>
         <div class="head">
    
       <div class="container-fluid">
		<div class="navbar-header">
                   <b> Online Election System </b>
				   
				  
		</div>
	    
		<input type="submit" class="btn btn-primary nextBtn btn-lg pull-right"  name="submit" value="Cast Your Vote" />
	</div>
    
</div>
             
           <div class="container">
<form name="vote" method="POST" action="">

	
<div class="one">
     <h2><b>Presidential Election - Sri Lanka</b></h2>
     <br>
	 
    <div class="funkyradio">
        <div class="funkyradio-default">

            <input type="radio" name="radio" value="radio1" />
            <label for="radio1"><b>United National Party</b> <div class=img><img src="img\elephants.png" height="75.8em" width="50.3em"  ></img> </div> </label>
			
        </div>
        <div class="funkyradio-default">
            <input type="radio" name="radio" value="radio2" />
            <label for="radio2"><b>United People's Freedom Alliance</b><div class=img><img src="img\betel.jpg" height="75.8em" width="50.3em"  ></img> </div></label>
			<div class="img"></div>
        </div>
        <div class="funkyradio-default">
            <input type="radio" name="radio" value="radio3" />
            <label for="radio3"><b>Ilankai Tamil Arasu Kadchi</b><div class=img><img src="img\house.jpg" height="75.8em" width="50.3em"  ></img> </div></label>
        </div>
        <div class="funkyradio-default">
            <input type="radio" name="radio" value="radio4" />
            <label for="radio4"><b>Democratic Unity Alliance</b><div class=img><img src="img\leaves.jpg" height="75.8em" width="50.3em"  ></img>  </div></label>
        </div>
        <div class="funkyradio-default">
            <input type="radio" name="radio" value="radio5" />
            <label for="radio5"><b>United People's Party</b><div class=img><img src="img\phone.jpg" height="75.8em" width="50.3em"  ></img>   </div></label>
        </div>
        <div class="funkyradio-default">
            <input type="radio" name="radio" value="radio6" />
            <label for="radio6"><b>People's Liberation Front</b><div class=img><img src="img\bell.jpg" height="75.8em" width="50.3em"  ></img>   </div></label>
        </div>
    </div>
</div>

<div class="two">
  <br>
  <br>
  <br>
  <br>
    <div class="funkyradio">
        <div class="funkyradio-default">
            <input type="radio" name="radio" value="radio7" />
            <label for="radio7"><b>Democratic Tamil National Alliance</b><div class=img><img src="img\lamp.jpg" height="75.8em" width="50.3em"  ></img>   </div></label></label>
        </div>
        <div class="funkyradio-default">
            <input type="radio" name="radio" value="radio8" />
            <label for="radio8"><b>Up-Country People's Front</b><div class=img><img src="img\mammoty.jpg" height="75.8em" width="50.3em"  ></img>   </div></label></label>
        </div>
        <div class="funkyradio-default">
            <input type="radio" name="radio" value="radio9" />
            <label for="radio9"><b>Nationalities Unity Organization</b><div class=img><img src="img\umbrella.jpg" height="75.8em" width="50.3em"  ></img>   </div></label></label>
        </div>
        <div class="funkyradio-default">
            <input type="radio" name="radio" value="radio10" />
            <label for="radio10"><b>Mahajana Eksath Peramuna</b><div class=img><img src="img\cart-wheel.jpg" height="75.8em" width="50.3em"  ></img>   </div></label></label>
        </div>
        <div class="funkyradio-default">
            <input type="radio" name="radio" value="radio11" />
            <label for="radio11"><b>Sri Lanka Progressive Front</b><div class=img><img src="img\flower.jpg" height="75.8em" width="50.3em"  ></img>   </div></label></label>
        </div>
        <div class="funkyradio-default">
            <input type="radio" name="radio" value="radio12" checked/>
            <label for="radio12"><b>Democratic National Movement</b><div class=img><img src="img\car.jpg" height="75.8em" width="50.3em"  ></img>   </div></label></label>
        </div>
    </div>
</div>

</form>
</div>
</body>
</html>
<?php
require'database.php';
@$a=$_POST['radio'];

if(@$_POST['submit'])
{
echo $s="insert into `presidential_election`(`candidate_name`) values('$a')" ;
echo "Your Data Inserted";
mysql_query($s);
}
?> 
