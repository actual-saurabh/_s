<?php
$age = filter_input( INPUT_GET, 'deploy', FILTER_SANITIZE_STRING );

$meta_query = array(
	'key' => 'saurabh_theme_age',
	'value' => $age,
	'compare' => '<',
	'type' => 'NUMERIC',
);