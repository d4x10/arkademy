<?php

function randomize($length) {
	if (is_numeric($length)) {
		$str = [];
		$char = array(2,4,6,8);
		$max = count($char) - 1;
		for ($i=0; $i < $length; $i++) { 
			$rand = mt_rand(0, $max);
			$str[] .= $char[$rand];
		}
		return array($str,array_sum($str));
	} else {
		return false;
	}
}