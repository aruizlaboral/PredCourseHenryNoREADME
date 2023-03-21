<?php 
$host = "localhost"; 
$user = "root"; 
$pass = "123456"; 
$dbname = "basededatos"; 

// Crear conexión 
$conn = new mysqli($host, $user, $pass, $dbname); 
// Verificar conexión 
if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error); 
}