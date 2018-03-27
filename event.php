<!DOCTYPE html>
<html>
<head>
	<title>Sea Life Tourism</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="SeaLifeTourism.css">
	<style type="text/css">
		#text2 {
			text-align: center;
			font-family: Book Antiqua;
			font-weight: bold;
			font-size: 32px;
			color: #9cbcd6
		}
		.container-fluid {
			    position: relative;

			   
			}

		.image {
			  opacity: 1;
			  display: block;
			  width: 100%;
			  height: 350px;
			  transition: .5s ease;
			  backface-visibility: hidden;
}
	

		.middle {
		  transition: .5s ease;
		  opacity: 0;
		  position: absolute;
		  top: 50%;
		  left: 50%;
		  transform: translate(-50%, -50%);
		  -ms-transform: translate(-50%, -50%)
		}
		

		.image:hover {
		  opacity: 0.5;
		}

 		.middle:hover{
 		 opacity: 1;

} 


		.text_event {
		  background-color: #5bff79;
		  text-align: center;
		  color: #ff5f26;
		  font-size: 18px;
		  border-radius: 10px;
		  padding: 5px 5px
}
		#bug1 {
			margin:0;
		}
		#bug-wrapper1 {
		display: table;
		margin: auto;
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
		        	<a href="information.php">
		        		<span>Information</span>
		        	</a>
		        </li>
		        <li>
		        	<a href="event.php">
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
	<br><br><br>


	<div>
		<h3 id="text2">THỎA SỨC KHÁM PHÁ ĐẠI DƯƠNG MÊNH MÔNG TẠI SEA LIFE TOURISM</h3>
	</div>
	<br><br>

	<div class="container-fluid">
		
			<div class="col-sm-6">
				<a href="#">
					<img src="image/event1.jpg" class="image">
					<div class="middle">
						<div class="text_event">
							<i class="material-icons">add_alert</i><br>
							Sự kiện đặc biệt dành cho các bạn nhỏ dưới<br> 12 TUỔI !!!<br>
							<i class="material-icons">add_alert</i>
						</div>
					</div>
				</a>
			</div>

			<div class="col-sm-6">
				<a href="#">
					<img src="image/event2.jpg" class="image">
					<div class="middle">
						<div class="text_event">
							<span class="glyphicon glyphicon-alert"></span><br>
							Sự kiện chào hè lớn nhất trong năm <br>- Đừng nên bỏ lỡ <br>
							<span class="glyphicon glyphicon-alert"></span>
						</div>
					</div>
				</a>
			</div>
	</div><br><br>


	<div class="container-fluid">
		
			<div class="col-sm-6">
				<img src="image/event3.jpg" class="image">
				<div class="middle">
					<div class="text_event">
						<i class="material-icons">error</i><br>
						Chuyến phiêu lưu đại dương<br> DÀNH CHO GIA ĐÌNH !!!<br>
						<i class="material-icons">error</i>
					</div>
				</div>
			</div>

			<div class="col-sm-6">
				<img src="image/event4.jpg" class="image">
				<div class="middle">
					<div class="text_event">
						<i class="material-icons">add_box</i><br>
						Buổi trình diễn đặc sắc <br> ngoài trời của cá heo <br>
						<i class="material-icons">add_box</i>
					</div>
				</div>
			</div>
	</div><br><br>

		<div class="container-fluid">
		
			<div class="col-sm-6">
				<img src="image/event5.jpg" class="image">
				<div class="middle">
					<div class="text_event">
						<i class="material-icons">insert_emoticon</i><br>
						Chạm vào sinh vật biển sống <br>Các bé dám thử không ?<br>
						<i class="material-icons">insert_emoticon</i>
					</div>
				</div>
			</div>

			<div class="col-sm-6">
				<img src="image/event6.jpg" class="image">
				<div class="middle">
					<div class="text_event">
						<i class="material-icons">check_box</i><br>
						Cơ hội gặp những sinh vật biển <br> lớn nhất đại dương <br>
						<i class="material-icons">check_box</i>
					</div>
				</div>
			</div>
	</div><br><br>

	<div id="bug-wrapper1">
		<input id="bug1" type="submit" name="submit_event" value="Thêm dữ liệu" class="btn btn-danger">
	</div><br><br>

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

	<div class="go_up">
		<div class="thetop"><i class="fa fa-arrow-up"></i></div>
	</div>
	<script type="text/javascript">
		$(document).ready(function(){
			$(window).scroll(function(){
				if($(this).scrollTop() > 200 ){
					$('.go_up').fadeIn();
					} else {
						$('.go_up').fadeOut();
					}	
					
			});
			$('.go_up').click(function(){
				$("html,body").animate( { scrollTop:0}, 800)
			});
		});

	</script>
</body>
</html>