<?php

$servername = "nicolasgzostats.mysql.db";
$username = "nicolasgzostats";
$password = "Lasoauch4";
$database = "nicolasgzostats";

$mysqli = new mysqli($servername, $username, $password, $database);

/* Vérification de la connexion */
if ($mysqli->connect_errno) {
    printf("Échec de la connexion : %s\n", $mysqli->connect_error);
    exit();
}

function clean($string) {
	$string = html_entity_decode(preg_replace('/&([a-zA-Z]{1,2})(?:acute|cedil|circ|grave|lig|orn|ring|slash|th|tilde|uml);/i', '$1', htmlentities($string, ENT_QUOTES, 'UTF-8')), ENT_QUOTES, 'UTF-8');
	$string = strtolower(trim(preg_replace('/[^0-9a-z]+/i', '-', $string), '-'));

	return $string;
}

if(isset($_SERVER['GEOIP_CITY']) && isset($_SERVER['GEOIP_COUNTRY_NAME']) && isset($_SERVER['GEOIP_COUNTRY_CODE'])) 
{
	/* Variables pour la requête */
	$table = "nicolasgigou_visitors";
	$uri = $_SERVER['SCRIPT_URL'];
	$date = new DateTime();
	$timestamp = $date->getTimestamp();
	$city = clean($_SERVER['GEOIP_CITY']);
	$country = clean($_SERVER['GEOIP_COUNTRY_NAME']);

	/* Insertion dans la base OVH */
	/* INSERT INTO `nicolasgigou_visitors` VALUES (,"test",0,"Test","Test"); */
	$sql = "INSERT INTO `".$table."` VALUES (0,'".$uri."',".$timestamp.",'".$city."','".$country."')";
	echo "<br />SQL request : ".$sql;
	if ($mysqli->query($sql) === true) { echo "<br /><br />New record created successfully"; } 
	else { echo "<br /><br />Erreur à l'insertion : " . $sql . "<br>" . $mysqli->error; }
}

$mysqli->close();
?>