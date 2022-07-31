<?php
$serverName= 'localhost';
$dBUsername= 'root';
$dBPassword= '';
$dBName = 'phpbikestore';

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if(!$conn){
    die('Connection failed: ' . mysqli_connect_error());
}
$sql = 'SELECT * FROM users';
$result = mysqli_query($conn, $sql);
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);