<?php

global $config;
$config = array();

//caminhos
$protocolo = isset($_SERVER["HTTPS"]) ? 'https' : 'http';


// valores
define("BASE_URL", "http://localhost/api-rest-produtos/");
define("BASE_ASSETS", "http://localhost/api-rest-produtos/assets/");















$config['dbname'] = '';
$config['host']   = '';
$config['dbuser'] = '';
$config['dbpass'] = '';

global $db;
try {

	$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->exec('SET NAMES utf8');

} catch(PDOException $e) {

	$array = array();

	header("HTTP/1.0 403");

    $array['mensagem'] = "Falha na requisi��o.";
	echo json_encode($array);
	
	exit;
}

$config['jwt_secret_key'] = md5("1234");