<?php
	$array = array("тест","дима");
	$string = serialize( $array );
	$array = unserialize( $string );
	//echo count($array);
	for ($i = 0; $i < count($array); $i++) {
		echo $array[$i]." ";
	}
	//echo $string;
?>