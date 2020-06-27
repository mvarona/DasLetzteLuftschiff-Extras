<?
$command = escapeshellcmd('python tempWuServer.py');
$output = shell_exec($command);
$date = explode(";", $output)[0];
$temp = explode(";", $output)[1];

$day = explode(".", $date)[0];
$month = explode(".", $date)[1];
$year = explode(".", $date)[2];

$formatedDate = date_create_from_format('d.m.y G:i', $date);

$ending = "<br/>*** Datos de la escultura 'Das letzte Luftschiff' de Michael Ehlers ***";

if (date("d") == $day && date("m") == $month && date("y") == substr($year, 0, 2)){

	if (strpos(date_format($formatedDate, 'G:i'), "01:")){
		echo "La última temperatura registrada es de hoy " . " a la " . date_format($formatedDate, 'G:i') . ", y es de " . $temp . $ending;
	} else {
		echo "La última temperatura registrada es de hoy " . " a las " . date_format($formatedDate, 'G:i') . ", y es de " . $temp . $ending;
	}

	
} else {
	echo "La última temperatura registrada es del " . date_format($formatedDate, 'd') . " de ";

	switch ($month) {
		case '01':
			echo "enero";
			break;
		case '02':
			echo "febrero";
			break;
		case '03':
			echo "marzo";
			break;
		case '04':
			echo "abril";
			break;
		case '05':
			echo "mayo";
			break;
		case '06':
			echo "junio";
			break;
		case '07':
			echo "julio";
			break;
		case '08':
			echo "agosto";
			break;
		case '09':
			echo "septiembre";
			break;
		case '10':
			echo "octubre";
			break;
		case '11':
			echo "noviembre";
			break;
		case '12':
			echo "diciembre";
			break;
	}

	echo " de " . date_format($formatedDate, 'Y') . " a las " . date_format($formatedDate, 'G:i') . ", y es de " . $temp . $ending;
}

	

?>