<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

$host   = 'mysql';
$db     = 'project_db';
$user   = 'project_user';
$pass   = 'project_password';

//$dbh = new PDO('mysql:host=mysql;dbname=' . $db, $user, $pass);
$dbh = new PDO(sprintf('mysql:host=%s;dbname=%s', $host, $db), $user, $pass);
phpinfo();