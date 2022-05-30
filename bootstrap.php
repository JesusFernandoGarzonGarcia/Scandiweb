<?php 

const APP_DIR = __DIR__;

require_once APP_DIR . '/vendor/autoload.php';



$loader = new \Twig\Loader\FilesystemLoader(APP_DIR . './templates');


$twig = new \Twig\Environment($loader);


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
    
}