<div id="horaires-priere" class="panel panel-default">
	<div class="panel-heading">
		<div id="greg-date"></div>
		<div id="hijri-date">
			<script type="text/javascript">
				document.write(HijriDate(0));
			</script>
		</div>
	</div>
	<div class="panel-body">
		<table class="table">
			<thead>
				<tr>
					<th>Prière</th>
					<th style="text-align:right">Horaire</th>
					<th style="text-align:right">Iqama</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><div id="fadjr_text"></div></td>
					<td><div id="fadjr_time" style="text-align:right"></div></td>
					<td><div style="text-align:right">+30 min</div></td>
				</tr>
				<tr>
					<td><div id="chourouq_text"></div></td>
					<td><div id="chourouq_time" style="text-align:right"></div></td>
					<td><div style="text-align:right"></div></td>
				</tr>
				<tr>
					<td><div id="dohr_text"></div></td>
					<td><div id="dohr_time" style="text-align:right"></div></td>
					<td><div style="text-align:right">+10 min</div></td>
				</tr>
				<tr>
					<td><div id="asr_text"></div></td>
					<td><div id="asr_time" style="text-align:right"></div></td>
					<td><div style="text-align:right">+10 min</div></td>
				</tr>
				<tr>
					<td><div id="maghrib_text"></div></td>
					<td><div id="maghrib_time" style="text-align:right"></div></td>
					<td><div style="text-align:right">+5 min</div></td>
				</tr>
				<tr>
					<td><div id="icha_text"></div></td>
					<td><div id="icha_time" style="text-align:right"></div></td>
					<td><div style="text-align:right">+15 min</div></td>
				</tr>
				<tr>
      				<td>Prière du vendredi</td>
      				<td><strong>12:30</strong></td>
    			</tr>
			</tbody>
		</table>
	</div>
</div>

<!--
<div class="panel panel-default">
	<div class="panel-heading">Prière du vendredi</div>
  	<div class="panel-body">
  		<p>La prière du vendredi est fixée à <strong>12h30</strong>.</p>
	</div>
</div>

<div class="panel panel-default">
  	<div class="panel-heading">Cours de langue Arabe de fin de semaine</div>
	<div class="panel-body">
		<p>Inscriptions en cours pour l'année 2018-2019.<br>
		Pour toute demande d'information ou inscription, veuillez envoyer un courriel à ccmd.drummondville@gmail.com, en indiquant les noms et dates de naissance des enfants.</p>
	</div>
</div>

<div class="panel panel-default">
  	<div class="panel-heading">Dons</div>
  	<div class="panel-body">
		<p>
			<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
				<input type="hidden" name="cmd" value="_s-xclick">
				<input type="hidden" name="hosted_button_id" value="TZ2CDP8EBZF5G">
				<input type="image" src="https://www.paypalobjects.com/fr_CA/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - la solution de paiement en ligne la plus simple et la plus sécurisée !">
				<img alt="" border="0" src="https://www.paypalobjects.com/fr_CA/i/scr/pixel.gif" width="1" height="1">
			</form>
		</p>
	</div

<div class="panel panel-default">
	<div class="panel-heading">
		Projet de Centre Communautaire Musulman à Drummondville
	</div>
	<div class="panel-body">
		<p>
			Dans le but d'acheter une bâtisse pour le Centre Communautaire Musulman dans la ville de Drummondville,
			et pour mieux servir la communauté musulmane locale et toute personne de passage,
			nous faisons appel à votre générosité.<br />
			Numéro de compte Caisse Desjardins: <b>90104 815 180 228 9</b>.<br /><br />
			<u>Documents à télécharger:</u><br />
			<a href="Projet d'achat CCMD - fr.pdf">Projet d'achat (Français)</a><br />
			<a href="Projet d'achat CCMD - ar.pdf">Projet d'achat (Arabe)</a><br />
			<a href="Bulletin de don - fr.pdf">Bulletin de don (Français)</a><br />
			<a href="Bulletin de don - ar.pdf">Bulletin de don (Arabe)</a><br />
		</p>
	</div>
</div>
			-->

<div class="panel panel-default">
	<div class="panel-heading">
		Météo
	</div>
	<div class="panel-body">
		<a href="http://www.accuweather.com/fr/ca/drummondville/j2c/weather-forecast/50016" class="aw-widget-legal">
			<!--By accessing and/or using this code snippet, you agree to AccuWeather’s terms and conditions (in English) which can be found at http://www.accuweather.com/en/free-weather-widgets/terms and AccuWeather’s Privacy Statement (in English) which can be found at http://www.accuweather.com/en/privacy.-->
		</a><div id="awcc1444747035088" class="aw-widget-current" data-locationkey="50016" data-unit="c" data-language="fr" data-useip="false" data-uid="awcc1444747035088"></div>
		<script type="text/javascript" src="http://oap.accuweather.com/launch.js"></script>
	</div>
</div>

<script type="text/javascript">
		var date = new Date(); // today
		prayTimes.setMethod('ISNA');
		var times = prayTimes.getTimes(date, [45.883, -72.483], -5);
		var list = ['Fajr', 'Sunrise', 'Dhuhr', 'Asr', 'Maghrib', 'Isha', 'Midnight'];
		var my_list = ['Fadjr', 'Chourouq', 'Dohr', 'Asr', 'Maghrib', 'Icha', 'Minuit'];

		// Fadjr
		document.getElementById('fadjr_text').innerHTML = my_list[0];
		document.getElementById('fadjr_time').innerHTML = times[list[0].toLowerCase()];

		document.getElementById('chourouq_text').innerHTML = my_list[1];
		document.getElementById('chourouq_time').innerHTML = times[list[1].toLowerCase()];

		document.getElementById('dohr_text').innerHTML = my_list[2];
		document.getElementById('dohr_time').innerHTML = times[list[2].toLowerCase()];

		document.getElementById('asr_text').innerHTML = my_list[3];
		document.getElementById('asr_time').innerHTML = times[list[3].toLowerCase()];

		document.getElementById('maghrib_text').innerHTML = my_list[4];
		document.getElementById('maghrib_time').innerHTML = times[list[4].toLowerCase()];

		document.getElementById('icha_text').innerHTML = my_list[5];
		document.getElementById('icha_time').innerHTML = times[list[5].toLowerCase()];
</script>
