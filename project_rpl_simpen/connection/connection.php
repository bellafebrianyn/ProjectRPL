<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'simpen';

$connect = new mysqli($hostname, $username, $password, $database);
if ($connect->connect_error) {
    die("Error : " . $connect->$connect->connect_error);
}
