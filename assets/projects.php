<?php

	include('../../../config/glancrConfig.php');

	$todoist_api_token = getConfigValue("todoist_api_token");

	$url = "https://api.todoist.com/sync/v8/sync?token=" . $todoist_api_token . "&resource_types=[%22projects%22]";

	$data = file_get_contents($url);

	header("Content-Type: application/json");
	echo $data;

?>
