<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "taskbook";

try
{
     $conn = new PDO("mysql:host={$servername};dbname={$dbname}",$username,$password);
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     
}
catch(PDOException $e)
{
    echo $e->getMessage();
    die();
}

include_once 'class.php';
	$user1 = new userEntry($conn);
?>