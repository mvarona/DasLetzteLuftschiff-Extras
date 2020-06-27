<?
$command = escapeshellcmd('python tempWuServer.py');
$output = shell_exec($command);
$date = explode(";", $output)[0];
$temp = explode(";", $output)[1];

$day = explode(".", $date)[0];
$month = explode(".", $date)[1];
$year = explode(".", $date)[2];

$formatedDate = date_create_from_format('d.m.y G:i', $date);

$ending = "<br/>*** Daten aus der Skulptur 'Das letzte Luftschiff' von Michael Ehlers ***";

if (date("d") == $day && date("m") == $month && date("y") == substr($year, 0, 2)){

	if (strpos(date_format($formatedDate, 'G:i'), "01:")){
		echo "Die zuletzte gemessene Temperatur ist von heute " . " um " . date_format($formatedDate, 'G:i') . ", und es ist " . $temp . $ending;
	} else {
		echo "Die zuletzte gemessene Temperatur ist von heute " . " um " . date_format($formatedDate, 'G:i') . ", und es ist " . $temp . $ending;
	}

	
} else {
	echo "Die zuletzte gemessene Temperatur ist von " . date_format($formatedDate, 'd') . " am ";

	switch ($month) {
		case '01':
			echo "Januar";
			break;
		case '02':
			echo "Februar";
			break;
		case '03':
			echo "März";
			break;
		case '04':
			echo "April";
			break;
		case '05':
			echo "Mai";
			break;
		case '06':
			echo "Juni";
			break;
		case '07':
			echo "Juli";
			break;
		case '08':
			echo "August";
			break;
		case '09':
			echo "September";
			break;
		case '10':
			echo "Oktober";
			break;
		case '11':
			echo "November";
			break;
		case '12':
			echo "Dezember";
			break;
	}

	echo date_format($formatedDate, 'Y') . " um " . date_format($formatedDate, 'G:i') . ", und es ist " . $temp . $ending;
}

	

?>