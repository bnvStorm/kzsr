<?php 
// config data
require 'config.php';

// выборка всего из бд по найденному урлу
$sql = "SELECT * FROM kzsr_bd WHERE url = '$url'";

// var_dump($sql);
// MySQLi Object-oriented
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// выполнение запроса
$result = $conn->query($sql);
// var_dump($result);
// если результатов не найдено
if ($result->num_rows < 1) {
// редирект на 404 ошибку
header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found", true, 404);
include("404.html");
  	exit;
}
// если результат есть
if ($result->num_rows > 0) {
  // присваиваем значения переменных и закрываем соединение
  while($row = $result->fetch_assoc()) {
    $title = $row['title'];
    $descr = $row['descr'];
    $keywords = $row['keywords'];
    $h1 = $row['h1'];	
    $content = $row['content'];	
    $id = $row['id'];
    $urlimg = $row['urlimg'];
    $gost = $row['gost'];
    $ves = $row['ves'];
    $price = $row['price'];
    }
}  
$conn->close();

// подтягиваем шаблон
require 'page_teamplate.php';
