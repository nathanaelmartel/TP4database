<?php
$begin_time = microtime(true);
error_reporting(E_ALL);
ini_set('display_errors', '1');

$pdo = new PDO('mysql:host=localhost;dbname=imap','root','100282');
