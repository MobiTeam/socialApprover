<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Social Approver - главная страница</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/remodal.css">
	<link rel="stylesheet" type="text/css" href="css/remodal-default-theme.css">
	<link rel="stylesheet" type="text/css" href="css/app.css">
</head>
<body>
	
	<div class="main-navbar navbar navbar-default navbar-static-top">
		<div class="container">
			<div class="container-fluid">
			   	<div class="navbar-header">
			    	<a class="navbar-brand" href="#">Social Approver</a>
			    </div>

			    <ul class="nav navbar-nav">
        			<li class="active"><a href="#">О нас</a></li>
        			<li><a href="#">FAQ</a></li>
        		</ul>

			    <ul class="nav navbar-nav navbar-right">
			        <li><a href="#">Войти</a></li>
			    </ul>
			</div>
		</div>
	</div>

	<div class="container">
		
		
		<h2>Сервис кросспостинга в социальные сети</h2>
		<hr>
		<div class="content-area">
			
			<div class="row">
				<div class="col-xs-12 col-md-6 col-lg-4">
					
					<img class="adapt-img" src="img/megaphone.jpg" alt="" title="">

					<p>Удобная платформа для обсуждения и объявления.</p>
				</div>
				<div class="col-xs-12 col-md-6 col-lg-4">
	
					<img class="adapt-img" src="img/communicate.jpg" alt="" title="">

					<p>Коммуницируйте с людьми из различных социальных сетей.</p>
				</div>
				<div class="col-xs-12 col-md-6 col-lg-4">
				
					<img class="adapt-img" src="img/statistic.jpg" alt="" title="">	

					<p>Модуль статистики, который поможет вам определиться с выбором.</p>
				</div>
			</div>
		</div>
		<a href="#modal">Call the modal with data-remodal-id="modal"</a>
		<hr>

	</div>

	<div class="footer text-center">
		Social Approver - <?php echo date('Y') ?>
	</div>
	
	<div class="remodal" data-remodal-id="modal">
	  <button data-remodal-action="close" class="remodal-close"></button>
	  <h1>Remodal</h1>
	  <p>
	    Responsive, lightweight, fast, synchronized with CSS animations, fully customizable modal window plugin with declarative configuration and hash tracking.
	  </p>
	  <br>
	  <button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
	  <button data-remodal-action="confirm" class="remodal-confirm">OK</button>
	</div>

	<script src="js/jquery-2.2.4.min.js"></script>

	<script src="js/bootstrap.min.js"></script>
	<script src="js/remodal.js"></script>
</body>
</html>