<!DOCTYPE html>
<html>
    <head>

        <title>Online Election</title>
         
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/login.css" type="text/css">
		<link href="css/head.css" rel="stylesheet">
		<link href="css/report2.css" rel="stylesheet">
        <script type="text/javascript">         
(function(){
    
var queued_events = []
var last_timestamp;

var addEvent = function() {
    current_event = queued_events.shift();
    date = new Date(current_event.timestamp);
    di = ['timeline-inverted', 'timeline-standard'];
    co = ['info', 'danger', 'warning', 'success', 'active'];
    ic = ['floppy-disk', 'heart', 'star', 'ok-circle', 'fire', 'thumbs-up'];
    $('#activity-feed').prepend('<li class="'+di[Math.floor(Math.random() * 2)]+'"> <div class="timeline-badge '+co[Math.floor(Math.random() * 2)]+'"><i class="glyphicon glyphicon-'+ic[Math.floor(Math.random() * 6)]+'"></i></div> <div class="timeline-panel"> <div class="timeline-heading"> <h4 class="timeline-title">'+date.toISOString()+' Views: '+current_event.imps+', Clicks: '+current_event.clicks+'</h4> <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago via Twitter</small></p> </div> <div class="timeline-body"> <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p> </div> </div> </li>');
}

var getData = function(lastTimestamp) {
    var jsonp_url;
    
    if(typeof lastTimestamp !== 'undefined') {
        jsonp_url = "https://api-dev1.cidewalk.com/api/public_activity_feed?last_timestamp="+lastTimestamp+"&callback=?";
    } else {
        jsonp_url = "https://api-dev1.cidewalk.com/api/public_activity_feed?callback=?";
    }
    
    $.getJSON(jsonp_url, function(data) {
        queued_events = queued_events.concat(data);
        last_timestamp = queued_events[queued_events.length - 1].timestamp;
    });
}

$(document).ready(function() {
    $.when( getData() ).done( function() {
        setInterval(function() {addEvent()}, Math.floor(((Math.random() * 5) + 1) * 1000));
    });
});

})();
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
<div class="container">
    <div class="page-header">
        <h1 id="timeline">Election Reports</h1>
    </div>
    <ul class="timeline" id="activity-feed">
        <li>
          <div class="timeline-badge"><i class="glyphicon glyphicon-credit-card"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">Parliamentary  election</h4>
              <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago via Twitter</small></p>
            </div>
            <div class="timeline-body">
              <p>Sri Lanka elects on national level a head of state - the president - and a legislature. The president is elected for a five-year term by the people. The Parliament has 225 members, elected for a five-year term, 196 members elected in multi-seat constituencies through proportional representation system where each party is allocated a number of seats from the quota for each district according to the proportion of the total vote that party obtains in the district. The other 29 which is called the national list are appointed by each party secretary according to the island wide proportional vote the party obtains.</p>
            </div>
          </div>
        </li>
        <li class="timeline-inverted">
          <div class="timeline-badge warning"><i class="glyphicon glyphicon-credit-card"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">Election</h4>
            </div>
            <div class="timeline-body">
              <p>This is considered the first national election held in Sri Lanka (then known as Ceylon). Although it took place before independence was actually granted, it was the first election under the Soulbury Constitution.

  Some of the major figures who had led the independence struggle were found in the rightwing United National Party led by D.S. Senanayake. In opposition were the Trotskyist Lanka Sama Samaja Party and Bolshevik Leninist Party of India, the Communist Party of Ceylon, the Ceylon Indian Congress and an array of independents.</p>
            </div>
          </div>
        </li>
        <li>
          <div class="timeline-badge danger"><i class="glyphicon glyphicon-credit-card"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">Presidential election </h4>
            </div>
            <div class="timeline-body">
              <p>Senanayake's UNP fell short of a majority, but was able to form a government in coalition with the All Ceylon Tamil Congress, which had taken most of the seats in the Tamil regions.

Sri Lanka became a dominion rather than attaining full independence. The British retained military bases in the country and English remained as the official language along with much of the administrative system put in place by the British along with British officials.</p>
            </div>
          </div>
        </li>
        
</div>

</body>
</html>