	
	</div>

	<div class="footer">© 2019 CCMD - Tous droits réservés</div>

  <script src="js/jquery-1.11.3.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="js/DateTime.js"></script>
	<script src="js/jquery.arctext.js"></script>
	<script>window.onload = greg_date('greg-date');</script>
	<script>
		$('#logo').arctext({radius: 200});
		$(document).ready(function(){
			$('[data-toggle="tooltip"]').tooltip();
			$("#salam").hide();
			$('.iframe').on('load', function () {
					$('.loader').hide();
			});
		});
		$("#croissant").click(function(){
			$("#croissant").fadeOut(1000, function(){
				$("#salam").fadeIn(1000, function(){
					$('html,body').animate({scrollTop:$("#wrapper").offset().top-50}, 1000, function(){
						$("#salam").hide();
						$("#croissant").show();
					});
				});
			});
		});
	</script>
</body>
</html>