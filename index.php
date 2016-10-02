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
	
		<div class="overlay">
			<div class="preloader cssload-square">
				<div class="cssload-square-part cssload-square-green"></div>
				<div class="cssload-square-part cssload-square-pink"></div>
				<div class="cssload-square-blend"></div>
			</div>	
		</div>

		<div class="main-navbar navbar navbar-default navbar-fixed-top">
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
		    				<li><a href="#!page=index">Перейти на главную</a></li>
		    				<li><a href="#!page=aboutus">FAQ</a></li>
		    			</ul>

					    <ul class="nav navbar-nav navbar-right">
					        <li><a href="" data-target-modal="auth" data-trigger="openModal">Войти</a></li>
					    </ul>
					</div>
				    
				</div>
			</div>
		</div>

		<div class="remodal auth-wrapper" data-remodal-id="auth" data-remodal-options="hashTracking: false">
			<button data-remodal-action="close" class="remodal-close"></button>
			<div class="card card-container">
		        <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
		        <p id="profile-name" class="profile-name-card"></p>
		        <form class="form-signin">
		            <span id="reauth-email" class="reauth-email"></span>
		            <input type="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
		            <input type="password" id="inputPassword" class="form-control" placeholder="Пароль" required>
		            <div id="remember" class="checkbox">
		                <label>
		                    <input type="checkbox" value="remember-me"> Запомнить меня
		                </label>
		            </div>
		            <button class="btn btn-lg btn-success btn-block btn-signin" data-action="login" type="submit">Войти</button>
		            <button class="btn btn-lg btn-primary btn-block btn-signin" data-action="register" type="submit">Регистрация</button>
		        </form><!-- /form -->
		       <!--  <a href="#" class="forgot-password">
		            Забыли пароль?
		        </a> -->
		    </div>
		</div>

		<div class="container content-box"></div>

		<div class="footer text-center" style="display: none">
			Social Approver - <?php echo date('Y') ?>
		</div>
		
		<!-- polyfils -->
		<script src="js/polyfill/Object.keys.js"></script>

		<!-- librares -->
		<script src="js/libs/jQuery/jquery-2.2.4.min.js"></script>
		<script src="js/libs/jQuery/jquery.queryParameters.js"></script>
		<script src="js/libs/jQuery/jquery.uriAnchor.js"></script>

		<!-- classes -->
		<script src="js/classes/Page.js"></script>

		<script src="js/libs/others/bootstrap.min.js"></script>
		<script src="js/libs/others/remodal.js"></script>
		<script src="js/libs/others/mustache.min.js"></script>
		
		<!-- custom modules -->
		<script src="js/custom/app.js"></script>
		<script src="js/custom/app.data.js"></script>
		<script src="js/custom/app.modules.js"></script>
		<script src="js/custom/app.modules.vk.js"></script>

		<!-- pages -->
		<script src="js/custom/app.pages.js"></script>
		<script src="js/custom/app.pages.index.js"></script>
		<script src="js/custom/app.pages.aboutus.js"></script>
		<script src="js/custom/app.pages.feedback.js"></script>
		<script src="js/custom/app.pages.new_project.js"></script>
		<script src="js/custom/app.pages.profile.js"></script>
		<script src="js/custom/app.pages.projects.js"></script>
		<script src="js/custom/app.pages.results.js"></script>
		<script src="js/custom/app.pages.settings.js"></script>
		<script src="js/custom/app.pages.stats.js"></script>
		<script src="js/custom/app.pages.dashboard.js"></script>

		<script>
			app.start();
		</script>


	</body>
</html>