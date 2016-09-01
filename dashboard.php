<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Social Approver - главная страница</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/remodal.css">
	<link rel="stylesheet" type="text/css" href="css/remodal-default-theme.css">
	<link rel="stylesheet" type="text/css" href="css/app.css">
</head>
<body>

	<div class="main-navbar navbar navbar-default navbar-static-top">
		<div class="container main-navbar-wrap">
			<div class="container-fluid">
			   	<div class="navbar-header">
			   	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-ul" aria-expanded="false">
	        		<span class="sr-only">Toggle navigation</span>
	        		<i class="material-icons">&#xE5D2;</i>
	        		
	      		</button>
			    	<a class="navbar-brand" href="#">Social Approver</a>
			    </div>

				<div class="navbar-ul collapse navbar-collapse">
					<ul class="nav navbar-nav">
	    				<li><a href="#">О нас</a></li>
	    				<li><a href="#">FAQ</a></li>
	    			</ul>

				    <ul class="nav navbar-nav navbar-right">
				        <li><a href="#auth">Войти</a></li>
				    </ul>
				</div>
			    
			</div>
		</div>
	</div>

	
	<div class="container">
		<h4>Личный кабинет пользователя <a href="">Петроченко Владислав</a></h4>
		<hr>
		<div class="content-area">			
			<div class="row">
				<div class="dashboard-item col-xs-12 col-md-6 col-lg-4">
					<div class="item-content">
						<i class="material-icons item-icon item-icon--blue">&#xE7FF;</i> Профиль пользователя
					</div>
				</div>

				<div class="dashboard-item col-xs-12 col-md-6 col-lg-4">
					<div class="item-content">
						<i class="material-icons item-icon item-icon--green">&#xE2C8;</i> Список проектов
					</div>
				</div>

				<div class="dashboard-item col-xs-12 col-md-6 col-lg-4">
					<div class="item-content">
						<i class="material-icons item-icon item-icon--orange">&#xE2CC;</i> Добавить новый проект
					</div>
				</div>

				<div class="dashboard-item col-xs-12 col-md-6 col-lg-4">
					<div class="item-content">
						<i class="material-icons item-icon item-icon--brown">&#xE8B8;</i> Настройки
					</div>
				</div>

				<div class="dashboard-item col-xs-12 col-md-6 col-lg-4">
					<div class="item-content">
						<i class="material-icons item-icon item-icon--red">&#xE922;</i> Статистика
					</div>
				</div>

				<div class="dashboard-item col-xs-12 col-md-6 col-lg-4">
					<div class="item-content">
						<i class="material-icons item-icon item-icon--yellow">&#xE85C;</i> Результаты
					</div>
				</div>

				<div class="dashboard-item col-xs-12 col-md-6 col-lg-4">
					<div class="item-content">
						<i class="material-icons item-icon">&#xE0E1;</i> Обратная связь
					</div>
				</div>
				
			</div>
		</div>
		<hr>

	</div>

	<div class="footer text-center">
		Social Approver - <?php echo date('Y') ?>
	</div>
	
	<div class="remodal" data-remodal-id="auth">
		<button data-remodal-action="close" class="remodal-close"></button>
		<h3>Авторизация</h3>

		<label for="login">Логин</label>
		<div class="form-group">
			<input id="login" class="form-control" name="login" type="text" placeholder="Введите логин">
		</div>

		<label for="password">Пароль</label>
		<div class="form-group">
			<input id="password" class="form-control" name="password" type="password" placeholder="Введите пароль">
		</div>

	

	  <br>
	  <button data-remodal-action="cancel" class="remodal-cancel">Отмена</button>
	  <button data-remodal-action="confirm" class="remodal-confirm">Войти</button>
	</div>

	<script src="js/jquery-2.2.4.min.js"></script>

	<script src="js/bootstrap.min.js"></script>
	<script src="js/remodal.js"></script>
</body>
</html>