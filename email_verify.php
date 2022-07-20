<?php
$apiKey = "0e9cbb639558353004776deab4d58182cc6a77cf5c7894f64a4d55ada434df4c"; //Production
// $apiKey = "9e88abc61d8bf585d755f79a4050b70e784a8be3fdadbacc5d92542f9c15cb6c"; //Sandbox
$email = $_POST['emailAddress'];
$url = "https://api.kickbox.io/v2/verify?email=" . $email ."&apikey=". $apiKey;

function get_data($url) {
	$ch = curl_init();
	$timeout = 5;
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
	$data = curl_exec($ch);
	curl_close($ch);
	return $data;
}

if (isset($email)) {
  header('Content-type: application/json');
  echo get_data($url);
}

?>
