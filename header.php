<!doctype html>
<html lang="fr-CA">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">

	<title>Centre Communautaire Musulman de Drummondville</title>

	<link rel="stylesheet" href="css/styles.css">
	<link href='https://fonts.googleapis.com/css?family=Megrim' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Vollkorn:400,700' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>
	<script src="js/PrayTimes.js"></script>
	<script src="js/HijriDate.js"></script>
</head>

<body>
	<header class="container-fluid text-primary bg-light bg-gradient">
		<div class="row">
			<div class="col-sm-8">
				<div id="arabic_title">المركز الاجتماعي الإسلامي لدرومندفيل</div>
				<div id="french_title">Centre Communautaire Musulman de Drummondville</div>
			</div>
			<div id="ccmd_infos" class="col-sm-4">
				<div>127, 12e Avenue, Drummondville, Québec, J2B 2X4</div>
				<div>ccmd.drummondville@gmail.com</div>
				<div>(819) 473-8550</div>
				<div style="float:right">
					<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
						<input type="hidden" name="cmd" value="_s-xclick">
						<input type="hidden" name="hosted_button_id" value="TZ2CDP8EBZF5G">
						<input type="image" style="width:100px" src="images/paypal.png" border="0" name="submit" alt="PayPal - la solution de paiement en ligne la plus simple et la plus sécurisée !">
						<img alt="" border="0" src="https://www.paypalobjects.com/fr_CA/i/scr/pixel.gif" width="1" height="1">
					</form>
				</div>
			</div>
	</header>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid">
			<a class="navbar-brand" href="index.php"><i class="fas fa-mosque"></i>&nbsp;&nbsp;&nbsp;CCMD</a>
			<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myNavbar">
				<span class="navbar-toggler-icon"></span>
			</button>
			<a href="en/index.php" class="btn btn-info" role="button" style="border-radius: 50%">EN</a>

			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="navbar-nav mr-auto mb-2 mb-lg-0">

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
							Le Centre
						</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="association.php">Qui sommes nous ?</a></li>
							<li><a class="dropdown-item" href="nous_joindre.php">Nous joindre</a></li>
							<li><a class="dropdown-item" href="liens_utiles.php">Liens utiles</a></li>
						</ul>
					</li>

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">
							Percepts
						</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="coran.php">Coran</a></li>
							<li><a class="dropdown-item" href="perles_prophetiques.php">Perles prophétiques</a></li>
						</ul>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="projet_d_achat.php">Projet d'achat</a>
					</li>
					
				</ul>
			</div>

		</div>
	</nav>

	<div id="wrapper" class="container">
