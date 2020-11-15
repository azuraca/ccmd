<div id="horaires-priere" class="panel panel-default">
	<div class="panel-heading">
		<!--<div id="greg-date"></div>-->
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
					<th>Prayer</th>
					<th style="text-align:right">Adhan</th>
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
      				<td>Friday prayer</td>
      				<td><strong>12:30</strong></td>
    			</tr>
			</tbody>
		</table>
	</div>
</div>

<!--
<div class="panel panel-default">
	<div class="panel-heading">Friday prayer</div>
  	<div class="panel-body">
  		<p>Friday prayer is fixed at <strong>12h30</strong>.</p>
	</div>
</div>
-->

<!--
<div class="panel panel-default">
  	<div class="panel-heading">Weekend Arabic Language Course</div>
	<div class="panel-body">
		<p>Registrations in progress for the year 2018-2019.<br>
		For any request for information or registration, please send an email to ccmd.drummondville@gmail.com, indicating the names and dates of birth of the children.</p>
	</div>
</div>
-->

<!--
<div class="panel panel-default">
  <div class="panel-heading">Donations</div>
  <div class="panel-body"><p><form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="TZ2CDP8EBZF5G">
<input type="image" src="https://www.paypalobjects.com/fr_CA/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - la solution de paiement en ligne la plus simple et la plus sécurisée !">
<img alt="" border="0" src="https://www.paypalobjects.com/fr_CA/i/scr/pixel.gif" width="1" height="1">
</form>
</p></div>
</div>

<div class="panel panel-default">
	<div class="panel-heading">
	Community Center project in Drummondville
	</div>
	<div class="panel-body">
		<p>
			
In order to buy a building for the Muslim Community Center in the city of Drummondville,
and to better serve the local Muslim community and all people passing through,
we appeal to your generosity.<br />
Caisse Desjardins account number: <b>90104 815 180 228 9</b>.<br /><br />
			<u>Documents to download:</u><br />
			<a href="Projet d'achat CCMD - fr.pdf">Purchase project (French)</a><br />
			<a href="Projet d'achat CCMD - ar.pdf">Purchase project (Arabic)</a><br />
			<a href="Bulletin de don - fr.pdf">Donation form (French)</a><br />
			<a href="Bulletin de don - ar.pdf">Donation form (Arabic)</a><br />
		</p>
	</div>
</div>
  -->

<div class="panel panel-default">
	<div class="panel-heading">
	Weather
	</div>
	<div class="panel-body">
		<a href="http://www.accuweather.com/fr/ca/drummondville/j2c/weather-forecast/50016" class="aw-widget-legal">
			<!--By accessing and/or using this code snippet, you agree to AccuWeather’s terms and conditions (in English) which can be found at http://www.accuweather.com/en/free-weather-widgets/terms and AccuWeather’s Privacy Statement (in English) which can be found at http://www.accuweather.com/en/privacy.-->
		</a><div id="awcc1444747035088" class="aw-widget-current" data-locationkey="50016" data-unit="c" data-language="en" data-useip="false" data-uid="awcc1444747035088"></div>
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