<?php

	$link = 'https://www.foto-webcam.eu/webcam/luftschiff/?frame=1';
	$f = file_get_contents($link);
	$dateBeginStr = '"date":"';
	$dateBegin = strpos($f, $dateBeginStr);
	$dateEnd = strpos($f, '",', $dateBegin);

	$readDate = substr($f, ($dateBegin + strlen($dateBeginStr)), $dateEnd - ($dateBegin + strlen($dateBeginStr)));

	$tempBeginStr = '"wx":"';

	$tempBegin = strpos($f, $tempBeginStr);
	$tempEnd = strpos($f, '",', $tempBegin);

	$readTemp = substr($f, ($tempBegin + strlen($tempBeginStr)), $tempEnd - ($tempBegin + strlen($tempBeginStr)));
	$readTemp = str_replace('\u00b0', 'º', $readTemp);

	echo $readDate . ';' . $readTemp;

?>