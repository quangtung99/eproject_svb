<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sea Life Tourism</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="SeaLifeTourism.css">

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
	<div><br><br><br><br></div>

	<div class="container-fluid">
		<?php
			$connect = mysqli_connect('localhost', 'root','','eproject');
				if(isset($_REQUEST['id'])){
					$get_id = $_REQUEST['id'];
					$get_values = "SELECT * FROM post_event WHERE id='".$get_id."'";
					$value = mysqli_query($connect , $get_values);
					while ($record = mysqli_fetch_array($value , MYSQLI_ASSOC)) {
						echo '
							<div class="col-sm-8">
								<div class="panel panel-info">
									<div class="panel-heading" style="text-align: center;">
										<h3>'.$record['TITLE_EVENT1'].'</h3>
										<p>'.$record['TITLE_EVENT2'].'</p>
									</div>

									<div class="panel-body">
										<img src="'.$record['IMG_EVENT'].'" alt="" style="width:100%;height: auto;">
									</div>

									<div class="panel-footer">
										<center><p><b>'.$record['CONTENT_EVENT1'].'</p></b></center>
										<p>'.$record['CONTENT_EVENT2'].'</p>
									</div>
								</div>
							</div>';
							}
								}
			mysqli_close($connect);

							?>				 	

		<div class="col-sm-4">
			<div class="panel panel-danger">
				<div class="panel-heading">
					<h3 style="text-align: center; padding-top: 19px; padding-bottom: 18px">GIÁ VÉ</h3>
					<h4><center>Price : 
						<?php
							$connect1 = mysqli_connect('localhost', 'root','','eproject');
							if(isset($_REQUEST['id'])) {
							$get_id = $_REQUEST['id'];
							$get_value = "SELECT * FROM post_event ";
							$value = mysqli_query($connect1 , $get_value);
								while ($record = mysqli_fetch_array($value , MYSQLI_ASSOC)) {
								echo	' <span>'.'$'.$record['PRICE'].'</span>
									 ';
									}

						}
						mysqli_close($connect1);
						?>
					</center></h4>
				</div>
				<div class="panel-body">
					<div class="form-group has-success has-feedback">
					    <label class="col-sm-4 control-label">Số lượng</label>
					    <div class="col-sm-8">
					    	<input type="text" class="form-control" placeholder="Giá vé người lớn : 45k/ng">
					    </div>
					 </div>
				</div>
				<div class="panel-footer" style="padding-left: 143px">
					<input id="button_event_1" type="button" name="" value="Đặt ngay" class="btn btn-success">
				</div>
			</div>
		</div>

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