<?php 
	$obj = new \stdClass();
	$obj->name = "Ryan";
	$obj->address = "Jl.Sapri";
	$obj->is_married = "no";
	$obj->school = "smkn5";
	$obj->skills = "Gatau";

	$json = json_encode($obj);
	echo $json;
 ?>