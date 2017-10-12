<?php
include_once('config.php');
$username = $_SESSION['username'];
// membuat URL GET request ke sistem A
$url = file_get_contents($base_url."current-event-list.php?username=".$username);


$get_json = json_decode($url);

?>
