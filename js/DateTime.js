function greg_date(id) {
  date = new Date;
  year = date.getFullYear();
  month = date.getMonth();
  months = new Array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
  d = date.getDate();
  day = date.getDay();
  days = new Array('Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi');
  
  result = '' + days[day] + ' ' + d + ' ' + months[month] + ' ' + year;
  document.getElementById(id).innerHTML = result;
  return true;
}

function local_time(id) {
	date = new Date;
	h = date.getHours();
  if (h < 10) {
      h = "0" + h;
  }
  m = date.getMinutes();
  if (m < 10) {
      m = "0" + m;
  }
  s = date.getSeconds();
  if (s < 10) {
      s = "0" + s;
  }
	
	result = h + ':' + m + ':' + s;
	document.getElementById(id).innerHTML = result;
  setTimeout('local_time("' + id + '");', '1000');
  return true;
}