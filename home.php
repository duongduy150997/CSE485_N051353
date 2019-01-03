<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Nội thất Durable </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style-home.css">	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	<script src="javascript/header.js"></script>
	<script src="javascript/add-to-cart.js"></script>

</head>
<body>
	<div>
		<div class="banner">
			<div class="logo show">
				<a href="../../home.php">DURABLE</a>				
			</div>
			<div class="bag-item show-bag">
				<a href="components/addtocart.html">
					<i class="fa fa-shopping-cart"></i>
					<span>0</span>
				</a>
			</div>
		</div>
		<div class="nav-bar">
			<div class="menu-icon">
				<a href="home.php">DURABLE</a>
				<i class="fa fa-bars fa-2x"></i>
			</div>
			<ul class="sub-menu">
				<li class="brand-dropdown">
					<span class="catalogue"><a class="brand-all" href="components/brands/brand.html"><i class="icon-navbar fa fa-star"></i>Thương hiệu</a></span>
					<ul class="drop-menu">
						<li><a href="components/brands/mercury/sofa.html">Mercury</a></li>
						<li><a href="components/brands/jupiter/sofa.html">Jupiter</a></li>
						<li><a href="components/brands/mars/sofa.html">Mars</a></li>
					</ul>
				</li>
				<li>
					<a class="catalogue" href="components/brands/rooms/living.html"><i class="icon-navbar fa fa-coffee"></i>Phòng khách</a>
				</li>
				<li>
					<a class="catalogue" href="components/brands/rooms/bedroom.html"><i class="icon-navbar fa fa-bed"></i>Phòng ngủ</a>
				</li>
				<li>
					<a class="catalogue" href="components/brands/rooms/office.html"><i class="icon-navbar fa fa-desktop"></i>Văn phòng </a>
				</li>	
				<li>
					<a class="catalogue" href="components/brands/rooms/kitchen.html"><i class="icon-navbar fa fa-utensils"></i>Phòng ăn</a>
				</li>
				<li>
					<a class="catalogue" href="components/brands/rooms/bathroom.html"><i class="icon-navbar fa fa-bath"></i>Phòng tắm</a>
				</li>
				<li class="brand-dropdown-1">
					<span class="catalogue"><i class="icon-navbar far fa-address-card"></i>Chúng tôi</span>
					<ul class="drop-menu-1">
						<li><a href="about-me.html">Giới thiệu về chúng tôi</a></li>
						<li><a href="contact-us.html">Liên hệ với chúng tôi</a></li>
					</ul>
				</li>						
			</ul>			
		</div>					
	</div>	
	<div id="demo" class="carousel slide" data-ride="carousel">
		<ul class="carousel-indicators">
			<li data-target="#demo" data-slide-to="0" class="active"></li>
			<li data-target="#demo" data-slide-to="1"></li>
			<li data-target="#demo" data-slide-to="2"></li>
		</ul>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="image/duy/duy5.jpg" alt="Los Angeles" width="1100" height="500">
				<div class="overlay"></div>
				<div class="carousel-caption">
					<h3>BẠN CÓ MUỐN ?</h3>
					<p>Tạo ra một ngôi nhà hạnh phúc cho bạn và gia đình</p>
				</div>   
			</div>
			<div class="carousel-item">
				<img src="image/duy/duy9.jpg" alt="Chicago" width="1100" height="500">
				<div class="overlay"></div>
				<div class="carousel-caption">
				    <h3>GÍA CẢ HẤP DẪN</h3>
					<p>Phù hợp điều kiện từng gia đình</p>
				</div>   
			</div>
			<div class="carousel-item">
				<img src="image/duy/duy10.jpg" alt="New York" width="1100" height="500">	      
				<div class="overlay"></div>
				<div class="carousel-caption">
					<h3>TRANG ĐIỂM CHO NGÔI NHÀ</h3>
					<p>Hãy đến với cửa hàng của chúng tôi</p>
				</div>   
			</div>
		</div>
		<a class="carousel-control-prev" href="#demo" data-slide="prev">
		<span class="carousel-control-prev-icon"></span>
		</a>
		<a class="carousel-control-next" href="#demo" data-slide="next">
		<span class="carousel-control-next-icon"></span>
		</a>
	</div>
	<div class="container about-us">
		<div class="row padding20px">
			<div class="col-xl-4 col-sm-12 show-up">
				<div class="image-about">
					<img src="image/duy/duy6.jpg" class="img-radius">
				</div>
				<h2>CHẤT LƯỢNG CAO</h2>
				<div class="gachngang"></div>
				<p>Giám sát liên tục giai đoạn sản xuất và kiểm tra cuối cùng trước khi giao cho khách hàng đảm bảo rằng mỗi sản phẩm là một sản phẩm tuyệt vời.</p>
			</div>
			<div class="col-xl-4 col-sm-12 show-up">
				<div class="image-about">
					<img src="image/duy/duy7.jpg" class="img-radius">
				</div>
				<h2>THIẾT KẾ HIỆN ĐẠI</h2>
				<div class="gachngang"></div>
				<p>Với ý tưởng tốt hơn và tốt hơn, để mọi người có thể thưởng thức. Giá trị sản phẩm ngày càng tăng, không chỉ là một mặt hàng thời trang.</p>
			</div>
			<div class="col-xl-4 col-sm-12 show-up">
				<div class="image-about">
					<img src="image/duy/duy8.jpg" class="img-radius">
				</div>
				<h2>TỐT HƠN MỖI NGÀY</h2>
				<div class="gachngang"></div>
				<p>Mỗi ngày chúng tôi cố gắng cải thiện một chút, muốn thông qua từng thay đổi nhỏ đó, giúp mọi người có một cuộc sống tốt hơn.</p>
			</div>
		</div>		
	</div>
	<div class="content">
		<div class="room-show">
			<div class="row">
				<div class="col-xl-6 col-sm-12 " style=" padding-right: 2px; padding-left: 0;padding-top: 4px;">
					<div class="parent">
						<div class="living-room child">
							<h1 class="text-banner">Phòng khách</h1>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-sm-12" style="padding-left: 2px; padding-right: 0;padding-top: 4px;">
					<div class="parent">
						<div class="bed-room child">
							<h1 class="text-banner">Phòng ngủ</h1>
						</div>
					</div>
				</div>
			</div>
			<div class="row"">
				<div class="col-xl-6 col-sm-12" style=" padding-right: 2px; padding-left: 0;padding-top: 4px;">
					<div class="parent">
						<div class="office child">
							<h1 class="text-banner">Văn phòng</h1>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-sm-6" style=" padding-right: 2px;padding-left: 2px;padding-top: 4px;">
					<div class="parent">
						<div class="dining-room child">
							<h1 class="text-banner">Phòng bếp</h1>
						</div>					
					</div>
				</div>
				<div class="col-xl-3 col-sm-6" style="padding-left: 2px; padding-right: 0;padding-top: 4px;"> 
					<div class="parent">
						<div class="bathroom child">
							<h1 class="text-banner">Phòng tắm</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="go-top">
		<a href="#">
			<i class="fa fa-angle-up" aria-hidden="true"></i>
		</a>
	</div>	
	<div class="about-us" style="background-color: #444444; padding:50px 0; ">
		<h3 class="text-center" style="color: #fff;">THƯƠNG HIỆU HÀNG ĐẦU QUỐC GIA</h3>
		<div class="gachngang" style="width: 200px; border-color: #63AA9C;"></div>
		<div class="container row">
			<div class="col-xl-3 col-sm-6 show-up">
				<div class="image-about">
					<img src="image/brands/mercury.jpg" class="img-brands">
				</div>
			</div>
			<div class="col-xl-3 col-sm-6 show-up">
				<div class="image-about">
					<img src="image/brands/jupiter.jpg" class="img-brands">
				</div>
			</div>
			<div class="col-xl-3 col-sm-6 show-up">
				<div class="image-about">
					<img src="image/brands/mars.jpg" class="img-brands">
				</div>
			</div>
			<div class="col-xl-3 col-sm-6 show-up">
				<div class="image-about">
					<img src="image/brands/ALBERTA.jpg" class="img-brands"></a>
				</div>
			</div>
		</div>
		<div class="container row">
			<div class="col-xl-3 col-sm-6 show-up">
				<div class="image-about">
					<img src="image/brands/bb-italia-logo.jpg" class="img-brands">
				</div>
			</div>
			<div class="col-xl-3 col-sm-6 show-up">
				<div class="image-about">
					<img src="image/brands/CASSINA.jpg" class="img-brands">
				</div>
			</div>
			<div class="col-xl-3 col-sm-6 show-up">
				<div class="image-about">
					<img src="image/brands/molteni-c-logo.jpg" class="img-brands">
				</div>
			</div>
			<div class="col-xl-3 col-sm-6 show-up">
				<div class="image-about">
					<img src="image/brands/NATUZZI.jpg" class="img-brands">
				</div>
			</div>
		</div>
		<button class="btn btn-dark seeallbrands" onclick="window.location.href='components/brands/brand.html'">Xem tất cả các thương hiệu</button>
	</div>
	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="col-xl-3 col-sm-6">
					<div class="footer-content">
						<h6>Phòng</h6>
						<ul>
							<li><a href="components/brands/rooms/living.html" style="color: #6b6b6b; ">Phòng khách</a></li>
							<li><a href="components/brands/rooms/bedroom.html" style="color: #6b6b6b; ">Phòng ngủ</a></li>
							<li><a href="components/brands/rooms/office.html" style="color: #6b6b6b; ">Văn phòng</a></li>
							<li><a href="components/brands/rooms/kitchen.html" style="color: #6b6b6b; ">Phòng bếp</a></li>
							<li><a href="components/brands/rooms/bathroom.html" style="color: #6b6b6b; ">Phòng tắm</a></li>
						</ul>
					</div>
				</div>
				<div class="col-xl-3 col-sm-6">
					<div class="footer-content">
						<h6>Thương hiệu</h6>
						<ul>
							<li><a style="color: #6b6b6b;" href="components/brands/mercury/sofa.html">Mercury</a></li>
							<li><a style="color: #6b6b6b; " href="components/brands/jupiter/sofa.html">Jupiter</a></li>
							<li><a style="color: #6b6b6b; " href="components/brands/mars/sofa.html">Mars</a></li>
						</ul>
					</div>
				</div>
				<div class="col-xl-3 col-sm-6">
					<div class="footer-content">
						<a href="contact-us.html" class="contact-us" style="color: #6b6b6b;" class="">Liên hệ với chũng tôi</a>
						<ul>
							<li style="color: #6b6b6b; padding: 10px 0;">9:00am – 19:00pm, Monday – Sunday</li>			
							<li><a style="color: #6b6b6b;" target="_blank" href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3731.3957427545065!2d105.765879714219!3d20.734748086158344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313435584e0d60fb%3A0x54072aa5012803f2!2zVHJ1bmcgdMOibSBUaMawxqFuZyBt4bqhaSBWw6JuIMSQw6xuaA!5e0!3m2!1svi!2s!4v1545494232502">TTTM Thị Trấn Vân Đình, Ứng Hòa , Hà Nội</a></li>
							<li><a style="color: #6b6b6b; " href="mailto:duongmanhduy.sla@gmail.com">duongmanhduy.sla@gmail.com</a></li>
							<li><a style="color: #6b6b6b; " href="tel:0123456789">0123456789</a></li>
						</ul>
					</div>
				</div>
				<div class="col-xl-3 col-sm-6">
					<div class="footer-content">
						<h6>Theo dõi</h6>
						<a href="" class="footer-icon"><i class="fab fa-facebook-square"></i></a>
						<a href="" class="footer-icon"><i class="fab fa-instagram"></i></a>
						<a href="" class="footer-icon"><i class="fab fa-google-plus-square"></i></a>
						<a href="" class="footer-icon"><i class="fab fa-twitter-square"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="reserved">
		<div class="container">
			©2018 DURABLE FURNITURES COMPANY. All rights reserved.
		</div>
	</div>	
</body>
</html>