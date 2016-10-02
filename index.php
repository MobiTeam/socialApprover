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
		    				<li><a href="#!page=aboutus">О нас</a></li>
		    				<li><a href="#!page=index">FAQ</a></li>
		    				<li><a href="#!page=dashboard">Dashboard</a></li>
		    			</ul>

					    <ul class="nav navbar-nav navbar-right">
					        <li><a href="#auth">Войти</a></li>
					    </ul>
					</div>
				    
				</div>
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
		<script src="js/custom/app.pages.dashboard.js"></script>
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