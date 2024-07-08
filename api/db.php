<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "comercio";

try 
{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 
catch(PDOException $e) 
{
    echo json_encode(['message' => "Connection failed: " . $e->getMessage()]);
    exit;
}
?>