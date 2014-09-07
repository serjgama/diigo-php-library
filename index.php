<?php

$username = ''; //your Diigo username
$password = ''; // your Diigo password
$apiKey = ''; // your Diigo ApiKey

try {
    require_once 'Diigo.php';
    $diigo = new Diigo($username, $password, $apiKey);
    $response = json_decode($diigo->getAllBookMarks(100, 'all'), true); //array with decoded json string
    var_dump($response);
} catch (DiigoException $exc) {
    var_dump($exc->getMessage());
    // your code here to handle exceptions from Diigo library. 
} catch (Exception $exc) {
    var_dump($exc->getMessage());
    //your code here to handle any other general exception(s).
}