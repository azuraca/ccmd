<?php include 'header.php';?>

<div id="main" class="row">
	<section id="content" class="col-sm-8">
		<div class="page-header">
			<h2>Projet d'achat</h2>
		</div>

		<article>
		<p>Projet d’achat d’un bien immobilier siège du CCMD.</p>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
	<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	<li data-target="#myCarousel" data-slide-to="1"></li>
	<li data-target="#myCarousel" data-slide-to="2"></li>
	<li data-target="#myCarousel" data-slide-to="3"></li>
	<li data-target="#myCarousel" data-slide-to="4"></li>
	</ol>

	<!-- Wrapper for slides -->
	<div class="carousel-inner">

	<div class="item active">
		<img class="img-responsive" src="images/batisse1.jpg" alt="Entrés principale">
		<div class="carousel-caption">
		<h3>CCMD entrée principale</h3>
		<p>6000 pi2 sur deux étages, sous-sol & garage</p>
		</div>
	</div>

	<div class="item">
		<img class="img-responsive" src="images/batisse2.jpg" alt="Réception">
		<div class="carousel-caption">
		<h3>Réception</h3>
		<p>Réception et salle d'attente</p>
		</div>
	</div>
	
	<div class="item">
		<img class="img-responsive" src="images/batisse3.png" alt="Mosquée">
		<div class="carousel-caption">
		<h3></h3>
		<p>Salle de prière</p>
		</div>
	</div>

	<div class="item">
		<img class="img-responsive" src="images/batisse4.jpg" alt="1er étage">
		<div class="carousel-caption">
		<h3>1<sup>er</sup> étage</h3>
		<p>École d'arabe et bibliothèque</p>
		</div>
	</div>

	<div class="item">
		<img class="img-responsive" src="images/batisse5.jpg" alt="1er étage en travaux">
		<div class="carousel-caption">
		<h3>1<sup>er</sup> étage en travaux</h3>
		<p>Salles de l'école d'arabe</p>
		</div>
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
<br>
<h4>État de paiement</h4>
<div class="progress">
	  <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" style="width:56%">
	Payé ($150.000)
	  </div>
	  <div class="progress-bar progress-bar-info" role="progressbar" style="width:44%">
	Reste à payer ($120.000)
	  </div>
</div>
<br>
<div class="panel panel-default">
	<div class="panel-heading">Modes de contribution</div>
	  <div class="panel-body">
		  <p><strong>Par chèque:</strong></p>
		<p>Libeller votre chèque au nom du CCMD</p>
		<p><strong>Par virement:</strong></p>
		<p>RBC Banque Royale <strong>01341 003 101 207 9</strong></p>
		<p>Caisse Desjardins <strong>90104 815 180 228 9</strong></p>
		<p><strong>Par paiement électronique:</strong></p>
		<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
		<input type="hidden" name="cmd" value="_s-xclick">
		<input type="hidden" name="hosted_button_id" value="TZ2CDP8EBZF5G">
		<input type="image" style="width:120px" src="https://www.paypalobjects.com/fr_CA/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - la solution de paiement en ligne la plus simple et la plus sécurisée !">
		<img alt="" border="0" src="https://www.paypalobjects.com/fr_CA/i/scr/pixel.gif" width="1" height="1">
	</form>
	</div>
</div>
		</article>

	</section><!-- end of #content -->

	<div id="sidebar" class="col-sm-4">
		<?php include 'sidebar.php';?>
	</div>
</div> <!-- main -->

<?php include 'footer.php';?>