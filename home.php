<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sea Life Tourism</title>
	<!-- link boostrap -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="SeaLifeTourism.css">

</head>
<body style="background-image: none;">
	
	<!-- Menu_bar -->
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

	<!-- page information -->
	<div class="container" style="background-color: #B0E0E6;width: 100%;padding-bottom: 10px">
		<div style="padding-top: 30px;width: 80%;display: table;margin:auto">
			<h1 style="font-weight: bold; font-size: 60px;text-align: center;">Chào Mừng Bạn Đến Với Sea Life Tourism </h1><br>
			<h1 style="text-align: center;font-family: 'Andika';">Đến với Sea Life Tourism bạn sẽ thấy những điều thú vị về các loài sinh vật biển đa dạng và phong phú</h1>
		</div>
	</div>

	<!-- Slider -->
	<div>
		<div id="myCarousel" class="carousel slide" data-ride="carousel" style="width: 100%">		    

		    
		    <div class="carousel-inner" >

				<div class="item active">
					<img src="photo_imge/1.jpg" alt="Fish" style="width:100%;height: auto;">
				</div>

				<div class="item">
					<img src="photo_imge/2.jpg" alt="Fish" style="width:100%; height: auto;">		     
				</div>

				<div class="item">
					<img src="photo_imge/3.jpg" alt="Fish" style="width:100%;height: auto;">
				</div>

				<div class="item">
					<img src="photo_imge/4.jpg" alt="Fish" style="width:100%;height: auto;">
				</div>

		    </div>

		    <!-- Left and right controls -->
		    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
		      <span class="glyphicon glyphicon-chevron-left"></span>
		      <span class="sr-only">Previous</span>
		    </a>
		    <a class="right carousel-control" href="#myCarousel" data-slide="next">
		      <span class="glyphicon glyphicon-chevron-right"></span>
		      <span class="sr-only">Next</span>
		    </a>
	    </div>
	</div>

	<!-- list of organisms -->
	<div class="container-fluid">
		<h2 style="border-bottom: 1px solid #ccc!important; padding-bottom:20px!important;font-weight: bold">Organisms</h2>
		<div style="background-color:#87CEFF;border-radius: 15px;padding-top: 10px">
			<div class="container" style="margin-top: 30px ;">
				<div class="row">
					<div class="col-sm-3">
						<div class="thumbnail" > 
							<a href="dolphin.php" target="_self"> <!-- nhay sang trang khac -->
								<span class="name_img">Dolphin</span>
								<img src="photo_imge/imge_1.jpg" alt="">
							</a>
						</div>
					</div>

					<div class="col-sm-3">
						<div class="thumbnail"> 
							<a href="WhiteShark.php" target="_self">
								<span class="name_img">White Shark</span>
								<img src="photo_imge/imge_2.jpg" alt="">
							</a>
						</div>
					</div>

					<div class="col-sm-3">
						<div class="thumbnail"> 
							<a href="Shark.php" target="_self">
								<span class="name_img">Shark</span>
								<img src="photo_imge/imge_3.jpg" alt="">
							</a>
						</div>
					</div>

					<div class="col-sm-3">
						<div class="thumbnail"> 
							<a href="Whale.php" target="_self">
								<span class="name_img">Whale</span>
								<img src="photo_imge/imge_4.jpg" alt="">
							</a>
						</div>
					</div>
				</div>
			</div>

			<div class="container">
				<div class="row">
					<div class="col-sm-3">
						<div class="thumbnail"> 
							<a href="Sealion.php" s>
								<span class="name_img">Sea lion</span>
								<img src="photo_imge/imge_5.jpg" alt="">
							</a>
						</div>
					</div>

					<div class="col-sm-3">
						<div class="thumbnail"> 
							<a href="Lionfish.php" target="_self">
								<span class="name_img">Lion fish</span>
								<img src="photo_imge/imge_6.jpg" alt="">
							</a>
						</div>
					</div>

					<div class="col-sm-3">
						<div class="thumbnail"> 
							<a href="stonefish.php" target="_self">
								<span class="name_img">Stone Fish</span>
								<img src="photo_imge/imge_7.jpg" alt="">
							</a>
						</div>
					</div>

					<div class="col-sm-3">
						<div class="thumbnail"> 
							<a href="Seasnake.php" target="_self">
								<span class="name_img">Sea snake</span>
								<img src="photo_imge/imge_8.jpg" alt="">
							</a>
						</div>
					</div>
				</div>
			</div>
			<a href="" style="display: table; margin:auto;">
			<button class="button" style="vertical-align:middle;"><span>Xem Thêm</span></button>
			</a><br>
		</div>
	</div>

	<!-- List of event -->
	<div class="container-fluid">
		<h2 style="border-bottom: 1px solid #ccc!important; padding-bottom:20px!important;font-weight: bold">Event</h2>
		<div class="container" style="margin-top: 30px">
			<div class="row">
				<div class="col-sm-3">
					<div class="thumbnail"> 
						<a href="" target="_self"> <!-- nhay sang trang khac -->
							<span class="name_img">a</span>
							<img src="photo_imge/imge_1.jpg" alt="">
						</a>
					</div>
				</div>

				<div class="col-sm-3">
					<div class="thumbnail"> 
						<a href="" target="_self">
							<span class="name_img">b</span>
							<img src="photo_imge/imge_2.jpg" alt="">
						</a>
					</div>
				</div>

				<div class="col-sm-3">
					<div class="thumbnail"> 
						<a href="" target="_self">
							<span class="name_img">c</span>
							<img src="photo_imge/imge_3.jpg" alt="">
						</a>
					</div>
				</div>

				<div class="col-sm-3">
					<div class="thumbnail"> 
						<a href="" target="_self">
							<span class="name_img">d</span>
							<img src="photo_imge/imge_4.jpg" alt="">
						</a>
					</div>
				</div>
			</div>
		</div>

		<a href="" style="display: table; margin:auto;">
			<button class="button" style="vertical-align:middle;"><span>Xem Thêm</span></button>
		</a><br>
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