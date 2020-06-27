<?
$command = escapeshellcmd('python tempWuServer.py');
$output = shell_exec($command);
$date = explode(";", $output)[0];
$temp = explode(";", $output)[1];

$day = explode(".", $date)[0];
$month = explode(".", $date)[1];
$year = explode(".", $date)[2];

$formatedDate = date_create_from_format('d.m.y G:i', $date);

$ending = "<br/>*** Data from the sculpture 'Das letzte Luftschiff' by Michael Ehlers ***";

if (date("d") == $day && date("m") == $month && date("y") == substr($year, 0, 2)){

	if (strpos(date_format($formatedDate, 'G:i'), "01:")){
		echo "The last recorded temperature is from today " . " at " . date_format($formatedDate, 'G:i') . ", and it is " . $temp . $ending;
	} else {
		echo "The last recorded temperature is from today " . " at " . date_format($formatedDate, 'G:i') . ", and it is " . $temp . $ending;
	}

	
} else {
	echo "The last recorded temperature is from " . date_format($formatedDate, 'd') . " of ";

	switch ($month) {
		case '01':
			echo "January";
			break;
		case '02':
			echo "February";
			break;
		case '03':
			echo "March";
			break;
		case '04':
			echo "April";
			break;
		case '05':
			echo "May";
			break;
		case '06':
			echo "June";
			break;
		case '07':
			echo "July";
			break;
		case '08':
			echo "August";
			break;
		case '09':
			echo "September";
			break;
		case '10':
			echo "October";
			break;
		case '11':
			echo "November";
			break;
		case '12':
			echo "December";
			break;
	}

	echo " of " . date_format($formatedDate, 'Y') . " at " . date_format($formatedDate, 'G:i') . ", and it is " . $temp . $ending;
}

	

?>