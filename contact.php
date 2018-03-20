<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sea Life Tourism</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="SeaLifeTourism.css">
	<style type="text/css">
		.box_form{
			width:80%;
			margin:auto;
		}
	</style>
</head>
<body>

	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid" id="menu">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>                        
		      </button>
		      <img src="https://www.logaster.com/logotype/data/7528275/png/512/4/?c=588f3ae5aa4f85fcaf66ca36ea3a077d" alt="Sea Life Tourism" style="height:80px ; width :150px">
		    </div>
		    <div class="collapse navbar-collapse" id="myNavbar">
		      <ul class="nav navbar-nav navbar-right menu-right">
		        <li >
		        	<a href="home.php">
						<span>Home</span>	
		        	</a>
		        </li>
		        <li>
		        	<a href="#">
		        		<span>Information</span>
		        	</a>
		        </li>
		        <li>
		        	<a href="#">
		        		<span>Event</span>
		        	</a>
		        </li>
		        <li>
		        	<a href="#">
		        		<span>News</span>
		        	</a>
		        </li>
		        <li>
		        	<a href="contact.php">
		        		<span>Contact</span>
		        	</a>
		        </li>
		      </ul>
		    </div>
		</div>
	</nav>
	<div class="abc"></div>
	<br/><br/><br/><br/>	

	<div class="container-fluid" style="background-color:white; padding: 10px 0 10px 0 ; color: white;width: 100%">
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6" style="background-color: #222222;padding: 20px 0 20px 0 ;border-radius: 10px">
				<div class="row" style="text-align: center;">
					<p>Chúng tôi có thể giúp gì được cho bạn ?</p>
				</div>
				<form  method="post" class="box_form">
					<div class="form-group">
						<label for="name">Họ và Tên:</label>
						<input type="text" class="form-control" id="name" required>
					</div>
					<div class="form-group">
						<label for="email">Email:</label>
						<input type="email" class="form-control" id="email" required>
					</div>
					<div class="form-group">
						<label for="sub">Tiêu đề:</label>
						<input type="text" class="form-control" id="sub" required>
					</div>
					<div class="form-group">
						<label for="content">Nội Dung:</label>
						<textarea class="form-control" rows="7" id="content" required></textarea>
					</div>
					<button type="submit" class="btn btn-default" style="width: 100%;background-color: black;color: white;" id="submit">Gửi cho chúng tôi</button>					
				</form>
			</div>
			<div class="col-sm-3"></div>
		</div>
	</div>

	<div>
		<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCqTkK7mAsOZJvt9_LdcSP-71TabfX5-Lg'></script>
		<div style='overflow:hidden;'>
		  <div id='GGmap' style='height:500px;width:100%;'></div>
		</div>
		<script type='text/javascript'>
		  function init_map(){
		    var myMap = {
		      zoom:14,
		      center:new google.maps.LatLng(21.035852,105.818899),
		      mapTypeId: google.maps.MapTypeId.ROADMAP};
		      map = new google.maps.Map(document.getElementById('GGmap'), myMap);
		      marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(21.035852,105.818899)});
		      info = new google.maps.InfoWindow({content:'<strong>APTECH-APROTRAIN</strong><br>285 Doi Can <br/>Ba Dinh, Hanoi, Vietnam<br/>'});
		      google.maps.event.addListener(marker, 'click',
		        function(){
		          info.open(map,marker);
		        });
		      info.open(map,marker);}
		      google.maps.event.addDomListener(window, 'load', init_map);
		</script>
	</div>
	<div class="footer_end">
		<div class="container-fluid">
			<h3 style="font-weight: bold ; font-size: 50px;text-align: center;">Sea Life Tourism</h3>
		</div>
	</div>
</body>
</html>