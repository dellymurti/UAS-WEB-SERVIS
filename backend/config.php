<?php 

require_once __DIR__ . '/autoload.php' ;
$sentiment=new \PHPInsight\Sentiment(); 

$host = 'localhost';
$user = 'root';
$password = '';
$db = 'ai_sentiment';

$conn = new mysqli($host, $user, $password, $db);

if ($conn === false) {
    echo"Error connecting to database";
}
    
include require __DIR__."autoload.php";