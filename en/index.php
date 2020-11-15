<?php include 'header.php';?>
		
<!--<div class="container">-->
	<div id="main" class="row">
		<section id="content" class="col-sm-8">
		<div class="page-header">
				<h3>Purchase project</h3>
			</div>

			<p>A property purchase project as the CCMD head office.</p>

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
						<img class="img-responsive" src="../images/batisse1.jpg" alt="Entrés principale">
						<div class="carousel-caption">
						<h3>CCMD main entrance</h3>
						<p>6000 sf on two levels, basement & garage</p>
						</div>
					</div>

					<div class="item">
						<img class="img-responsive" src="../images/batisse2.jpg" alt="Réception">
						<div class="carousel-caption">
						<h3>Reception</h3>
						<p>Reception area</p>
						</div>
					</div>
					
					<div class="item">
						<img class="img-responsive" src="../images/batisse3.png" alt="Mosquée">
						<div class="carousel-caption">
						<h3></h3>
						<p>Prayer area</p>
						</div>
					</div>

					<div class="item">
						<img class="img-responsive" src="../images/batisse4.jpg" alt="1er étage">
						<div class="carousel-caption">
						<h3>1<sup>st</sup> floor</h3>
						<p>Arabic language school & library</p>
						</div>
					</div>

					<div class="item">
						<img class="img-responsive" src="../images/batisse5.jpg" alt="1er étage en travaux">
						<div class="carousel-caption">
						<h3>1<sup>st</sup> floor work in progress</h3>
						<p>Arabic language school classrooms</p>
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

				<h4>Payment status</h4>
				<div class="progress">
  					<div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" style="width:56%">
    				Paid ($150.000)
  					</div>
  					<div class="progress-bar progress-bar-info" role="progressbar" style="width:44%">
    				Remaining ($120.000)
  					</div>
				</div>

				<br>
				<div class="panel panel-default">
					<div class="panel-heading">The contribution methods</div>
  					<div class="panel-body">
  						<p><strong>By check:</strong></p>
						<p>Please make checks payable to CCMD</p>
						<p><strong>By bank transfer:</strong></p>
						<p>RBC Banque Royale <strong>01341 003 101 207 9</strong></p>
						<p>Caisse Desjardins <strong>90104 815 180 228 9</strong></p>
						<p><strong>Online:</strong></p>
						<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
						<input type="hidden" name="cmd" value="_s-xclick">
						<input type="hidden" name="hosted_button_id" value="TZ2CDP8EBZF5G">
						<input type="image" style="width:120px" src="https://www.paypalobjects.com/fr_CA/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - la solution de paiement en ligne la plus simple et la plus sécurisée !">
						<img alt="" border="0" src="https://www.paypalobjects.com/fr_CA/i/scr/pixel.gif" width="1" height="1">
					</form>
					</div>
				</div>
		</article>
		</section>

		<div id="sidebar" class="col-sm-4">
			<?php include 'sidebar.php';?>
		</div>
	</div>
<!--</div>-->
<?php include 'footer.php';?>