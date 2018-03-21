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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="SeaLifeTourism.css">
	<style type="text/css">
		.box_form{
			width:80%;
			margin:auto;
		}
		.abc p{
			margin-top:50px!important;
		}
	</style>
</head>
<body style="background-image: none;">

	<!-- menu_bar -->
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid" id="menu">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>                        
		      </button>
		      <img src="photo_imge/logo.jpg" alt="Sea Life Tourism" style="height:80px ; width :150px">
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
		        	<a href="booking.php">
		        		<span>Booking</span>
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
	<br/>	

	<div class="container">
		<div class="row" style="background-color: #E8F6F6;min-height: 200px;border-radius: 15px">
			<div class="col-sm-4 abc">
				<p style="display: table;margin: auto">
					<i class="fa fa-map-marker" style="font-size: 40px; color: #c00; text-align: center;"></i>Aptech-Aprotrain<br><strong>285 - Đội Cấn - Ba Đình Hà Nội</strong>
					<span></span>
				</p>
			</div>
			<div class="col-sm-4 abc">
				<p style="display: table;margin: auto">
					<i class="fa fa-phone" style="font-size: 40px; color: #0c0; text-align: center;"></i>&nbsp; Phone Number<br><a href="tel:0974040625"><span style="font-size: 18px; font-weight: bold;">+84 974 040 625</span></a>
					<span></span>
				</p>
			</div>
			<div class="col-sm-4 abc">
				<p style="display: table;margin: auto">
				 	<i class="fa fa-envelope" style="font-size: 40px; color: #fc0; text-align:  center;"> </i> &nbsp;
					 Email<br><span style="font-size: 18px; font-weight: bold;"></span><a href="mailto:quangtungg29@gmail.com"><span style="font-size: 18px; font-weight: bold;">Sea_Life_Tourism.com@gmail.com</span>
					</a>
				</p>
			</div>
		</div>
	</div>

	<div class="container-fluid" style="background-color:white; padding: 10px 0 10px 0 ; color: black;width: 100%">
		<div class="row" style="width: 100%;margin:auto">
			<div class="col-sm-3"></div>
			<div class="col-sm-6" style="background-color: #B0E0E6;padding: 20px 0 20px 0 ;border-radius: 10px">
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
					<button type="submit" class="btn btn-info" style="width: 100%;color: white;" id="submit">Gửi cho chúng tôi</button>					
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
			<h3 style="font-weight: normal ; font-size: 40px;text-align: center;">Sea Life Tourism</h3>
			<div class="row">
				<div class="col-sm-4">
					<p style="text-align: center;">Cảm ơn mọi người đã quan tâm đến Sea Life Tourism</p>
				</div>
				<div class="col-sm-4 icon-footer">
					<a href="" class="fa fa-facebook-square" style="color: #4267b2" aria-hidden="true"></a>
					<a href="#instagram" style="color: #FFDAB9" class="fa fa-instagram" aria-hidden="true"></a>
					<a href="#twitter" style="color: #1da1f2" class="fa fa-twitter-square" aria-hidden="true"></a>
					<a href="#google"  style="color: #db4437" class="fa fa-google-plus-square" aria-hidden="true"></a>
				</div>
				<div class="col-sm-4">
					<p>
						<i class="fa fa-phone" style="color: #0c0;font-size: 30px;"></i>
						<span>+84 974 040 625</span>
					</p>
					<p>
						<i class="fa fa-envelope" style="color: #fc0;font-size: 25px;"></i>
						<span>Sea_Life_Tourism.com@gmail.com</span>
					</p>
					<p>
						<i class="fa fa-map-marker" style="color: red;font-size: 30px;"></i>
						<span>Aptech-Aprotrain<br>285 - Đội Cấn - Ba Đình - Hà Nội</span>
					</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>