<?php

function data($name,$age) {
	$data = array(
		"name" => $name, 
		"age" => $age,
		"is_married" => false,
		"interest_in_coding" => true
		);
	$json = json_encode($data);
	return $json;
}
